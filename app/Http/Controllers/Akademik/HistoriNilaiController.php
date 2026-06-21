<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;

class HistoriNilaiController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $historiNilai = StudiMahasiswa::where('user_id', $userId)
                        ->orderBy('tahun_akademik', 'asc')
                        ->get();

        return view('Akademik.histori_nilai', compact('historiNilai'));
    }
}