<?php

namespace Database\Seeders\perpustakaan;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\perpustakaan\Quesioner;

class QuesionerSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            return;
        }

        Quesioner::create([
            'user_id' => $user->id,

            'frekuensi_kunjungan' => '2-4 kali',
            'alasan_kunjungan' => 'Mencari referensi tugas',

            'frekuensi_akses_web' => '4-6 kali',
            'alasan_akses_web' => 'Mencari jurnal',

            'petugas_memahami' => 6,
            'petugas_membimbing' => 7,
            'fasilitas_memadai' => 6,
            'koleksi_lengkap' => 7,
            'kenyamanan_ruangan' => 6,

            'saran' => 'Perbanyak koleksi ebook'
        ]);
    }
}