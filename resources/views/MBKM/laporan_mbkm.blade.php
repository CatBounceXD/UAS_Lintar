@extends('layouts.main')

@section('page')
<style>
    .mbkm-container {
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    .mbkm-header {
        background-color: #333333;
        color: white;
        padding: 12px 15px;
        font-weight: bold;
        font-size: 16px;
        border-radius: 4px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .mbkm-card {
        background-color: #ffffff;
        border: 1px solid #dcdcdc;
        border-radius: 4px;
        padding: 15px 20px;
        margin-bottom: 20px;
    }
    .mbkm-student-name {
        font-size: 18px;
        font-weight: bold;
        color: #000000;
        margin-bottom: 10px;
        text-transform: uppercase;
    }
    .mbkm-student-info {
        font-size: 14px;
        color: #666666;
    }
    .mbkm-status-card {
        background-color: #fbfbfb;
        border: 1px solid #dcdcdc;
        border-radius: 4px;
        padding: 40px 20px;
        text-align: center;
    }
    .mbkm-status-title {
        color: #a81c1c; 
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 15px;
    }
    .mbkm-status-desc {
        color: #555555;
        font-size: 15px;
    }
</style>

<div class="mbkm-container">
    <div class="mbkm-header">
        PELAPORAN MBKM - Merdeka Belajar Kampus Merdeka
    </div>

    <div class="mbkm-card">
        <div class="mbkm-student-name">
            {{ $user->name ?? 'Siswa 1' }}
        </div>
        <div class="mbkm-student-info">
            NPM: {{ $user->nim ?? '535250001' }} | Prodi: {{ $user->prodi ?? 'TEKNIK INFORMATIKA' }}
        </div>
    </div>

    <div class="mbkm-status-card">
        <div class="mbkm-status-title">
            Tidak Terdaftar di MBKM
        </div>
        <div class="mbkm-status-desc">
            Mahasiswa tidak terdaftar dalam program MBKM. Hubungi Program Studi apabila terdapat kesalahan data.
        </div>
    </div>
</div>
@endsection