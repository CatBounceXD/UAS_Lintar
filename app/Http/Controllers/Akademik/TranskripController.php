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

        $dataTranskrip = StudiMahasiswa::where('user_id', $user->id)->get();

        $totalSks = 0;
        $totalMutu = 0;

        foreach ($dataTranskrip as $item) {
            $bobot = $item->bobot ?? 0;
            $mutu = $item->sks * $bobot;
            
            $item->mutu = $mutu; 

            $totalSks += $item->sks;
            $totalMutu += $mutu;
        }

        $ipk = $totalSks > 0 ? ($totalMutu / $totalSks) : 0;

        return view('Akademik.transkrip', compact('user', 'dataTranskrip', 'totalSks', 'ipk'));
    }
}