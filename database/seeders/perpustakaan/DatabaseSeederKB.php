<?php

namespace Database\Seeders\perpustakaan;

use Illuminate\Database\Seeder;
use Database\Seeders\perpustakaan\KatalogBukuSeeder;

class DatabaseSeederKB extends Seeder
{
    public function run(): void
    {
        $this->call([
            KatalogBukuSeeder::class,
        ]);
    }
}