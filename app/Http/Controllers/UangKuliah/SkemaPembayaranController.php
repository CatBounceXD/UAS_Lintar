<?php

namespace App\Http\Controllers\UangKuliah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UangKuliah\SkemaPembayaran;
use App\Models\Akademik\StudiMahasiswa;

class SkemaPembayaranController extends Controller
{
    public function index()
    {
        $mahasiswa = Auth::user();
        $userId = Auth::id(); 
        
        $dataSkema = SkemaPembayaran::where('user_id', $userId)->first();
        
        if (!$dataSkema) {
            
            $totalSks = StudiMahasiswa::where('user_id', $userId)->sum('sks');
            $totalTagihan = 8000000 + ($totalSks * 250000); 

            $dataSkema = SkemaPembayaran::create([
                'user_id'         => $userId,
                'semester_tahun'  => 'Semester Ganjil 2026/2027',
                'skema_dipilih'   => null,
                'va_full'         => '18888' . $mahasiswa->nim,
                'nominal_full'    => $totalTagihan,
                'va_termin1'      => '18888' . $mahasiswa->nim . '1',
                'nominal_termin1' => $totalTagihan / 2,
                'va_termin2'      => '18888' . $mahasiswa->nim . '2',
                'nominal_termin2' => $totalTagihan / 2,
                'total_termin'    => $totalTagihan,
            ]);
        }
        
        return view('UangKuliah.skema_pembayaran', compact('mahasiswa', 'dataSkema'));
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        SkemaPembayaran::simpanPilihanSkema($userId, $request->skema);
        
        return redirect()->route('tagihan.pembayaran'); 
    }
}