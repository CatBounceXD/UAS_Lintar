<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class KehadiranController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tahunAkademik = 'Genap 2025';

        // Tarik data studi mahasiswa khusus semester Genap 2025
        $dataKehadiran = StudiMahasiswa::where('user_id', $user->id)
                            ->where('tahun_akademik', $tahunAkademik)
                            ->get();

        return view('Akademik.kehadiran', compact('user', 'dataKehadiran', 'tahunAkademik'));
    }
}