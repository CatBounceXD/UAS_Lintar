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

            [
                'judul_buku' => 'Dasar-Dasar Akuntansi Keuangan',
                'perpustakaan' => '2-Ekonomi',
                'call_number' => '657.42 DAS',
            ],

            [
                'judul_buku' => 'Pengantar Hukum Pidana di Indonesia',
                'perpustakaan' => '3-Hukum',
                'call_number' => '343.01 PEN',
            ],

            [
                'judul_buku' => 'Sistem Informasi Manajemen Berbasis Cloud',
                'perpustakaan' => '11-T. Informasi',
                'call_number' => '005.74 SIS',
            ],
            [
                'judul_buku' => 'Pelatihan perancangan dan pembuatan rak sandal berbahan kayu lapis kepada permudhita untuk pasraman kertajaya tangerang',
                'perpustakaan' => '4-FDI',
                'call_number' => '645.45(047.31) SUK p',
            ],
            [
                'judul_buku' => '#meyakini menghargai ala milenial : kumpulan karya finalis kompetisi @milenialislami 2018',
                'perpustakaan' => '4-FDI',
                'call_number' => '899 TIM m',
            ],
            [
                'judul_buku' => '[PENELITIAN - PKM ] "Pelayanan pemberian vaksinasi difteri ke II dalam rangka program outbreak response imunization (ORI) di Fak.Kedokteran, Fak.Psikologi,Fak.Ilmu Komunikasi Untar.',
                'perpustakaan' => '5-Kedokteran',
                'call_number' => '614.47 PEL -',
            ],
            [
                'judul_buku' => '[PENELITIAN - PKM ] Peningkatan kesehatan lanjut usia : penyuluhan dan interaksi Dokter dengan peserta Posbindu di Posbindu Kembangan Jakarta Barat.',
                'perpustakaan' => '5-Kedokteran',
                'call_number' => '618.97 PEN -',
            ],
            [
                'judul_buku' => '[PENELITIAN] Pengabdian kesehatan masyarakat: pelayanan kesehatan dalam pemeriksaan kesehatan jiwa: skrining awal pada mahasiswa angkatan 2018 Fakultas Kedokteran Universitas Tarumanagara. 2019 / dr. Anastasia Ratnawati; dr. Susy Olivia Lontoh; dr. Novendy',
                'perpustakaan' => '5-Kedokteran',
                'call_number' => '616.89 PEN -',
            ],
            [
                'judul_buku' => 'Applied Psychology (Journal)',
                'perpustakaan' => '6-Psikologi',
                'call_number' => '658.3 APP -',
            ],
            [
                'judul_buku' => '"Self Conscious-Emotion" atau "Other Conscious Emotions"? Pemodelan Peran Konstrual Diri dan Keterhubungan Sosial di Indonesia (Penelitian Awal Disertasi) [LP]',
                'perpustakaan' => '6-Psikologi',
                'call_number' => 'LP 18030 BUD s',
            ],
            [
                'judul_buku' => '101 American English proverbs: understanding language and culture through commonly used sayings/Harry Collis',
                'perpustakaan' => '7-Pascasarjana',
                'call_number' => '420 COL o',
            ],
            [
                'judul_buku' => '5-phase project management: a practical planning and implementation guide/Joseph W. Weiss',
                'perpustakaan' => '7-Pascasarjana',
                'call_number' => '658.404 WEI f',
            ],
            [
                'judul_buku' => 'A Basic guide for valuing a company/Wilbur M. Yegge',
                'perpustakaan' => '7-Pascasarjana',
                'call_number' => '658.16 YEG b',
            ],
            [
                'judul_buku' => 'Panduan Menjadi MC/Arya Budiman',
                'perpustakaan' => '10-Ilmu Komunikasi',
                'call_number' => '808.51 BUD p',
            ],
            [
                'judul_buku' => 'Budaya Populer Sebagai Komunikasi/Idi Subandy Ibrahim',
                'perpustakaan' => '10-Ilmu Komunikasi',
                'call_number' => '302.2 IBR b',
            ],
            [
                'judul_buku' => 'Komunikasi Bisnis/Andri Feriyanto',
                'perpustakaan' => '10-Ilmu Komunikasi',
                'call_number' => '658.45 FER k',
            ],

        ];

        foreach ($dataBuku as $buku) {
            KatalogBuku::create($buku);
        }
    }
}