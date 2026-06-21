<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TranskripController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Tarik SEMUA data tanpa filter semester
        $dataTranskrip = StudiMahasiswa::where('user_id', $user->id)->get();

        $totalSks = 0;
        $totalMutu = 0;

        // Hitung Mutu tiap matkul dan akumulasikan
        foreach ($dataTranskrip as $item) {
            $bobot = $item->bobot ?? 0; // Jika bobot kosong/belum ada nilai, anggap 0
            $mutu = $item->sks * $bobot;
            
            // Simpan mutu ke dalam object untuk ditampilkan di view
            $item->mutu = $mutu; 

            $totalSks += $item->sks;
            $totalMutu += $mutu;
        }

        // Hindari error pembagian dengan nol jika mahasiswa belum punya SKS
        $ipk = $totalSks > 0 ? ($totalMutu / $totalSks) : 0;

        return view('Akademik.transkrip', compact('user', 'dataTranskrip', 'totalSks', 'ipk'));
    }
}