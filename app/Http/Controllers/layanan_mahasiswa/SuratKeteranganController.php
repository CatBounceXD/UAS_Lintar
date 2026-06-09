<?php

namespace App\Http\Controllers\layanan_mahasiswa;

use Illuminate\Http\Request;
use App\Models\layanan_mahasiswa\SuratKeterangan;
use App\Http\Controllers\Controller;

class SuratKeteranganController extends Controller
{
    public function index()
    {
        $riwayatSurat = SuratKeterangan::get();
        return view('layanan_mahasiswa.surat_keterangan', compact('riwayatSurat'));
    }
}