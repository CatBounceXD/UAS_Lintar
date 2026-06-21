<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\DispensasiBpp;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DispensasiBppController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $dataDispensasi = DispensasiBpp::where('user_id', $userId)->first();

        return view('UangKuliah.dispensasi_bpp', compact('dataDispensasi'));
    }
}