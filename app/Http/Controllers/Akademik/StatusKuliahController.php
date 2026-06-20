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
        $userId = Auth::id() ?? User::first()->id;

        // 1. Tarik SEMUA data studi mahasiswa, urutkan berdasarkan semester
        $studi = StudiMahasiswa::where('user_id', $userId)
                    ->orderBy('tahun_akademik', 'asc')
                    ->get();

        // 2. Kelompokkan data per semester (Misal: Semua matkul Genap 2025 jadi satu grup)
        $grouped = $studi->groupBy('tahun_akademik');

        $statusData = [];
        $kumulatif_sks_ambil = 0;
        $kumulatif_sks_peroleh = 0;
        $kumulatif_mutu = 0;

        // 3. Lakukan perhitungan matematika untuk setiap semester
        foreach ($grouped as $semester => $matkuls) {
            
            $sks_ambil = $matkuls->sum('sks');
            // SKS diperoleh hanya dihitung jika sudah ada nilainya (bobot tidak null)
            $sks_peroleh = $matkuls->whereNotNull('bobot')->sum('sks');

            $mutu_semester = 0;
            $sks_dinilai = 0;

            foreach ($matkuls as $mk) {
                if ($mk->bobot !== null) {
                    $mutu_semester += ($mk->sks * $mk->bobot);
                    $sks_dinilai += $mk->sks;
                }
            }

            // Hitung IPS (Indeks Prestasi Semester)
            $ips = $sks_dinilai > 0 ? ($mutu_semester / $sks_dinilai) : null;

            // Tambahkan ke total kumulatif
            $kumulatif_sks_ambil += $sks_ambil;
            $kumulatif_sks_peroleh += $sks_peroleh;
            $kumulatif_mutu += $mutu_semester;

            // Hitung IPK (Indeks Prestasi Kumulatif)
            $ipk = $kumulatif_sks_peroleh > 0 ? ($kumulatif_mutu / $kumulatif_sks_peroleh) : null;

            // 4. Masukkan hasil kalkulasi ke dalam array untuk dikirim ke View
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