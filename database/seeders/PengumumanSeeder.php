<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengumuman;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengumuman::create([
            'tipe' => 'pengumuman',
            'isi'  => 'Pengisian Kartu Rencana Studi (KRS) Semester Genap telah dibuka. Silakan periksa status akademis dan tagihan uang kuliah Anda pada menu yang tersedia.'
        ]);

        Pengumuman::create([
            'tipe' => 'pengumuman',
            'isi'  => 'Jadwal herregistrasi dan pembayaran BPP cicilan termin kedua paling lambat tanggal 15 Juli 2026.'
        ]);

        Pengumuman::create([
            'tipe' => 'informasi',
            'isi'  => 'Pelatihan soft skills mahasiswa tingkat akhir akan dilaksanakan secara hybrid mulai minggu depan.'
        ]);
    }
}
