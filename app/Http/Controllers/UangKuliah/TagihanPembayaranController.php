<?php

namespace App\Http\Controllers\UangKuliah;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\UangKuliah\SkemaPembayaran;
use App\Models\UangKuliah\TagihanPembayaran;
use App\Models\Akademik\StudiMahasiswa;

class TagihanPembayaranController extends Controller
{
    public function index()
    {
        $mahasiswa = Auth::user();
        $userId = Auth::id();
        $dataSkema = SkemaPembayaran::where('user_id', $userId)->first();
        $tagihan = TagihanPembayaran::where('user_id', $userId)->get();

        if ($tagihan->isEmpty()) {
            
            $totalSks = StudiMahasiswa::where('user_id', $userId)->sum('sks');
            
            $tagihanBpp = 8000000;
            $tagihanSks = $totalSks * 250000; 

            TagihanPembayaran::create([
                'user_id' => $userId,
                'tahun_akademik' => '2026/2027 GANJIL',
                'jenis' => 'BPP',
                'no_va' => '18888' . $mahasiswa->nim . '01', 
                'tgl_batas_bayar' => '2026-08-01',
                'jumlah_tagihan' => $tagihanBpp,
                'rincian' => 'BPP Semester Ganjil',
                'status' => 'Belum Lunas'
            ]);

            if ($totalSks > 0) {
                TagihanPembayaran::create([
                    'user_id' => $userId,
                    'tahun_akademik' => '2026/2027 GANJIL',
                    'jenis' => 'SKS (' . $totalSks . ' SKS)',
                    'no_va' => '18888' . $mahasiswa->nim . '02',
                    'tgl_batas_bayar' => '2026-08-01',
                    'jumlah_tagihan' => $tagihanSks,
                    'rincian' => 'Biaya SKS Semester Ganjil',
                    'status' => 'Belum Lunas'
                ]);
            }
            
            $tagihan = TagihanPembayaran::where('user_id', $userId)->get();
        }

        return view('UangKuliah.tagihan_pembayaran', compact('mahasiswa', 'dataSkema', 'tagihan'));
    }
}