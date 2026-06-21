<?php

namespace App\Http\Controllers\cuti_online;

use Illuminate\Http\Request;
use App\Models\cuti_online\InformasiPribadi;
use App\Models\cuti_online\InformasiTahunAkademik;
use App\Models\Biodata\Biodata;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AjuanCutiController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $infoPribadi = biodata::where('user_id', $userId)->first();
        $infoAkademik = InformasiTahunAkademik::first();

        return view('cuti_online.ajuan_cuti', compact('infoPribadi', 'infoAkademik'));
    }
}