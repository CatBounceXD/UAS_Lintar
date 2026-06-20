<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\DispensasiBpp;
use App\Http\Controllers\Controller;

class DispensasiBppController extends Controller
{
    public function index()
    {
        $dataDispensasi = DispensasiBpp::where('user_id', 1)->first();

        return view('UangKuliah.dispensasi_bpp', compact('dataDispensasi'));
    }
}