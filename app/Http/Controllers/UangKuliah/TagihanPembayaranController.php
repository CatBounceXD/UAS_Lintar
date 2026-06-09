<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\TagihanPembayaran;
use App\Http\Controllers\Controller;

class TagihanPembayaranController extends Controller
{
    public function index()
    {
       
        try {
            $dataTagihan = TagihanPembayaran::all();
        } catch (\Exception $e) {
            $dataTagihan = collect([]); 
        }

        if ($dataTagihan->isEmpty()) {
            $dataTagihan = [
                // Data Semester Genap
                (object)[
                    'tahun_akademik' => '2025 GENAP',
                    'jenis' => 'BPP (Full Payment)',
                    'no_va' => '1888853525016710',
                    'tgl_batas_bayar' => '08 January 2026',
                    'jumlah_tagihan' => '9,000,000',
                    'rincian' => 'BPP: Rp. 9,000,000',
                    'bayar_bank' => 'MANDIRI',
                    'bayar_tanggal' => '08 January 2026',
                    'bayar_nominal' => '9,000,000',
                    'status' => 'LUNAS'
                ],
                (object)[
                    'tahun_akademik' => '2025 GENAP',
                    'jenis' => 'SKS (Full Payment)',
                    'no_va' => '1888853525016720',
                    'tgl_batas_bayar' => '02 April 2026',
                    'jumlah_tagihan' => '8,240,000',
                    'rincian' => "SKS: Rp. 8,000,000\nDenda: Rp. 240,000",
                    'bayar_bank' => 'MANDIRI',
                    'bayar_tanggal' => '06 April 2026',
                    'bayar_nominal' => '8,240,000',
                    'status' => 'LUNAS'
                ],
                // Data Semester Ganjil
                (object)[
                    'tahun_akademik' => '2025 GANJIL',
                    'jenis' => 'Uang Kuliah Semester 1',
                    'no_va' => '1888853525016700',
                    'tgl_batas_bayar' => '15 Sep 2025',
                    'jumlah_tagihan' => '17,000,000',
                    'rincian' => 'Uang Kuliah Semester 1: Rp. 17,000,000',
                    'bayar_bank' => 'MANDIRI',
                    'bayar_tanggal' => '15 Sep 2025',
                    'bayar_nominal' => '17,000,000',
                    'status' => 'LUNAS'
                ]
            ];
        }

        $groupedTagihan = collect($dataTagihan)->groupBy('tahun_akademik');

        return view('UangKuliah.tagihan_pembayaran', compact('groupedTagihan'));
    }
}