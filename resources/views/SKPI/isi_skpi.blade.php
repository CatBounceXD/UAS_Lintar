@extends('layouts.main')

@section('page')
<style>
    .skpi-wrapper {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-top: 20px;
    }

    .skpi-header-banner {
        background-color: #1e293b;
        color: #ffffff;
        padding: 12px 20px;
        font-weight: bold;
        font-size: 14px;
        letter-spacing: 0.5px;
    }

    .skpi-content-box {
        padding: 25px;
        min-height: 250px;
    }

    .skpi-actions {
        margin-bottom: 20px;
    }

    .btn-skpi {
        background-color: #f0f0f0;
        color: #000000;
        padding: 5px 15px;
        border: 1px solid #ababab;
        border-radius: 3px;
        font-size: 13.5px;
        cursor: pointer;
        margin-right: 5px;
        text-decoration: none;
        display: inline-block;
    }

    .btn-skpi:hover {
        background-color: #e2e8f0;
    }

    .skpi-empty-text {
        font-size: 14px;
        color: #000000;
        margin-top: 15px;
    }

    .skpi-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    .skpi-table th, .skpi-table td {
        border: 1px solid #cbd5e1;
        padding: 10px;
        text-align: left;
        font-size: 13.5px;
    }

    .skpi-table th {
        background-color: #f8fafc;
        font-weight: bold;
    }

    .skpi-table tr:nth-child(even) {
        background-color: #f1f5f9;
    }
</style>

<div class="skpi-wrapper">
    <div class="skpi-header-banner">
        SKPI - PENALARAN DAN KEILMUAN
    </div>
    
    <div class="skpi-content-box">
        <div class="skpi-actions">
        <a href="{{ url('/isi-skpi/tambah') }}" class="btn-skpi">Tambah Kegiatan</a>
        <button type="button" class="btn-skpi">Hapus</button>
        </div>

        {{-- Menggunakan @forelse secara dinamis untuk mendeteksi ketersediaan data --}}
        <table class="skpi-table">
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th>Nama Kegiatan</th>
                    <th>Peran / Jabatan</th>
                    <th>Tingkat</th>
                </tr>
            </thead>
            <tbody>
                @forelse($listKegiatan as $index => $kegiatan)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $kegiatan->nama_kegiatan }}</td>
                        <td>{{ $kegiatan->peran }}</td>
                        <td>{{ $kegiatan->tingkat }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <div class="skpi-empty-text">Data Tidak Ada !</div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection