@extends('layouts.main')

@section('page')
    <style>
        .page-title-banner { background-color: #222222; color: #ffffff; padding: 10px 15px; font-weight: bold; font-size: 14px; text-transform: uppercase; border-radius: 4px; margin-bottom: 15px; }
        .controls { margin-bottom: 20px; font-size: 13px; }
        .controls select { padding: 3px; font-size: 13px; }
        .controls button { padding: 3px 8px; font-size: 12px; margin-right: 5px; cursor: pointer; }
        
        .khs-title { text-align: center; font-size: 16px; font-weight: bold; margin-bottom: 20px; line-height: 1.5; }
        
        .khs-table { width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; font-size: 12px; border: 2px solid #000; margin-bottom: 20px; }
        .khs-table th { background-color: #7ab3b3; color: #000; padding: 6px; border: 1px solid #000; text-align: center; }
        .khs-table td { padding: 6px; border: 1px solid #000; background-color: #a3d1d1; color: #000; }
        .khs-table .row-total { background-color: #cccccc; font-weight: bold; text-align: center; }
        
        .footer-note { font-size: 13px; margin-bottom: 10px; }
        
        .summary-container { display: flex; justify-content: space-between; font-size: 11px; font-family: Arial, sans-serif; }
        .summary-table { border-collapse: collapse; border: 2px solid #a3a3a3; text-align: center; background-color: #d9e6e6; margin-right: 15px; }
        .summary-table th, .summary-table td { border: 1px solid #a3a3a3; padding: 5px; }
        .summary-table th { background-color: #c4d9d9; font-weight: bold; }
        
        .signature-box { width: 40%; line-height: 1.6; text-align: left; font-size: 12px; }
    </style>

    <div class="page-title-banner">AKADEMIK - NILAI</div>

    <div class="controls">
        Tahun akademik : <select><option>{{ $tahunAkademik }}</option></select><br><br>
        <button>Detail Nilai</button> <button>Cetak</button>
    </div>

    <div class="khs-title">
        KARTU HASIL STUDI<br>
        Semester : {{ $tahunAkademik }} / 2026
    </div>

    <table class="khs-table">
        <thead>
            <tr>
                <th width="3%">Cek</th>
                <th width="3%">NO</th>
                <th width="10%">KODE MK</th>
                <th width="35%">NAMA MATA KULIAH</th>
                <th width="7%">STATUS</th>
                <th width="9%">KREDIT(sks)</th>
                <th width="9%">NILAI(Huruf)</th>
                <th width="9%">NILAI(Angka)</th>
                <th width="12%">BOBOT KUALITAS(sksN)</th>
                <th width="3%">KET.</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataKhs as $index => $khs)
            <tr>
                <td align="center"><input type="radio" name="pilih"></td>
                <td align="center">{{ $index + 1 }}</td>
                <td align="center">{{ $khs->kode_matkul }}</td>
                <td>{{ $khs->nama_matkul }}</td>
                <td align="center">{{ $khs->status_matkul }}</td>
                <td align="center">{{ $khs->sks }}</td>
                <td></td> <td></td> <td align="center">0.00</td> <td></td>
            </tr>
            @empty
            <tr>
                <td colspan="10" align="center" style="background-color: #f8f9fa;">Belum ada Kartu Hasil Studi untuk semester ini.</td>
            </tr>
            @endforelse
            <tr>
                <td colspan="5" class="row-total">JUMLAH</td>
                <td align="center" style="background-color: #cccccc; font-weight: bold;">{{ $totalSks }}</td>
                <td colspan="2" style="background-color: #cccccc;"></td>
                <td align="center" style="background-color: #cccccc; font-weight: bold;">0.00</td>
                <td style="background-color: #cccccc;"></td>
            </tr>
        </tbody>
    </table>

    <div class="footer-note">* : Menunggu Proses di Biro Adak</div>

    <div class="summary-container">
        <div style="display: flex;">
            <table class="summary-table">
                <tr><th colspan="2">HASIL STUDI<br>SEMESTER DIPEROLEH</th></tr>
                <tr><th>JML SKs</th><th>IPS</th></tr>
                <tr><td>*</td><td>*</td></tr>
            </table>
            <table class="summary-table">
                <tr><th colspan="3">HASIL STUDI KUMULATIF</th></tr>
                <tr><th>KREDIT<br>DIAMBIL</th><th>KREDIT<br>PEROLEH</th><th>IPK</th></tr>
                <tr><td>*</td><td>*</td><td>*</td></tr>
            </table>
        </div>
        <div class="signature-box">
            Jakarta,<br>
            <b>Ketua Lembaga Pembelajaran</b><br><br><br><br>
            Ttd<br><br>
            Dr. Ir. Steven Darmawan, S.T., M.T.
        </div>
    </div>
    <div style="font-size: 12px; margin-top: 15px;">
        Bila terdapat perbedaan data, maka yang menjadi pedoman adalah data pada sistem akademik lintar
    </div>
@endsection