<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\DispensasiBpp;
use App\Http\Controllers\Controller;

class DispensasiBppController extends Controller
{
    public function index()
    {
    
        $dataDispensasi = DispensasiBpp::all();

        return view('UangKuliah.dispensasi_bpp', compact('dataDispensasi'));
    }
}