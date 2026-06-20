<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UangKuliah\DispensasiSks;

class DispensasiSksSeeder extends Seeder
{
    public function run(): void
    {
        DispensasiSks::create([
            'user_id'            => 1,
            'tahun_akademik'     => 'Genap 2025/2026',
            'status_pengajuan'   => 'TIDAK DAPAT MENGAJUKAN',
            'tanggal_pengajuan'  => null,
            'alasan_pengajuan'   => null,
        ]);
    }
}