<?php

namespace Database\Seeders\SuratPermohonan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\SuratPermohonan\Permohonan;

class PermohonanSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Permohonan::create([
                'user_id' => $user->id,
                'bahasa' => 'Indonesia',
                'jenis_permohonan' => 'Kerja Praktik',
                'nama_instansi' => 'PT Teknologi Nusantara',
                'alamat_instansi' => 'Jl. Jenderal Sudirman No. 123, Jakarta Raya',
                'nim_lain' => null,
                'keterangan_tujuan' => 'memberikan pengalaman praktek dan penerapan teori pada program sarjana strata satu',
                'tgl_awal' => '2026-07-01',
                'tgl_akhir' => '2026-08-31',
            ]);
        }
    }
}