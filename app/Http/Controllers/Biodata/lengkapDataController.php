<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller;
use App\Models\Biodata\BiodataMhs; // Mengambil model dari folder Biodata
use Illuminate\Http\Request;

class lengkapDataController extends Controller
{

    public function index()
    {
        return view('Biodata.lengkapData');
    }

    public function proses()
    {

        $mahasiswa = BiodataMhs::first();

        return view('Biodata.dashboardRegistrasi', compact('mahasiswa'));
    }
}