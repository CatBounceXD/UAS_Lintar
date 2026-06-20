<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akademik\KalenderAkademik;

class KalenderAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['tahun_akademik' => '2026 Ganjil', 'tanggal' => '08 Jun 2026 s/d 17 Jul 2026', 'keterangan' => 'Pengajuan Permohonan Pindah Semester Ganjil 2026/2027'],
            ['tahun_akademik' => '2026 Ganjil', 'tanggal' => '08 Jun 2026 s/d 17 Jul 2026', 'keterangan' => 'Pengajuan Permohonan Aktif Kuliah Kembali Semester Ganjil 2026/2027'],
            ['tahun_akademik' => '2026 Ganjil', 'tanggal' => '08 Jun 2026 s/d 09 Jul 2026', 'keterangan' => 'Pembayaran BPP (kelas Pagi) Semester Ganjil 2026/2027'],
        ];
        foreach ($data as $item) { KalenderAkademik::create($item); }
    }
}
