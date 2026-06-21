<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller; 
use App\Models\Biodata\UbahPassword;
use Illuminate\Http\Request;

class UbahPasswordController extends Controller
{
    public function index()
    {
        $dataAkun = UbahPassword::first(); 

        return view('biodata.ubah_password', compact('dataAkun'));
    }
    public function show(UbahPassword $ubahPassword)
    {
        return view('biodata.ubah_password', compact('ubahPassword'));
    }
}