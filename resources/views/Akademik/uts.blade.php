@extends('layouts.main')

@section('page')
    <style>
        .page-title-banner { background-color: #222222; color: #ffffff; padding: 10px 15px; font-weight: bold; font-size: 14px; text-transform: uppercase; border-radius: 4px; margin-bottom: 15px; }
        .controls { margin-bottom: 15px; font-size: 13px; }
        .controls select { padding: 3px; font-size: 13px; }
        
        .semester-title { font-size: 16px; margin-bottom: 10px; border-bottom: 1px solid #cccccc; padding-bottom: 5px; }
        
        .uts-table { width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 12px; border: 1px solid #a8b396; }
        .uts-table th { background-color: #929a73; color: #000; font-weight: bold; text-align: center; padding: 8px; border: 1px solid #ffffff; }
        .uts-table td { padding: 8px; border: 1px solid #ffffff; color: #000; }
        
        .row-ganjil { background-color: #c7caff; } /* Ungu kebiruan pucat */
        .row-genap { background-color: #dce0a3; }  /* Hijau kekuningan pucat */
    </style>

    <div class="page-title-banner">AKADEMIK - NILAI UTS</div>

    <div class="controls">
        Tahun akademik : <select><option>{{ $tahunAkademik }}</option></select>
    </div>

    <div class="semester-title">Semester {{ $tahunAkademik }}</div>

    <table class="uts-table">
        <thead>
            <tr>
                <th width="5%">NO.</th>
                <th width="15%">Kode M.K</th>
                <th width="60%">NAMA M.K</th>
                <th width="10%">SKS</th>
                <th width="10%">NILAI UTS</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataUts as $index => $uts)
            <tr class="{{ $index % 2 == 0 ? 'row-ganjil' : 'row-genap' }}">
                <td align="center">{{ $index + 1 }}</td>
                <td align="center">{{ $uts->kode_matkul }}</td>
                <td>{{ $uts->nama_matkul }}</td>
                <td align="center">{{ $uts->sks }}</td>
                <td align="center">
                    {{ $uts->nilai_uts ? number_format($uts->nilai_uts, 2) : '' }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" align="center" style="background-color: #f8f9fa;">Belum ada nilai UTS untuk semester ini.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection