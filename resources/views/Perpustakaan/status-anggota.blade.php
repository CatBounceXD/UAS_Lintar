@extends('layouts.main') {{-- Sesuaikan dengan nama file layout utama proyekmu --}}

@section('page') {{-- Sesuaikan dengan nama section konten proyekmu --}}

<style>
    .status-header {
        background-color: #2D2D2D;
        color: #FFFFFF;
        padding: 10px 15px;
        font-weight: bold;
        font-size: 13px;
        border-radius: 3px 3px 0 0;
        text-transform: uppercase;
        font-family: Arial, sans-serif;
    }

    .status-container {
        background-color: #FFFFFF;
        border: 1px solid #D3D3D3;
        border-top: none;
        padding: 15px;
        font-family: Arial, sans-serif;
        font-size: 13px;
        color: #000000;
        line-height: 1.6;
    }

    .status-line {
        margin-bottom: 8px;
    }

    .status-divider {
        border: 0;
        border-top: 1px solid #000000;
        margin: 10px 0;
    }
</style>

{{-- Banner Judul Fitur --}}
<div class="status-header">
    PERPUSTAKAAN - STATUS ANGGOTA
</div>

{{-- Box Konten Utama --}}
<div class="status-container">
    <div class="status-line">
        Anda tidak terdaftar sebagai anggota perpustakaan !
    </div>
    
    <hr class="status-divider">
    
    <div class="status-line">
        Histori peminjaman Tidak ada histori peminjaman buku !
    </div>
</div>

@endsection