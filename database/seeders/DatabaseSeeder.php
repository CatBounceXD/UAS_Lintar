<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\perpustakaan\QuesionerSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BiodataMhsSeeder::class,
            DispensasiBppSeeder::class,
            DispensasiSksSeeder::class,
            QuesionerSeeder::class,
        ]);
        
    }
}