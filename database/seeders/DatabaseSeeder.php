<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            BiodataMhsSeeder::class,
            UbahPasswordSeeder::class,
            SkpiMhsSeeder::class,
            StudiMahasiswaSeeder::class,
            BahanAjarSeeder::class,
            RpsSeeder::class,
            KalenderAkademikSeeder::class,
            PengumumanSeeder::class,
            DispensasiBppSeeder::class,
            DispensasiSksSeeder::class,
            TagihanPembayaranSeeder::class,
            SkemaPembayaranSeeder::class,
            PermohonanSeeder::class,
            QuesionerSeeder::class,
            KatalogBukuSeeder::class,
            KatalogSkripsiSeeder::class,
            // \Database\Seeders\Perpustakaan\DatabaseSeederKB::class,
        ]);
    }
}