<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SKPI\IsiSkpi;

class IsiSkpiSeeder extends Seeder
{
    public function run(): void
    {
        IsiSkpi::create([
            'nama_kegiatan' => 'Mengikuti Seminar Nasional Backend Developer',
            'peran'         => 'Peserta',
            'tingkat'       => 'Nasional'
        ]);
    }
}