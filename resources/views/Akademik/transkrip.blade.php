@extends('layouts.main')

@section('page')
    <style>
        .page-title-banner { background-color: #222222; color: #ffffff; padding: 10px 15px; font-weight: bold; font-size: 14px; text-transform: uppercase; border-radius: 4px; margin-bottom: 15px; }
        
        .action-buttons { margin-bottom: 20px; border-bottom: 1px solid #cccccc; padding-bottom: 10px; }
        .action-buttons button { padding: 4px 10px; font-size: 13px; margin-right: 5px; cursor: pointer; border: 1px solid #999; background-color: #f8f9fa; border-radius: 3px; }
        .action-buttons button:hover { background-color: #e2e6ea; }
        .action-buttons button:disabled { color: #aaa; cursor: not-allowed; }

        .transkrip-header { text-align: center; margin-bottom: 25px; }
        .transkrip-title { font-size: 20px; font-weight: bold; margin-bottom: 15px; line-height: 1.2; }
        
        .student-info { margin: 0 auto; text-align: left; display: inline-block; font-size: 14px; font-weight: bold; line-height: 1.6; }
        .student-info td { padding: 0 10px; }

        .transkrip-table { width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 12px; border: 1px solid #ffffff; }
        .transkrip-table th { background-color: #b5b5b5; color: #000; font-weight: bold; text-align: center; padding: 8px; border: 1px solid #ffffff; }
        .transkrip-table td { padding: 6px 8px; border: 1px solid #ffffff; color: #000; }
        
        .row-transkrip { background-color: #eebec1; } /* Warna merah muda pucat khas transkrip Anda */
        .row-transkrip:nth-child(even) { background-color: #e5aeb1; } /* Sedikit lebih gelap untuk selang-seling */

        .transkrip-footer { margin-top: 20px; text-align: center; font-size: 13px; line-height: 1.8; }
    </style>

    <div class="page-title-banner">AKADEMIK - TRANSKRIP</div>

    <div class="action-buttons">
        <button>Cetak</button>
        <button>Cetak PDF Indo (Sementara)</button>
        <button>Cetak PDF Inggris (Sementara)</button>
        <button disabled>Cetak PDF (Final)</button>
    </div>

    <div class="transkrip-header">
        <div class="transkrip-title">
            DAFTAR HASIL STUDI<br>SEMENTARA
        </div>
        <table class="student-info">
            <tr>
                <td width="80">NAMA</td>
                <td width="10">:</td>
                <td>{{ strtoupper($user->name) }}</td>
            </tr>
            <tr>
                <td>N I M</td>
                <td>:</td>
                <td>{{ $user->nim }}</td>
            </tr>
            <tr>
                <td>FAK/JUR</td>
                <td>:</td>
                <td>{{ strtoupper($user->prodi ?? 'TEKNIK INFORMATIKA') }}</td>
            </tr>
        </table>
    </div>

    <table class="transkrip-table">
        <thead>
            <tr>
                <th width="5%">NO</th>
                <th width="12%">KODE</th>
                <th width="48%">MATA KULIAH</th>
                <th width="7%">SKS</th>
                <th width="8%">NILAI</th>
                <th width="10%">BOBOT</th>
                <th width="10%">MUTU</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataTranskrip as $index => $row)
            <tr class="row-transkrip">
                <td align="center">{{ $index + 1 }}</td>
                <td align="center">{{ $row->kode_matkul }}</td>
                <td>{{ $row->nama_matkul }}</td>
                <td align="center">{{ $row->sks }}</td>
                <td align="center">{{ $row->nilai_huruf }}</td>
                <td align="center">
                    {{ $row->bobot ? number_format($row->bobot, 2) : '' }}
                </td>
                <td align="center">
                    {{ $row->bobot ? number_format($row->mutu, 2) : '' }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" align="center" style="background-color: #f8f9fa;">Belum ada riwayat studi yang diambil.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="transkrip-footer">
        Jumlah sks Peroleh Kumulatif : {{ $totalSks }}<br>
        Jumlah sks Kumulatif : {{ $totalSks }}<br>
        Indeks Prestasi Kumulatif : <b>{{ number_format($ipk, 2) }}</b>
    </div>
@endsection