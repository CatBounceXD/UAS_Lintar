<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\SkemaPembayaran;
use App\Http\Controllers\Controller;

class SkemaPembayaranController extends Controller
{
    public function index()
    {
        
        $dataSkema = SkemaPembayaran::all();

        return view('UangKuliah.skema_pembayaran', compact('dataSkema'));
    }
}