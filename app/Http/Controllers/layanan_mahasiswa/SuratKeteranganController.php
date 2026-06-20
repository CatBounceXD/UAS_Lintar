<?php

namespace App\Http\Controllers\Layanan_mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SuratKeterangan\Pengajuan;

class SuratKeteranganController extends Controller
{
    public function index()
    {
        // Ambil data dari database
        $riwayatPengajuan = Pengajuan::orderBy('created_at', 'desc')->get();

        // Kirim data ke view beserta variabelnya
        return view('layanan_mahasiswa.surat_keterangan', compact('riwayatPengajuan'));
    }
}