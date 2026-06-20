<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class KsmController extends Controller
{
    public function index()
    {
        $user = Auth::user() ?? User::first();
        $tahunAkademik = 'Genap 2025';

        // 3. Tarik data KRS mahasiswa ini khusus di semester tersebut
        $dataKsm = StudiMahasiswa::where('user_id', $user->id)
                        ->where('tahun_akademik', $tahunAkademik)
                        ->get();

        // 4. Hitung Total SKS secara otomatis menggunakan fungsi bawaan Laravel
        $totalSks = $dataKsm->sum('sks');

        return view('Akademik.ksm', compact('user', 'dataKsm', 'totalSks', 'tahunAkademik'));
    }
}