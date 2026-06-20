<?php

namespace App\Http\Controllers\UangKuliah;

use App\Http\Controllers\Controller;
use App\Models\User;

class TagihanPembayaranController extends Controller
{
   public function index()
{
    $mahasiswa = \App\Models\User::find(1);
    $dataSkema = \App\Models\UangKuliah\SkemaPembayaran::where('user_id', 1)->latest()->first();

    return view('UangKuliah.tagihan_pembayaran', compact('mahasiswa', 'dataSkema'));
}
}