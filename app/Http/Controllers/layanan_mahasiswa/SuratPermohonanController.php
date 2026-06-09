<?php

namespace App\Http\Controllers\layanan_mahasiswa;

use Illuminate\Http\Request;
use App\Models\layanan_mahasiswa\SuratPermohonan;
use App\Http\Controllers\Controller;

class SuratPermohonanController extends Controller
{
    public function index()
    {
        $riwayatPermohonan = SuratPermohonan::get();
        return view('layanan_mahasiswa.surat_permohonan', compact('riwayatPermohonan'));
    }
}