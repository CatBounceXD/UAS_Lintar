@extends('layouts.main')

@section('page')
<style>
    .skpi-container {
        font-family: 'Segoe UI', Arial, sans-serif;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-top: 20px;
    }

    .skpi-header {
        background-color: #1e293b;
        color: #ffffff;
        padding: 15px 20px;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .skpi-body {
        padding: 25px;
        min-height: 200px;
    }

    .skpi-alert {
        background-color: #ffffff;
        padding: 10px 0;
        color: #000000;
        font-size: 13.5px;
        font-weight: normal;
    }

    .skpi-info-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .skpi-info-table td {
        padding: 6px 0;
        font-size: 14px;
        color: #334155;
    }

    .skpi-info-table td.label {
        width: 15%;
        font-weight: 600;
    }

    .skpi-info-table td.separator {
        width: 2%;
    }
</style>

<div class="skpi-container">
    <div class="skpi-header">
        BUKTI PENGISIAN SKPI
    </div>
    
    <div class="skpi-body">
        @if($skpiData)
            @if($skpiData->jumlah_kategori < 3)
                <div class="skpi-alert">
                    Belum Dapat Dicetak , karena masih Kurang dari 3 kategori.
                </div>
            @else
                <table class="skpi-info-table">
                    <tr>
                        <td class="label">NAMA</td>
                        <td class="separator">:</td>
                        <td>{{ $skpiData->nama_mahasiswa }}</td>
                    </tr>
                    <tr>
                        <td class="label">NPM / NIM</td>
                        <td class="separator">:</td>
                        <td>{{ $skpiData->nim }}</td>
                    </tr>
                </table>
            @endif
        @else
            {{-- Antisipasi jika database seeder belum masuk, tetap tampilkan teks warning --}}
            <div class="skpi-alert">
                Belum Dapat Dicetak , karena masih Kurang dari 3 kategori.
            </div>
        @endif
    </div>
</div>
@endsection