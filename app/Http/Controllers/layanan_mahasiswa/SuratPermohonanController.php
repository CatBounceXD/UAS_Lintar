<?php

namespace App\Http\Controllers\layanan_mahasiswa;

use Illuminate\Http\Request;
use App\Models\layanan_mahasiswa\SuratPermohonan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;   

class SuratPermohonanController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();

        if (!$authUser) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $dataStudi = DB::table('studi_mahasiswas')
                        ->where('user_id', $authUser->id)
                        ->get();

        $totalSks = 0;
        $totalMutu = 0;

        foreach ($dataStudi as $matkul) {
            $totalSks += $matkul->sks;
            $bobot = $matkul->bobot ?? 0; 
            $totalMutu += ($matkul->sks * $bobot);
        }

        $ipk = $totalSks > 0 ? round($totalMutu / $totalSks, 2) : 0.00;

        $user = (object) [
            'name'  => $authUser->name,
            'nim'   => $authUser->nim,
            'prodi' => $authUser->prodi ?? 'Teknik Informatika', 
            'sks'   => $totalSks,
            'ipk'   => number_format($ipk, 2) 
        ];

        $riwayatPengajuan = SuratPermohonan::where('user_id', $authUser->id)->get();

        return view('layanan_mahasiswa.surat_permohonan', compact('user', 'riwayatPengajuan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_surat'       => 'required|string|max:100',
            'bahasa'            => 'required|string|max:50',
            'nama_perusahaan'   => 'required|string|max:255',
            'alamat_perusahaan' => 'required|string',
            'nim_tambahan'      => 'nullable|string|max:255',
            'tgl_awal'          => 'required|date',
            'tgl_akhir'         => 'required|date|after_or_equal:tgl_awal',
        ]);

        SuratPermohonan::create([
            'user_id'           => Auth::id(), 
            'tanggal'           => now()->format('Y-m-d'),
            'jenis_permohonan'  => $validated['jenis_surat'], 
            'bahasa'            => $validated['bahasa'],
            'nama_perusahaan'   => $validated['nama_perusahaan'],
            'alamat_perusahaan' => $validated['alamat_perusahaan'],
            'nim_tambahan'      => $validated['nim_tambahan'],
            'tgl_awal'          => $validated['tgl_awal'],
            'tgl_akhir'         => $validated['tgl_akhir'],
        ]);
        
        return redirect('/surat-permohonan')->with('success', 'Surat Permohonan berhasil disubmit.');
    }
}