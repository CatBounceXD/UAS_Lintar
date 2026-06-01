@extends('layouts.main')

@section('page')

    <style>
        .header-title { background-color: #2c3e50; color: white; padding: 10px 15px; font-weight: bold; border-radius: 5px; margin-bottom: 20px; }
        
        /* Desain Tabel Pencarian (Atas) */
        .filter-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; font-size: 14px; }
        .filter-table td { padding: 10px; border: 1px solid #ddd; }
        .filter-table .bg-gray { background-color: #f4f4f4; font-weight: bold; width: 20%; }
        
        /* Desain Tabel Data (Bawah) */
        .table-data { width: 100%; border-collapse: collapse; font-size: 14px; }
        .table-data th, .table-data td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .table-data th { background-color: #e9ecef; color: #333; }
        
        /* Efek Warna Belang-belang Otomatis (Zebra Striping) */
        .table-data tbody tr:nth-child(even) { background-color: #f9f9f9; }
        .table-data tbody tr:nth-child(odd) { background-color: #ffffff; }
        .table-data tbody tr:hover { background-color: #f1f1f1; } /* Efek sorot saat mouse lewat */
        
        /* Desain Input & Tombol */
        .form-input { padding: 6px; border: 1px solid #ccc; border-radius: 4px; }
        .btn-cari { padding: 6px 15px; background-color: #f1c40f; color: #333; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .btn-cari:hover { background-color: #d4ac0d; }
    </style>

    <div class="header-title">PERPUSTAKAAN - KATALOG BUKU</div>

    <table class="filter-table">
        <tr>
            <td class="bg-gray">Perpustakaan</td>
            <td>
                <select class="form-input">
                    <option>1-Pusat</option>
                    <option>Cabang</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="bg-gray">Pencarian</td>
            <td>
                <input type="text" class="form-input" placeholder="Judul Buku" style="width: 250px;">
                <button class="btn-cari">Cari</button>
            </td>
        </tr>
    </table>

    <h3 style="margin-top: 25px; color: #2c3e50;">Daftar Judul Buku</h3>

    <table class="table-data">
        <thead>
            <tr>
                <th style="text-align: center; width: 50px;">Pilih</th>
                <th style="text-align: center; width: 50px;">No</th>
                <th>Judul Buku</th>
                <th style="text-align: center; width: 200px;">Call Number</th>
            </tr>
        </thead>
        <tbody>
            @forelse($buku as $item)
            <tr>
                <td style="text-align: center;"><input type="checkbox"></td>
                <td style="text-align: center;">{{ $loop->iteration }}</td>
                <td>{{ $item->judul_buku }}</td>
                <td>{{ $item->call_number }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align: center; color: #888; padding: 15px;">Belum ada data katalog buku.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection