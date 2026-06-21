<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perpustakaan\KatalogSkripsi;

class KatalogSkripsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul_skripsi' => 'PENERAPAN PRINSIP SUBSTANSI MENGUNGGULI BENTUK (SUBSTANCE OVER FORM) DALAM PENYELESAIAN SENGKETA PAJAK : STUDI KASUS PUTUSAN PENGADILAN PAJAK DI INDONESIA',
                'pengarang' => 'Flindraning',
                'fakultas' => 'Ekonomi', // Pastikan teks ini sama dengan value di select option Blade kamu
                'tahun' => '2024',
            ],
            [
                'judul_skripsi' => 'Pengaruh daya, tarik misi, motivasi kerja, kehormatan dan keterbukaan, kerjasama dan fleksibilitas, perlakuan adil dan kepercayaan kepada pimpinan terhadap perilaku whistleblowing untuk mengidentifikasi fraud',
                'pengarang' => 'Yenyen Hendris',
                'fakultas' => 'Ekonomi',
                'tahun' => '2025',
            ],
            [
                'judul_skripsi' => 'Abnormal return saham sebelum dan sesudah pengumuman merger dan akuisisi pada emiten yang terdaftar di BEI tahun 2014-2018.',
                'pengarang' => 'Iwan Harianto',
                'fakultas' => 'Ekonomi',
                'tahun' => '2023',
            ],
            [
                'judul_skripsi' => 'Analisa Faktor Internal dan Eksternal yang Mempengaruhi Profitabilitas Bank yang Terdaftar di Bursa Efek Indonesia Pada Kurun Waktu 2011 2015',
                'pengarang' => 'Leo Dadyo Pamungkas',
                'fakultas' => 'Ekonomi',
                'tahun' => '2024',
            ],
            [
                'judul_skripsi' => 'Analisa faktor-faktor yang mempengaruhi terjadinya audit delay (studi empiris pada perusahaan manufaktur yang ada di BEI tahun 2014-2016)',
                'pengarang' => 'Nia Finalia',
                'fakultas' => 'Ekonomi',
                'tahun' => '2023',
            ],
            // Kamu juga bisa menambahkan contoh untuk Fakultas Teknik agar bisa ditest filternya
            [
                'judul_skripsi' => 'Rancang Bangun Sistem Informasi Perpustakaan Berbasis Web Framework Laravel',
                'pengarang' => 'Jordan Christian',
                'fakultas' => 'Teknik',
                'tahun' => '2026',
            ],
            [
                'judul_skripsi' => '"Perlindungan Hukum Terhadap Orang Dalam Gangguan Jiwa Dalam Suatu Perkawinan Tanpa Izin Dari Wali (Studi Putusan Pengadilan Agama Jakarta Selatan Nomor4255/PDT.G/2019/PAJS)"',
                'pengarang' => 'Zalfa, Rania',
                'fakultas' => 'Hukum',
                'tahun' => '2026',
            ],
            [
                'judul_skripsi' => 'Adopsi ditinjau dalam rangka pembinaan hukum nasional Youlan Bastamansyah',
                'pengarang' => 'BASTAMANSYAH, YOULAN',
                'fakultas' => 'Hukum',
                'tahun' => '2025',
            ],
            [
                'judul_skripsi' => 'Analisis Keamanan Jaringan Wi-Fi Menggunakan Penetration Testing di Perusahaan XYZ',
                'pengarang' => 'Pratama, Steven',
                'fakultas' => 'Teknik',
                'tahun' => '2019',
            ],
            [
                'judul_skripsi' => 'Analisis Sentimen Media Sosial Menggunakan NLP pada Aplikasi X',
                'pengarang' => 'Aida, Syafiqa',
                'fakultas' => 'Teknik',
                'tahun' => '2021',
            ],
            [
                'judul_skripsi' => 'Analisis Big Data untuk Prediksi Penjualan Produk E-Commerce',
                'pengarang' => 'Rehuellah, Yael',
                'fakultas' => 'Teknik',
                'tahun' => '2020',
            ],
            [
                'judul_skripsi' => 'Analisis Efisiensi Algoritma Sorting pada Dataset Besar Berbasis Python',
                'pengarang' => 'Key, Sumayya',
                'fakultas' => 'Teknik',
                'tahun' => '2022',
            ],
            [
                'judul_skripsi' => 'Sistem Kendali Robot Menggunakan Raspberry Pi Berbasis Wireless',
                'pengarang' => 'Aruma, Sekar',
                'fakultas' => 'Teknik',
                'tahun' => '2018',
            ],
            
        ];

        foreach ($data as $item) {
            KatalogSkripsi::create($item);
        }
    }
}