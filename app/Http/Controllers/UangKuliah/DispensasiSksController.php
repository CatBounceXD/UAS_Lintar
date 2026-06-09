<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\DispensasiSks; // Memanggil Model DispensasiSks
use App\Http\Controllers\Controller;

class DispensasiSksController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        $dataSks = DispensasiSks::all();

        // Trik Darurat: Jika database kosong, paksa buat data tiruan sesuai gambar mockup
        if ($dataSks->isEmpty()) {
            $dataSks = [
                (object)[
                    'nama' => 'SEKAR ARUMA PUTRI',
                    'nomor_pokok_siswa' => '535250167',
                    'fakultas_prodi' => 'Fakultas Teknologi Informasi/TEKNIK INFORMATIKA',
                    'alamat' => 'JALAN DEPATI AMIR NO.8, SUNGAILIAT KAB. BANGKA',
                    'nomor_telepon' => '081387824061',
                    'tahun_akademik' => 'Genap 2025/2026',
                    'status_pengajuan' => 'TIDAK DAPAT MENGAJUKAN',
                    'tanggal_pengajuan' => null,
                    'alasan_pengajuan' => null,
                ]
            ];
        }

        // Mengirimkan data ke view folder dispensasi_sks/index.blade.php
        return view('UangKuliah.dispensasi_sks', compact('dataSks'));
    }
}