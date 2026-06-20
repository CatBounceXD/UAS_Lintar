<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class KhsController extends Controller
{
    public function index()
    {
        $user = Auth::user() ?? User::first();
        $tahunAkademik = 'Genap 2025';

        $dataKhs = StudiMahasiswa::where('user_id', $user->id)
                        ->where('tahun_akademik', $tahunAkademik)
                        ->get();

        $totalSks = $dataKhs->sum('sks');

        return view('Akademik.khs', compact('user', 'dataKhs', 'totalSks', 'tahunAkademik'));
    }
}