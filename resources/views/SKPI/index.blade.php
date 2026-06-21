@extends('layouts.main')

@section('page') {{-- Menggunakan section 'page' agar sesuai dengan master template --}}
    <style>
        body { 
            background-color: #f5f5f5; 
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .lintar-header {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 10px 15px;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .table-lintar th { 
            background-color: #3a9fb7 !important; 
            color: black !important; 
            font-weight: bold;
            border: 1px solid #a5a5a5 !important;
            vertical-align: middle;
        }
        .table-lintar td {
            border: 1px solid #c0c0c0 !important;
            background-color: #e6e6e6;
        }
        .table-lintar tr:hover td {
            background-color: #dadada;
        }
        .bg-total-poin {
            background-color: #3a9fb7 !important;
            color: black !important;
            font-weight: bold;
        }
        .btn-action {
            background-color: #f0f0f0;
            border: 1px solid #a5a5a5;
            color: black;
            padding: 2px 12px;
            border-radius: 3px;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-action:hover {
            background-color: #e0e0e0;
            border-color: #8cc;
            color: black;
        }
    </style>


<div class="lintar-header shadow-sm">
    SKPI - PENALARAN DAN KEILMUAN
</div>

<div class="container-fluid px-3 mt-3">
    <form action="{{ url('/isi-skpi/hapus') }}" method="POST" id="formHapusSkpi">
        @csrf
        @method('DELETE')

        <div class="mb-2 d-flex gap-1 align-items-center">
            <a href="{{ url('/isi-skpi/tambah') }}" class="btn-action">Tambah Kegiatan</a>
            <button type="submit" class="btn-action" onclick="return confirm('Apakah Anda yakin ingin menghapus data yang dipilih?')">Hapus</button>
        </div>

        <p class="mb-3" style="font-size: 13.5px;">Syarat minimal SKPI salah satunya adalah memenuhi 3 Kategori/Jenis, mohon untuk diperhatikan.</p>

        <table class="table table-lintar align-middle mb-1">
            <thead>
                <tr>
                    <th class="text-center" style="width: 45px;">Pilih</th>
                    <th class="text-center" style="width: 40px;">No</th>
                    <th class="text-center" style="width: 45%;">Kegiatan</th>
                    <th class="text-center">Jenis</th>
                    <th class="text-center">Klasifikasi</th>
                    <th class="text-center" style="width: 90px;">Tgl Input</th>
                    <th class="text-center" style="width: 55px;">Bukti</th>
                    <th class="text-center" style="width: 70px;">Validasi</th>
                    <th class="text-center" style="width: 55px;">Point</th>
                </tr>
            </thead>
            <tbody>
                @forelse($listKegiatan as $index => $item)
                <tr>
                    <td class="text-center">
                        <input type="checkbox" name="ids[]" value="{{ $item->id }}">
                    </td>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>
                        <div><strong>{{ $item->kegiatan }}</strong></div>
                        <div class="text-muted" style="font-style: italic; font-size: 12px;">
                            {{ $item->kegiatan }} (English Translation Place)
                        </div>
                    </td>
                    <td>
                        <div>{{ $item->jenis }}</div>
                        <div class="text-muted" style="font-style: italic; font-size: 12px;">Mandiri</div>
                    </td>
                    <td>
                        <div>{{ $item->klasifikasi }}</div>
                        <div class="text-muted" style="font-style: italic; font-size: 12px;">Participant</div>
                    </td>
                    <td class="text-center">
                        {{ date('d M Y', strtotime($item->created_at)) }}
                    </td>
                    <td class="text-center">
                        @if($item->file_bukti)
                            <a href="{{ asset('uploads/skpi/' . $item->file_bukti) }}" target="_blank" title="Lihat Bukti">
                                🔍
                            </a>
                        @else
                            -
                        @endif
                    </td>
                    <td class="text-center">
                        <span class="text-danger fw-bold">Belum</span>
                    </td>
                    <td class="text-center text-danger fw-bold">15</td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center text-muted py-3 bg-white">Belum ada data kegiatan SKPI yang diinput.</td>
                </tr>
                @endforelse

                <tr>
                    <td colspan="8" class="text-end px-3" style="background-color: #3a9fb7; font-weight: bold; text-align: right;">Point Terkumpul</td>
                    <td class="text-center fw-bold" style="background-color: #3a9fb7;">{{ $totalPoin }}</td>
                </tr>
            </tbody>
        </table>
    </form>

    <p class="text-muted" style="font-style: italic; font-size: 12px;">*Poin yang dijumlahkan adalah berdasarkan data yg sudah di validasi</p>
</div>

@endsection