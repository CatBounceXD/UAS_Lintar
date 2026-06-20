<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Perpustakaan\Quesioner;

class QuesionerSeeder extends Seeder
{
    public function run(): void
    {
        // Mengambil user pertama yang baru saja dibuat oleh UserSeeder
        $user = User::first();

        if (!$user) {
            return;
        }

        Quesioner::create([
            'user_id' => $user->id,

            // Aktivitas Anda di Perpustakaan
            'frekuensi_kunjungan' => '2-4 kali',
            'alasan_kunjungan' => 'Mencari referensi tugas',
            'frekuensi_akses_web' => '4-6 kali',
            'alasan_akses_web' => 'Mencari jurnal',

            // * Kinerja Petugas (p1 - p8) beserta sampel alasan
            'p1' => 6,
            'p2' => 7, 'alasan_p2' => 'Petugas sangat sabar mengarahkan',
            'p3' => 6, 'alasan_p3' => 'Keluhan sistem komputer langsung ditangani',
            'p4' => 6,
            'p5' => 7, 'alasan_p5' => 'Selalu mengucapkan salam',
            'p6' => 6, 'alasan_p6' => 'Ramah dan murah senyum',
            'p7' => 5, 'alasan_p7' => 'Tepat waktu',
            'p8' => 6, 'alasan_p8' => 'Sesuai dengan jadwal operasional',

            // * Kualitas Informasi dan Akses Informasi (i1 - i8) beserta sampel alasan
            'i1' => 7, 'alasan_i1' => 'Buku teks prodi saya sangat lengkap',
            'i2' => 6, 'alasan_i2' => 'E-journal dapat diakses dengan lancar',
            'i3' => 5,
            'i4' => 6, 'alasan_i4' => 'Durasi pinjam sudah cukup baik',
            'i5' => 7, 'alasan_i5' => 'Banyak pengadaan buku cetak baru tahun ini',
            'i6' => 6,
            'i7' => 6,
            'i8' => 7, 'alasan_i8' => 'OPAC komputer pencari sangat user friendly',

            // * Kenyamanan Ruangan Perpustakaan (r1 - r7)
            'r1' => 6,
            'r2' => 7,
            'r3' => 6,
            'r4' => 5,
            'r5' => 6,
            'r6' => 7,
            'r7' => 6,

            // Usulan dan Saran Perbaikan
            'saran' => 'Perbanyak koleksi ebook dan tingkatkan bandwidth wifi.'
        ]);

    }
}