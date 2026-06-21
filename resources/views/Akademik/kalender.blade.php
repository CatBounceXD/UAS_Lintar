@extends('layouts.main')
@section('page')
    <style>
        .page-title { background-color: #222; color: #fff; padding: 10px; font-weight: bold; border-radius: 4px; margin-bottom: 15px; font-size: 14px; text-transform: uppercase; }
        .filter-box { background-color: #0b6b7a; color: white; padding: 10px; font-size: 13px; margin-bottom: 20px; }
        .kalender-table { width: 100%; border-collapse: collapse; font-size: 12px; }
        .kalender-table th { background-color: #889966; color: #000; padding: 8px; border: 1px solid #fff; }
        .kalender-table td { padding: 8px; border: 1px solid #fff; }
        .row-g { background-color: #c7caff; } .row-p { background-color: #dce0a3; }
    </style>
    <div class="page-title">AKADEMIK - KALENDER AKADEMIK</div>
    <div class="filter-box">
        Tahun Akademik: <select><option>2026 Ganjil</option></select><br><br>
        Pencarian: <input type="text" placeholder="Keterangan"> <button>Cari</button>
    </div>
    <div style="margin-bottom: 10px; font-size: 14px;">Kalender Akademik Tahun : 2026 Ganjil</div>
    <table class="kalender-table">
        <thead><tr><th width="5%">No</th><th width="25%">Tanggal</th><th>Keterangan</th></tr></thead>
        <tbody>
            @foreach($kalender as $index => $k)
            <tr class="{{ $index % 2 == 0 ? 'row-g' : 'row-p' }}">
                <td align="center">{{ $index + 1 }}</td><td align="center">{{ $k->tanggal }}</td><td>{{ $k->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection