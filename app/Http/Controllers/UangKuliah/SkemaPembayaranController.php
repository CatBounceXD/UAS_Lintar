<?php

namespace App\Http\Controllers\UangKuliah;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UangKuliah\SkemaPembayaran;
use Illuminate\Http\Request;

class SkemaPembayaranController extends Controller
{
    public function index()
    {
        $mahasiswa = User::find(1);
        $dataSkema = SkemaPembayaran::where('user_id', 1)->latest()->first();
        return view('UangKuliah.skema_pembayaran', compact('mahasiswa', 'dataSkema'));
    }

    public function store(Request $request)
    {
        SkemaPembayaran::simpanPilihanSkema(1, $request->skema);
        return redirect()->route('tagihan.pembayaran'); 
    }
}