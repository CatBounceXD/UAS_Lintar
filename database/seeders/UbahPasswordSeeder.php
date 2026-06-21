<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biodata\UbahPassword; // <--- Memanggil model dari subfolder Biodata

class UbahPasswordSeeder extends Seeder
{
    public function run(): void
    {

        UbahPassword::truncate();

        UbahPassword::create([
            'nim'            => '535250159',
            'nama_mahasiswa' => 'SUMAYYA KAYLANI',
            'email_office'   => 'sumayya.535250159@stu.untar.ac.id',
        ]);
    }
}