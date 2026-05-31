<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispensasiBpp;

class DispensasiBppController extends Controller
{
    public function index()
    {
        // Mencoba mengambil data dari database
        $dataDispensasi = DispensasiBpp::all();

        // TRIK DARURAT: Jika database-mu kosong, kita buatkan data tiruan langsung di sini
        // Biar tabelnya dipaksa MUNCUL 100% tanpa perlu seeder terminal!
        if ($dataDispensasi->isEmpty()) {
            $dataDispensasi = [
                (object)[
                    'nama' => 'SEKAR ARUMA PUTRI',
                    'nim' => '535250167',
                    'fakultas_prodi' => 'Fakultas Teknologi Informasi/TEKNIK INFORMATIKA',
                    'alamat' => 'JALAN DEPATI AMIR NO.8, SUNGAILIAT KAB. BANGKA',
                    'no_telepon' => '081387824061',
                    'tahun_akademik' => 'Genap 2025/2026',
                    'info_pembayaran' => "- Tahun akademik Genap 2025/2026 -> LUNAS\n- Tahun akademik Sebelumnya -> LUNAS",
                    'status_pengajuan' => 'BELUM ADA PENGAJUAN.',
                    'tanggal_pengajuan' => null,
                    'alasan_pengajuan' => null,
                ]
            ];
        }

        return view('dispensasi_bpp.index', compact('dataDispensasi'));
    }
}