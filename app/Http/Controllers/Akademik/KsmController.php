<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;

class KsmController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tahunAkademik = 'Genap 2025';

        $dataKsm = StudiMahasiswa::where('user_id', $user->id)
                        ->where('tahun_akademik', $tahunAkademik)
                        ->get();

        $totalSks = $dataKsm->sum('sks');

        return view('Akademik.ksm', compact('user', 'dataKsm', 'totalSks', 'tahunAkademik'));
    }
}