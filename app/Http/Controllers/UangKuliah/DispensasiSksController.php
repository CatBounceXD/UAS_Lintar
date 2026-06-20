<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\DispensasiSks; 
use App\Http\Controllers\Controller;

class DispensasiSksController extends Controller
{
    public function index()
    {
   
        $dataSks = DispensasiSks::where('user_id', 1)->first();

        return view('UangKuliah.dispensasi_sks', compact('dataSks'));
    }
}