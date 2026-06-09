@extends('layouts.main')

@section('page')

    <style>
        .header-title { background-color: #2c3e50; color: white; padding: 10px 15px; font-weight: bold; border-radius: 5px; margin-bottom: 20px; }
        
        .filter-table { width: 100%; border-collapse: collapse; margin-bottom: 20px; font-size: 14px; }
        .filter-table td { padding: 10px; border: 1px solid #ddd; }
        .filter-table .bg-gray { background-color: #f4f4f4; font-weight: bold; width: 20%; }
        
        .table-data { width: 100%; border-collapse: collapse; font-size: 14px; }
        .table-data th, .table-data td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .table-data th { background-color: #e9ecef; color: #333; }
        
        .table-data tbody tr:nth-child(even) { background-color: #f9f9f9; }
        .table-data tbody tr:nth-child(odd) { background-color: #ffffff; }
        .table-data tbody tr:hover { background-color: #f1f1f1; }
        
        .form-input { padding: 6px; border: 1px solid #ccc; border-radius: 4px; }
        .btn-cari { padding: 6px 15px; background-color: #f1c40f; color: #333; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        .btn-cari:hover { background-color: #d4ac0d; }
    </style>

    <div class="header-title">PERPUSTAKAAN - KATALOG SKRIPSI</div>

    <table class="filter-table">
        <tr>
            <td class="bg-gray">Fakultas</td>
            <td>
                <select class="form-input">
                    <option>Teknik</option>
                    <option>Ekonomi</option>
                    <option>Hukum</option>
                    <option>FISIP</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="bg-gray">Pencarian</td>
            <td>
                <form action="/katalog-skripsi" method="GET" style="margin: 0;">
                    <input type="text" name="search" class="form-input" placeholder="Judul Skripsi" style="width: 250px;">
                    <button type="submit" class="btn-cari">Cari</button>
                </form>
            </td>
        </tr>
    </table>

    <h3 style="margin-top: 25px; color: #2c3e50;">Daftar Judul Skripsi / Tesis</h3>

    <table class="table-data">
        <thead>
            <tr>
                <th style="text-align: center; width: 50px;">Pilih</th>
                <th style="text-align: center; width: 50px;">No</th>
                <th>Judul Skripsi</th>
                <th>Pengarang</th>
                <th>Fakultas</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @forelse($skripsi as $item)
            <tr>
                <td style="text-align: center;"><input type="checkbox"></td>
                <td style="text-align: center;">{{ $loop->iteration }}</td>
                <td>{{ $item->judul_skripsi }}</td>
                <td>{{ $item->pengarang }}</td>
                <td>{{ $item->fakultas }}</td>
                <td style="text-align: center;">{{ $item->tahun }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center; color: #888; padding: 15px;">Belum ada data skripsi.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 20px;">
        {{ $skripsi->links() }}
    </div>

@endsection