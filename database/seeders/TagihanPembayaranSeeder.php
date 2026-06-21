<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UangKuliah\TagihanPembayaran; 

class TagihanPembayaranSeeder extends Seeder
{
    public function run(): void
    {        // 1. Data BPP (Full Payment)
        TagihanPembayaran::create([
            'user_id' => 1,
            'no_va' => '1888853525016710',
            'tahun_akademik' => '2025 GENAP',
            'jenis' => 'BPP (Full Payment)',
            'tgl_batas_bayar' => '2026-01-08',
            'jumlah_tagihan' => 5000000,
            'status' => 'Lunas',
            'rincian' => 'BPP: Rp. 5,000,000',
            'bayar_bank' => 'MANDIRI',
            'bayar_tanggal' => '2026-01-08',
            'bayar_nominal' => 5000000,
        ]);

        // 2. Data SKS
        TagihanPembayaran::create([
            'user_id' => 1,
            'no_va' => '1888853525016720',
            'tahun_akademik' => '2025 GENAP',
            'jenis' => 'SKS (Full Payment)',
            'tgl_batas_bayar' => '2026-04-02',
            'jumlah_tagihan' => 8000000,
            'status' => 'Lunas',
            'rincian' => 'SKS: Rp. 8,000,000',
            'bayar_bank' => 'MANDIRI',
            'bayar_tanggal' => '2026-04-06',
            'bayar_nominal' => 8000000,
        ]);

        // 3. Data Uang Kuliah Semester 1
        TagihanPembayaran::create([
            'user_id' => 1,
            'no_va' => '1888853525016700',
            'tahun_akademik' => '2025 GANJIL',
            'jenis' => 'Uang Kuliah Semester 1',
            'tgl_batas_bayar' => '2025-09-15',
            'jumlah_tagihan' => 17000000,
            'status' => 'Lunas',
            'rincian' => 'Uang Kuliah Semester 1: Rp. 17,000,000',
            'bayar_bank' => 'MANDIRI',
            'bayar_tanggal' => '2025-09-15',
            'bayar_nominal' => 17000000,
        ]);
    }
}