<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UangKuliah\DispensasiBpp;

class DispensasiBppSeeder extends Seeder
{
    public function run(): void
    {
        DispensasiBpp::create([
            'nama'              => 'SEKAR ARUMA PUTRI',
            'nim'               => '535250167',
            'fakultas_prodi'    => 'Fakultas Teknologi Informasi/TEKNIK INFORMATIKA',
            'alamat'            => 'JALAN DEPATI AMIR NO.8, SUNGAILIAT KAB. BANGKA',
            'no_telepon'        => '081387824061',
            'tahun_akademik'    => 'Genap 2025/2026',
            'info_pembayaran'   => "- Tahun akademik Genap 2025/2026 -> LUNAS\n- Tahun akademik Sebelumnya -> LUNAS",
            'status_pengajuan'  => 'BELUM ADA PENGAJUAN.',
            'tanggal_pengajuan' => null,
            'alasan_pengajuan'  => null,
        ]);
    }
}