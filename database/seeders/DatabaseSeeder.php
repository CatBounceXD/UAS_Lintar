<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            StudiMahasiswaSeeder::class,
            BiodataMhsSeeder::class,
            DispensasiBppSeeder::class,
            DispensasiSksSeeder::class,
            TagihanPembayaranSeeder::class,
            SkemaPembayaranSeeder::class,
            QuesionerSeeder::class,
            PengumumanSeeder::class,
            BahanAjarSeeder::class,
            RpsSeeder::class,
            KalenderAkademikSeeder::class,
            PermohonanSeeder::class,
            KatalogBukuSeeder::class,
        ]);
        
    }
}