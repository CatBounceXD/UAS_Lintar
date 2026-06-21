<?php

namespace App\Http\Controllers\layanan_mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\SuratKeterangan\Pengajuan;
use App\Models\Akademik\StudiMahasiswa; 

class SuratKeteranganController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $riwayatPengajuan = Pengajuan::where('user_id', $user->id)
                                ->orderBy('created_at', 'desc')
                                ->get();

        $studi = StudiMahasiswa::where('user_id', $user->id)->get();
        $totalSks = $studi->sum('sks');
        $sksDiperoleh = $studi->whereNotNull('bobot')->sum('sks');
        
        $mutu = 0;
        foreach($studi as $mk) {
            if($mk->bobot !== null) {
                $mutu += ($mk->sks * $mk->bobot);
            }
        }
        
        $ipk = $sksDiperoleh > 0 ? number_format($mutu / $sksDiperoleh, 2) : 0;

        return view('layanan_mahasiswa.surat_keterangan', compact('riwayatPengajuan', 'user', 'totalSks', 'ipk'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bahasa' => 'required',
            'jenis_surat' => 'required',
            'tanggal_surat' => 'required|date',
        ]);

        if ($validated['jenis_surat'] == 'Mahasiwa Aktif') {
            $validated['jenis_surat'] = 'Mahasiswa Aktif';
        }

        $user = Auth::user();

        $studi = StudiMahasiswa::where('user_id', $user->id)->get();
        $totalSks = $studi->sum('sks');
        $sksDiperoleh = $studi->whereNotNull('bobot')->sum('sks');
        $mutu = 0;
        foreach($studi as $mk) {
            if($mk->bobot !== null) {
                $mutu += ($mk->sks * $mk->bobot);
            }
        }
        $ipk = $sksDiperoleh > 0 ? number_format($mutu / $sksDiperoleh, 2) : 0;

        $validated['user_id'] = $user->id; 
        $validated['sks'] = $totalSks;
        $validated['ipk'] = $ipk;
        $validated['persetujuan'] = $request->has('persetujuan') ? 1 : 0;
        $validated['fakultas'] = 'Teknologi Informasi'; 

        if ($user->prodi == 'Sistem Informasi') {
            $validated['jurusan'] = 'S1 Sistem Informasi';
        } else {
            $validated['jurusan'] = 'S1 Teknik Informatika';
        }

        Pengajuan::create($validated);
        
        return redirect()->back()->with('success', 'Surat keterangan berhasil diajukan.');
    }
}