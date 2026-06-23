<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akademik\StudiMahasiswa;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StatusKuliahController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $studi = StudiMahasiswa::where('user_id', $userId)
                    ->orderBy('tahun_akademik', 'asc')
                    ->get();

        $grouped = $studi->groupBy('tahun_akademik');

        $statusData = [];
        $kumulatif_sks_ambil = 0;
        $kumulatif_sks_peroleh = 0;
        $kumulatif_mutu = 0;

        foreach ($grouped as $semester => $matkuls) {
            
            $sks_ambil = $matkuls->sum('sks');
            $sks_peroleh = $matkuls->whereNotNull('bobot')->sum('sks');

            $mutu_semester = 0;
            $sks_dinilai = 0;

            foreach ($matkuls as $mk) {
                if ($mk->bobot !== null) {
                    $mutu_semester += ($mk->sks * $mk->bobot);
                    $sks_dinilai += $mk->sks;
                }
            }

            $ips = $sks_dinilai > 0 ? ($mutu_semester / $sks_dinilai) : null;

            $kumulatif_sks_ambil += $sks_ambil;
            $kumulatif_sks_peroleh += $sks_peroleh;
            $kumulatif_mutu += $mutu_semester;

            $ipk = $kumulatif_sks_peroleh > 0 ? ($kumulatif_mutu / $kumulatif_sks_peroleh) : null;

            $statusData[] = (object)[
                'tahun_akademik' => $semester,
                'status' => 'Aktif',
                'sks_ambil' => $sks_ambil,
                'sks_peroleh' => $sks_peroleh > 0 ? $sks_peroleh : null,
                'ips' => $ips !== null ? number_format($ips, 2) : null,
                'sks_ambil_kumulatif' => $kumulatif_sks_ambil,
                'sks_peroleh_kumulatif' => $kumulatif_sks_peroleh > 0 ? $kumulatif_sks_peroleh : null,
                'ipk' => $ipk !== null ? number_format($ipk, 2) : null,
            ];
        }

        return view('Akademik.status_kuliah', compact('statusData'));
    }
}