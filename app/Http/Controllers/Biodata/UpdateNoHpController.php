<?php

namespace App\Http\Controllers\Biodata;

use App\Http\Controllers\Controller;
use App\Models\Biodata\BiodataMhs; 
use Illuminate\Http\Request;

class UpdateNoHpController extends Controller
{
    public function index()
    {
        $mahasiswa = BiodataMhs::first();

        return view('Biodata.updateNoHp', compact('mahasiswa'));
    }
}