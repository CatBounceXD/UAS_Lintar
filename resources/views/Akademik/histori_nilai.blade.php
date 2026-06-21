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
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
            color: #333333;
        }

        .histori-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 12px;
            border: 1px solid #a8b396;
        }

        .histori-table th {
            background-color: #929a73; /* Warna hijau zaitun khas tabel nilai */
            color: #000000;
            font-weight: bold;
            text-align: center;
            padding: 8px;
            border: 1px solid #ffffff;
        }

        .histori-table td {
            padding: 8px;
            border: 1px solid #ffffff;
            color: #000000;
        }

        /* Mewarnai baris ganjil & genap agar mirip sistem lama */
        .row-ganjil { background-color: #e6e8ba; } /* Kuning pucat */
        .row-genap { background-color: #c7caff; }  /* Ungu kebiruan pucat */
    </style>

    <div class="page-title-banner">
        AKADEMIK - HISTORI NILAI
    </div>

    <div class="section-title">
        DAFTAR PEROLEHAN NILAI
    </div>

    <table class="histori-table">
        <thead>
            <tr>
                <th width="5%">NO</th>
                <th width="10%">TH.AKAD</th>
                <th width="12%">KODE</th>
                <th width="53%">MATA KULIAH</th>
                <th width="5%">SKS</th>
                <th width="7%">NILAI</th>
                <th width="8%">BOBOT</th>
            </tr>
        </thead>
        <tbody>
            @php 
                // Variabel bantu untuk membedakan warna baris per tahun akademik
                $warnaSekarang = 'row-ganjil'; 
                $tahunSblmnya = '';
            @endphp

            @forelse($historiNilai as $index => $nilai)
                @php
                    // Jika tahun akademik berganti (misal dari 20251 ke 20252), ganti warnanya
                    if($tahunSblmnya != '' && $tahunSblmnya != $nilai->tahun_akademik) {
                        $warnaSekarang = ($warnaSekarang == 'row-ganjil') ? 'row-genap' : 'row-ganjil';
                    }
                    $tahunSblmnya = $nilai->tahun_akademik;
                @endphp

                <tr class="{{ $warnaSekarang }}">
                    <td align="center">{{ $index + 1 }}</td>
                    <td align="center">{{ $nilai->tahun_akademik }}</td>
                    <td align="center">{{ $nilai->kode_matkul }}</td>
                    <td>{{ $nilai->nama_matkul }}</td>
                    <td align="center">{{ $nilai->sks }}</td>
                    <td align="center">{{ $nilai->nilai_huruf ?? '' }}</td>
                    <td align="center">
                        {{ $nilai->bobot ? number_format($nilai->bobot, 2) : '' }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" align="center" style="background-color: #f8f9fa; font-style: italic;">
                        Belum ada histori nilai yang tercatat untuk mahasiswa ini.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection