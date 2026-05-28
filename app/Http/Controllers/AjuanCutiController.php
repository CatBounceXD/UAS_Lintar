<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiPribadi;
use App\Models\InformasiTahunAkademik;

class AjuanCutiController extends Controller
{
    public function index()
    {
        // Mengambil data pertama dari masing-masing tabel (karena ini halaman profil user)
        $infoPribadi = InformasiPribadi::first();
        $infoAkademik = InformasiTahunAkademik::first();

        // Mengirim data ke file view yang bernama 'ajuan_cuti.blade.php'
        return view('ajuan_cuti', compact('infoPribadi', 'infoAkademik'));
    }
}