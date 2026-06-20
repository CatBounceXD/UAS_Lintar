<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UangKuliah\DispensasiBpp;

class DispensasiBppSeeder extends Seeder
{
    public function run(): void
    {
        DispensasiBpp::create([
            'user_id'           => 1,
            'tahun_akademik'    => 'Genap 2025/2026',
            'info_pembayaran'   => "- Tahun akademik Genap 2025/2026 -> LUNAS\n- Tahun akademik Sebelumnya -> LUNAS",
            'status_pengajuan'  => 'BELUM ADA PENGAJUAN.',
            'tanggal_pengajuan' => null,
            'alasan_pengajuan'  => null,
        ]);
    }
}