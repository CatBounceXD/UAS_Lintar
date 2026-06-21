<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UangKuliah\SkemaPembayaran;

class SkemaPembayaranSeeder extends Seeder
{
    public function run(): void
    {
        SkemaPembayaran::create([
            'user_id'         => 1, 
            'semester_tahun'  => 'Semester Ganjil 2026/2027',
            'skema_dipilih'   => null, 
            'va_full'         => '1888853525016711',
            'nominal_full'    => 9000000,
            'va_termin1'      => '1888853525016712',
            'nominal_termin1' => 4500000,
            'va_termin2'      => '1888853525016713',
            'nominal_termin2' => 4500000,
            'total_termin'    => 9000000,
        ]);
    }
}