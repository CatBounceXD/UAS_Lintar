@extends('layouts.main')

@section('page')
    
<style>
    /* 1. Desain Kotak Judul */
    .header-title { background-color: #333; color: white; padding: 10px; font-weight: bold; margin-bottom: 15px; }
    
    /* 3. Desain Tabel Utama */
    .table-data { width: 100%; border-collapse: collapse; font-size: 14px; margin-top: 15px; }
    .table-data th, .table-data td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    .table-data th { background-color: #f4f4f4; }
    
    /* 4. Desain Teks Tambahan */
    .text-center { text-align: center; }
    .text-red { color: red; }
</style>

    <div class="header-title">
        PERKULIAHAN - 01. RPS
    </div>
    
    <h3 style="margin-top: 20px;">DAFTAR RPS</h3>

    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Matakuliah</th>
                <th>Jumlah RPS</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data_rps as $index => $row)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $row->fakultas }}</td>
                    <td class="text-center">{{ $row->jurusan }}</td>
                    <td>{{ $row->kode_matkul }} | {{ $row->nama_matkul }} | {{ $row->sks }} SKS</td>
                    <td class="text-center text-red">
                        @if($row->file_rps)
                            <a href="{{ $row->file_rps }}" target="_blank">PDF 📄</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center" style="color: #888;">
                        Belum ada data RPS di database. Silakan isi data di phpMyAdmin terlebih dahulu.
                    </td>
                </tr>
            @endempty
        </tbody>
    </table>

@endsection