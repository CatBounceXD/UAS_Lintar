<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HistoriNilaiController extends Controller
{
    public function index()
    {
        // Fallback aman seperti format kita sebelumnya
        $userId = Auth::check() ? Auth::id() : User::first()->id;

        // Ambil data nilai, urutkan berdasarkan Tahun Akademik secara ascending (lama ke baru)
        $historiNilai = StudiMahasiswa::where('user_id', $userId)
                        ->orderBy('tahun_akademik', 'asc')
                        ->get();

        return view('Akademik.histori_nilai', compact('historiNilai'));
    }
}