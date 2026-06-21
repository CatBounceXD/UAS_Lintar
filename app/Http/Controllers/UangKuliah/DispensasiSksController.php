<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\DispensasiSks; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DispensasiSksController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $dataSks = DispensasiSks::where('user_id', $userId)->first();

        return view('UangKuliah.dispensasi_sks', compact('dataSks'));
    }
}