<?php

namespace App\Http\Controllers\cuti_online;

use Illuminate\Http\Request;
use App\Models\cuti_online\InformasiPribadi;
use App\Models\cuti_online\InformasiTahunAkademik;
use App\Models\Biodata\Biodata;
use App\Http\Controllers\Controller;

class AjuanCutiController extends Controller
{
    public function index()
    {
        // Mengambil data pertama dari masing-masing tabel (karena ini halaman profil user)
        $infoPribadi = biodata::first();
        $infoAkademik = InformasiTahunAkademik::first();

        // Mengirim data ke file view yang bernama 'ajuan_cuti.blade.php'
        return view('cuti_online.ajuan_cuti', compact('infoPribadi', 'infoAkademik'));
    }
}