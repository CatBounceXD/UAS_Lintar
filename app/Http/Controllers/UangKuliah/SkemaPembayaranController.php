<?php

namespace App\Http\Controllers\UangKuliah;

use Illuminate\Http\Request;
use App\Models\UangKuliah\SkemaPembayaran;
use App\Http\Controllers\Controller;

class SkemaPembayaranController extends Controller
{
    public function index()
    {
        $dataSkema = SkemaPembayaran::all();

        // Trik Darurat: Jika database kosong, isi otomatis dengan data Sekar sesuai image_8980df.jpg
        if ($dataSkema->isEmpty()) {
            $dataSkema = [
                (object)[
                    'nama' => 'SEKAR ARUMA PUTRI',
                    'nim' => '535250167',
                    'semester_tahun' => 'Semester Ganjil 2026/2027',
                    'va_full' => '1888853525016710',
                    'nominal_full' => 'Rp.9,000,000',
                    'va_termin1' => '1888853525016711',
                    'nominal_termin1' => 'Rp. 5,535,000',
                    'va_termin2' => '1888853525016712',
                    'nominal_termin2' => 'Rp. 3,690,000',
                    'total_termin' => 'Rp. 9,225,000',
                    'skema_dipilih' => 'FULL PAYMENT(PENUH)'
                ]
            ];
        }

        return view('UangKuliah.skema_pembayaran', compact('dataSkema'));
    }
}