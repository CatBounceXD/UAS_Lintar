<?php

namespace App\Http\Controllers\UangKuliah;

use App\Http\Controllers\Controller;
use App\Models\UangKuliah\TagihanPembayaran;
use Illuminate\Http\Request;

class TagihanPembayaranController extends Controller
{
    public function index()
    {
   
        $groupedTagihan = TagihanPembayaran::all()->groupBy('tahun_akademik');

        return view('UangKuliah.tagihan_pembayaran', compact('groupedTagihan'));
    }
}