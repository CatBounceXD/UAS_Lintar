<?php

namespace App\Http\Controllers\MBKM;

use Illuminate\Http\Request;
use App\Models\MBKM\LaporanMbkm;
use App\Http\Controllers\Controller;

class LaporanMbkmController extends Controller
{
    public function index()
    {
        // Mengambil data pertama dari tabel laporan_mbkms
        $laporan = LaporanMbkm::first();
        
        return view('MBKM.laporan_mbkm', compact('laporan'));
    }
}