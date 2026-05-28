<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPermohonan;

class SuratPermohonanController extends Controller
{
    public function index()
    {
        $riwayatPermohonan = SuratPermohonan::get();
        return view('surat_permohonan', compact('riwayatPermohonan'));
    }
}