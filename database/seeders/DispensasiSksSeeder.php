<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UangKuliah\DispensasiSks;

class DispensasiSksSeeder extends Seeder
{
    public function run(): void
    {
        DispensasiSks::create([
            'nama'               => 'SEKAR ARUMA PUTRI',
            'nomor_pokok_siswa'  => '535250167', 
            'fakultas_prodi'     => 'Fakultas Teknologi Informasi/TEKNIK INFORMATIKA',
            'alamat'             => 'JALAN DEPATI AMIR NO.8, SUNGAILIAT KAB. BANGKA',
            'nomor_telepon'      => '081387824061',
            'tahun_akademik'     => 'Genap 2025/2026',
            'status_pengajuan'   => 'TIDAK DAPAT MENGAJUKAN',
            'tanggal_pengajuan'  => null,
            'alasan_pengajuan'   => null,
        ]);
    }
}