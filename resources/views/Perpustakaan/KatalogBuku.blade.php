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

    <div class="header-title">PERPUSTAKAAN - KATALOG BUKU</div>

    {{-- 1. Membungkus dengan form GET agar data filter terkirim ke Controller --}}
    <form method="GET" action="">
        <table class="filter-table">
            <tr>
                <td class="bg-gray">Perpustakaan</td>
                <td>
                    {{-- 2. Menambahkan name="perpustakaan" dan pemicu submit otomatis saat opsi diubah --}}
                    <select name="perpustakaan" class="form-input" onchange="this.form.submit()">
                        <option value="">-- Semua Perpustakaan --</option>
                        <option value="1-Pusat" {{ request('perpustakaan') == '1-Pusat' ? 'selected' : '' }}>1-Pusat</option>
                        <option value="2-Ekonomi" {{ request('perpustakaan') == '2-Ekonomi' ? 'selected' : '' }}>2-Ekonomi</option>
                        <option value="3-Hukum" {{ request('perpustakaan') == '3-Hukum' ? 'selected' : '' }}>3-Hukum</option>
                        <option value="4-FDI" {{ request('perpustakaan') == '4-FDI' ? 'selected' : '' }}>4-FDI</option>
                        <option value="5-Kedokteran" {{ request('perpustakaan') == '5-Kedokteran' ? 'selected' : '' }}>5-Kedokteran</option>
                        <option value="6-Psikologi" {{ request('perpustakaan') == '6-Psikologi' ? 'selected' : '' }}>6-Psikologi</option>
                        <option value="7-Pascasarjana" {{ request('perpustakaan') == '7-Pascasarjana' ? 'selected' : '' }}>7-Pascasarjana</option>
                        <option value="8-Fsrd" {{ request('perpustakaan') == '8-Fsrd' ? 'selected' : '' }}>8-Fsrd</option>
                        <option value="9-Kampus 3" {{ request('perpustakaan') == '9-Kampus 3' ? 'selected' : '' }}>9-Kampus 3</option>
                        <option value="10-Ilmu Komunikasi" {{ request('perpustakaan') == '10-Ilmu Komunikasi' ? 'selected' : '' }}>10-Ilmu Komunikasi</option>
                        <option value="11-T. Informasi" {{ request('perpustakaan') == '11-T. Informasi' ? 'selected' : '' }}>11-T. Informasi</option>
                        <option value="12-Perpus jawa" {{ request('perpustakaan') == '12-Perpus jawa' ? 'selected' : '' }}>12-Perpus jawa</option>
                        <option value="15-FK Ciawi" {{ request('perpustakaan') == '15-FK Ciawi' ? 'selected' : '' }}>15-FK Ciawi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="bg-gray">Pencarian</td>
                <td>
                    {{-- 3. Menambahkan name="search" dan value agar teks pencarian tidak hilang setelah diklik --}}
                    <input type="text" name="search" class="form-input" placeholder="Judul Buku" style="width: 250px;" value="{{ request('search') }}">
                    <button type="submit" class="btn-cari">Cari</button>
                </td>
            </tr>
        </table>
    </form>

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
                <td colspan="4" style="text-align: center; color: #888; padding: 15px;">Belum ada data katalog buku yang sesuai.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection