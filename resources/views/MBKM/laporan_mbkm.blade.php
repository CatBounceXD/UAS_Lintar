@extends('layouts.main')

@section('page')

    <style>
        .header-title { background-color: #333; color: white; padding: 10px; font-weight: bold; margin-bottom: 15px; border-radius: 5px; }
        .info-box { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; background-color: #f9f9f9; border-radius: 5px; }
        .status-box { padding: 40px 20px; }
        .text-center { text-align: center; }
        .text-red { color: #b22222; font-size: 22px; margin-bottom: 5px; font-weight: bold; }
        .text-grey { color: #666; font-size: 14px; }
        /* Utility Classes (Menggantikan inline style margin-top: 0 dan margin-bottom: 0) */
        .mt-0 { margin-top: 0; }
        .mb-0 { margin-bottom: 0; }
    </style>

    <div class="header-title">PELAPORAN MBKM - Merdeka Belajar Kampus Merdeka</div>

    <div class="info-box">
        <h3 class="mt-0">{{ $laporan ? $laporan->nama : 'YAEL REHUELLAH' }}</h3>
        
        <p class="text-grey mb-0">
            NPM: {{ $laporan ? $laporan->npm : '535250175' }} | 
            Prodi: {{ $laporan ? $laporan->prodi : 'TEKNIK INFORMATIKA' }}
        </p>
    </div>

    <div class="info-box status-box text-center">
        <div class="text-red">
            {{ $laporan ? $laporan->status_mbkm : 'Tidak Terdaftar di MBKM' }}
        </div>
        <p class="text-grey mb-0">
            {{ $laporan ? $laporan->keterangan : 'Mahasiswa tidak terdaftar dalam program MBKM. Hubungi Program Studi apabila terdapat kesalahan data.' }}
        </p>
    </div>

@endsection