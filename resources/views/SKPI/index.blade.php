@extends('layouts.main')

@section('page')
<style>
    .skpi-list-container {
        font-family: Arial, sans-serif;
        margin-top: 15px;
    }
    .btn-action-top {
        background-color: #f0f0f0;
        border: 1px solid #ababab;
        padding: 4px 12px;
        border-radius: 3px;
        text-decoration: none;
        color: black;
        font-size: 13px;
        display: inline-block;
        margin-right: 5px;
        margin-bottom: 15px;
        cursor: pointer;
    }
    .info-text {
        font-size: 13px;
        color: #333;
        margin-bottom: 10px;
    }
    .main-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
    }
    .main-table th {
        background-color: #469cb4;
        color: black;
        border: 1px solid #aaa;
        padding: 6px;
        text-align: center;
        font-weight: bold;
    }
    .main-table td {
        border: 1px solid #aaa;
        padding: 8px;
        vertical-align: top;
        background-color: #dbdbdb;
    }
    .text-center {
        text-align: center;
    }
    .poin-box {
        background-color: #469cb4;
        color: black;
        font-weight: bold;
    }
    .text-danger {
        color: red;
        font-weight: bold;
    }
</style>

<div class="skpi-list-container">
    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ url('/isi-skpi/tambah') }}" class="btn-action-top">Tambah Kegiatan</a>
    <button class="btn-action-top">Hapus</button>

    <div class="info-text">
        Syarat minimal SKPI salah satunya adalah memenuhi 3 Kategori/Jenis, mohon untuk diperhatikan.
    </div>

    <table class="main-table">
        <thead>
            <tr>
                <th style="width: 4%;">Pilih</th>
                <th style="width: 3%;">No</th>
                <th style="width: 45%;">Kegiatan</th>
                <th style="width: 15%;">Jenis</th>
                <th style="width: 10%;">Klasifikasi</th>
                <th style="width: 8%;">Tgl Input</th>
                <th style="width: 5%;">Bukti</th>
                <th style="width: 5%;">Validasi</th>
                <th style="width: 5%;">Point</th>
            </tr>
        </thead>
        <tbody>
            @forelse($listKegiatan as $index => $item)
                <tr>
                    <td class="text-center">
                        <input type="checkbox" name="id_kegiatan[]" value="{{ $item->id }}">
                    </td>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>
                        <strong>{{ $item->kegiatan }}</strong><br>
                        <span style="font-style: italic; color: #555;">{{ $item->kegiatan }} (English Translation Place)</span>
                    </td>
                    <td>
                        {{ $item->kategori }}<br>
                        <span style="font-style: italic; color: #555;">{{ $item->jenis }}</span>
                    </td>
                    <td class="text-center">
                        {{ $item->klasifikasi }}<br>
                        <span style="font-style: italic; color: #555;">Participant</span>
                    </td>
                    <td class="text-center">
                       {{ date('d M Y', strtotime($item->created_at)) }}
                    </td>
                    <td class="text-center">
                        <a href="{{ asset('uploads/skpi/' . $item->file_bukti) }}" target="_blank">
                            🔍
                        </a>
                    </td>
                    <td class="text-center text-danger">Belum</td>
                    <td class="text-center" style="color: red;">15</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center" style="background: white; padding: 20px; color: #666;">
                        Belum ada data kegiatan SKPI. Silakan klik "Tambah Kegiatan".
                    </td>
                </tr>
            @endforelse
            
            <tr>
                <td colspan="8" style="text-align: right; font-weight: bold; background-color: #469cb4;">Point Terkumpul</td>
                <td class="text-center poin-box">{{ $totalPoin }}</td>
            </tr>
        </tbody>
    </table>
    <div style="font-size: 12px; margin-top: 5px; font-style: italic;">
        *Poin yang dijumlahkan adalah berdasarkan data yg sudah di validasi
    </div>
</div>
@endsection