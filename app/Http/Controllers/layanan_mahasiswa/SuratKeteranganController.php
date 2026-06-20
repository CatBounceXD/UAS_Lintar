<?php

namespace App\Http\Controllers\layanan_mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratKeterangan\Pengajuan;

class SuratKeteranganController extends Controller
{
    public function index()
    {
        $riwayatPengajuan = Pengajuan::orderBy('created_at', 'desc')->get();
        $user = User::find(1); 
        return view('layanan_mahasiswa.surat_keterangan', compact('riwayatPengajuan', 'user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bahasa' => 'required',
            'jenis_surat' => 'required',
            'tanggal_surat' => 'required|date',
            'fakultas' => 'required',
            'jurusan' => 'required',
        ]);

        // 🔥 INI DIA JALUR VVIP-NYA! 🔥
        // Kalau browser masih ngirim teks typo "Mahasiwa", kita paksa ganti jadi "Mahasiswa" disini!
        if ($validated['jenis_surat'] == 'Mahasiwa Aktif') {
            $validated['jenis_surat'] = 'Mahasiswa Aktif';
        }

        // Ambil data Siswa 1
        $user = User::find(1);

        // Suapin semua data
        $validated['user_id'] = $user->id; 
        $validated['nim'] = $user->nim;    
        $validated['nama'] = $user->name;  
        $validated['sks'] = $user->sks ?? 16;
        $validated['ipk'] = $user->ipk ?? 3.43;
        $validated['jurusan'] = 'S1 ' . $user->prodi; 

        // Simpan ke database
        Pengajuan::create($validated);
        
        return redirect()->back()->with('success', 'Surat keterangan berhasil diajukan.');
    }
}