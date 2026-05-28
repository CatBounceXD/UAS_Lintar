<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeterangan;

class SuratKeteranganController extends Controller
{
    public function index()
    {
        $riwayatSurat = SuratKeterangan::get();
        return view('surat_keterangan', compact('riwayatSurat'));
    }
}