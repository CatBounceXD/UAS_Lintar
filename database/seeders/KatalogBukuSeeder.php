<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perpustakaan\KatalogBuku;

class KatalogBukuSeeder extends Seeder
{
    public function run(): void
    {
        $dataBuku = [

            [
                'judul_buku' => '100 Indonesia Innovations',
                'call_number' => '303.4 IND s',
                'perpustakaan' => '1-Pusat'
            ],

            [
                'judul_buku' => '1001 TIP C/C++',
                'call_number' => '005.369 JAM s',
                'perpustakaan' => '11-T. Informasi'
            ],

            [
                'judul_buku' => 'Akuntansi Dasar',
                'call_number' => '657 AKU',
                'perpustakaan' => '2-Ekonomi'
            ],

            [
                'judul_buku' => 'Hukum Perdata Indonesia',
                'call_number' => '340 HUK',
                'perpustakaan' => '3-Hukum'
            ],

            [
                'judul_buku' => 'Psikologi Umum',
                'call_number' => '150 PSI',
                'perpustakaan' => '6-Psikologi'
            ],

            [
                'judul_buku' => 'Basis Data MySQL',
                'call_number' => '005 BAS',
                'perpustakaan' => '11-T. Informasi'
            ],

            [
                'judul_buku' => 'Desain Grafis Modern',
                'call_number' => '741 DES',
                'perpustakaan' => '8-FSRD'
            ],

        ];

        foreach ($dataBuku as $buku) {
            KatalogBuku::create($buku);
        }
    }
}