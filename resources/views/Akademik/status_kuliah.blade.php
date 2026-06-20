@extends('layouts.main')
@section('page')
    <style>
        .page-title { background-color: #222; color: #fff; padding: 10px; font-weight: bold; border-radius: 4px; margin-bottom: 20px; font-size: 14px; text-transform: uppercase; }
        .status-table { width: 100%; border-collapse: collapse; font-size: 12px; }
        .status-table th { background-color: #889966; color: #000; padding: 10px; border: 1px solid #fff; text-align: center; }
        .status-table td { padding: 8px; border: 1px solid #fff; text-align: center; }
        .row-g { background-color: #c7caff; } .row-p { background-color: #dce0a3; }
    </style>
    <div class="page-title">AKADEMIK - STATUS KULIAH</div>
    <table class="status-table">
        <thead>
            <tr>
                <th>Th.Akademik</th><th>Status</th><th>SKS Ambil</th><th>SKS<br>PEROLEH</th>
                <th>IPS</th><th>SKS AMBIL<br>KUMULATIF</th><th>SKS PEROLEH<br>KUMULATIF</th><th>IPK</th>
            </tr>
        </thead>
        <tbody>
            @forelse($statusData as $index => $s)
            <tr class="{{ $index % 2 == 0 ? 'row-g' : 'row-p' }}">
                <td align="left">{{ $s->tahun_akademik }}</td>
                <td>{{ $s->status }}</td>
                <td>{{ $s->sks_ambil }}</td>
                <td>{{ $s->sks_peroleh }}</td>
                <td>{{ $s->ips }}</td>
                <td>{{ $s->sks_ambil_kumulatif }}</td>
                <td>{{ $s->sks_peroleh_kumulatif }}</td>
                <td>{{ $s->ipk }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8" align="center" style="background-color: #f8f9fa;">Belum ada status kuliah yang tercatat.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection