<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanMbkm;

class LaporanMbkmController extends Controller
{
    public function index()
    {
        // Mengambil data pertama dari tabel laporan_mbkms
        $laporan = LaporanMbkm::first();
        
        return view('laporan_mbkm', compact('laporan'));
    }
}