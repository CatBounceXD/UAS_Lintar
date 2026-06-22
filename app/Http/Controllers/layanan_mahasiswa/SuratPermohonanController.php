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

        $riwayatPengajuan = SuratPermohonan::get();

        return view('layanan_mahasiswa.surat_permohonan', compact('user', 'riwayatPengajuan'));
    }

    public function store(Request $request)
    {
        SuratPermohonan::create([
            'user_id'           => Auth::id(), 
            'tanggal'           => date('Y-m-d'), 
            'jenis_permohonan'  => $request->jenis_surat, 
            'bahasa'            => $request->bahasa,
            'nama_perusahaan'   => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'nim_tambahan'      => $request->nim_tambahan,
            'tgl_awal'          => $request->tgl_awal,
            'tgl_akhir'         => $request->tgl_akhir,
        ]);
        
        return redirect('/surat-permohonan')->with('success', 'Surat Permohonan berhasil disubmit.');
    }
}