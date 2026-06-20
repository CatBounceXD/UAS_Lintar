<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UangKuliah\SkemaPembayaran;

class SkemaPembayaranSeeder extends Seeder
{
    public function run(): void
    {
        SkemaPembayaran::create([
            'nama'            => 'SEKAR ARUMA PUTRI',
            'nim'             => '535250167',
            'semester_tahun'  => 'Semester Ganjil 2026/2027',
            'va_full'         => '1888853525016710',
            'nominal_full'    => '9000000', 
            'va_termin1'      => '1888853525016711',
            'nominal_termin1' => '5535000',
            'va_termin2'      => '1888853525016712',
            'nominal_termin2' => '3690000',
            'total_termin'    => '9225000',
            'skema_dipilih'   => 'FULL PAYMENT(PENUH)'
        ]);
    }
}