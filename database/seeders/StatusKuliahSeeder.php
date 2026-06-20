<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akademik\StatusKuliah;

class StatusKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        StatusKuliah::create([
            'user_id' => 1, 'tahun_akademik' => 'Gasal 2025', 'status' => 'Aktif',
            'sks_ambil' => 20, 'sks_peroleh' => 20, 'ips' => 3.30,
            'sks_ambil_kumulatif' => 20, 'sks_peroleh_kumulatif' => 20, 'ipk' => 3.30
        ]);
        StatusKuliah::create([
            'user_id' => 1, 'tahun_akademik' => 'Genap 2025', 'status' => 'Aktif',
            'sks_ambil' => 20, 'sks_peroleh' => null, 'ips' => null,
            'sks_ambil_kumulatif' => null, 'sks_peroleh_kumulatif' => null, 'ipk' => null
        ]);
    }
}
