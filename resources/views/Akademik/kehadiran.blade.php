@extends('layouts.main')

@section('page')
    <style>
        .page-title-banner {
            background-color: #222222;
            color: #ffffff;
            padding: 10px 15px;
            font-weight: bold;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .filter-section {
            margin-bottom: 20px;
            font-size: 13px;
        }

        .filter-section select {
            padding: 3px;
            font-size: 13px;
        }

        .semester-title {
            font-size: 16px;
            margin-bottom: 10px;
            border-bottom: 1px solid #cccccc;
            padding-bottom: 5px;
        }

        .kehadiran-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 12px;
            border: 1px solid #a8b396;
        }

        .kehadiran-table th {
            background-color: #929a73; /* Warna header hijau zaitun */
            color: #000000;
            font-weight: bold;
            text-align: center;
            padding: 8px;
            border: 1px solid #ffffff;
        }

        .kehadiran-table td {
            padding: 8px;
            border: 1px solid #ffffff;
            color: #000000;
        }

        .kehadiran-table .btn-show {
            font-weight: bold;
            color: #000000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Mewarnai baris tabel selang-seling */
        .row-ganjil { background-color: #c4d7c5; } /* Hijau pucat */
        .row-genap { background-color: #9eb8a2; }  /* Hijau sedikit gelap */
    </style>

    <div class="page-title-banner">
        AKADEMIK - KEHADIRAN KULIAH
    </div>

    <div class="filter-section">
        Tahun akademik : 
        <select>
            <option>{{ $tahunAkademik }}</option>
        </select>
    </div>

    <div class="semester-title">
        Semester {{ $tahunAkademik }}
    </div>

    <table class="kehadiran-table">
        <thead>
            <tr>
                <th width="4%">No</th>
                <th width="10%">Kode</th>
                <th width="35%">Mata Kuliah</th>
                <th width="5%">Kelas</th>
                <th width="13%">Jumlah Pertemuan</th>
                <th width="13%">Jumlah Kehadiran</th>
                <th width="12%">Persentase</th>
                <th width="8%">Detail</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataKehadiran as $index => $hadir)
                @php
                    // Logika menghitung persentase kehadiran
                    $persen = 0;
                    if($hadir->jumlah_pertemuan > 0) {
                        $persen = ($hadir->jumlah_kehadiran / $hadir->jumlah_pertemuan) * 100;
                    }
                    
                    // Format persentase agar tidak ada koma jika bulat (100%), tapi ada 2 desimal jika pecahan (92.31%)
                    $persenTampil = floor($persen) == $persen ? number_format($persen, 0) : number_format($persen, 2);

                    // Tentukan warna baris selang-seling
                    $warnaBaris = ($index % 2 == 0) ? 'row-ganjil' : 'row-genap';
                @endphp

                <tr class="{{ $warnaBaris }}">
                    <td align="center">{{ $index + 1 }}</td>
                    <td align="center">{{ $hadir->kode_matkul }}</td>
                    <td>{{ $hadir->nama_matkul }}</td>
                    <td align="center">{{ $hadir->kelas }}</td>
                    <td align="center">{{ $hadir->jumlah_pertemuan }}</td>
                    <td align="center">{{ $hadir->jumlah_kehadiran }}</td>
                    <td align="center">{{ $persenTampil }}%</td>
                    <td align="center"><a class="btn-show">Show</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" align="center" style="background-color: #f8f9fa;">Belum ada data kehadiran untuk semester ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection