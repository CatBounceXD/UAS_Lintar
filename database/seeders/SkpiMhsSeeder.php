<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SKPI\SkpiMhs;

class SkpiMhsSeeder extends Seeder
{
    public function run(): void
    {
        SkpiMhs::truncate();

        SkpiMhs::create([
            'nim'             => '535250159',
            'nama_mahasiswa'  => 'SUMAYYA KAYLANI',
            'jumlah_kategori' => 2
        ]);
    }
}