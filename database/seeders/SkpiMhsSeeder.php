<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SKPI\SkpiMhs; // <-- Menunjuk ke subfolder SKPI kamu

class SkpiMhsSeeder extends Seeder
{
    public function run(): void
    {
        // Kosongkan data lama terlebih dahulu agar tidak duplikat
        SkpiMhs::truncate();

        // Isi data dummy dengan jumlah kategori kurang dari 3 (sesuai screenshot target)
        SkpiMhs::create([
            'nim'             => '535250159',
            'nama_mahasiswa'  => 'SUMAYYA KAYLANI',
            'jumlah_kategori' => 2 // Kita set 2 agar memicu validasi "Kurang dari 3 kategori"
        ]);
    }
}