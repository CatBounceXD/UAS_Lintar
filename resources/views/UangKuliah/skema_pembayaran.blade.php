@extends('layouts.main')

@section('page')
<style>
    .info-header { background: #333; color: white; padding: 10px; font-weight: bold; margin-bottom: 10px; }
    .row-container { border: 1px solid #ccc; margin-bottom: 20px; padding: 15px; display: flex; justify-content: space-between; align-items: center; }
    .section-title { background: #999; color: white; padding: 5px 10px; font-weight: bold; }
    .btn-submit { background: #e0e0e0; border: 1px solid #aaa; padding: 10px; cursor: pointer; text-decoration: none; color: #666; font-weight: bold; }
</style>

<div class="info-header">
    UANG KULIAH - INFORMASI PILIHAN METODE PEMBAYARAN BPP SEMESTER GANJIL 2026/2027
</div>

<p>
    Halooo <strong>{{ $mahasiswa->name }} - {{ $mahasiswa->nim }}</strong><br>
    Silahkan pilih salah satu skema pembayaran BPP Semester Ganjil 2026/2027, apakah ingin membayar secara FULL PAYMENT (PENUH) atau TERMIN/CICILAN.
</p>

@if($dataSkema)
<form action="{{ route('skema.store') }}" method="POST">
    @csrf
    
    <div class="section-title">FULL PAYMENT</div>
    <div class="row-container">
        <p style="margin: 0;">
            NO VA BPP bayar FULL : <br>
            <strong>{{ $dataSkema->va_full }}</strong> Rp. {{ number_format($dataSkema->nominal_full, 0, ',', '.') }} rentang bayar 08 Juni s.d. 09 Juli 2026
        </p>
        <button type="submit" name="skema" value="FULL PAYMENT(PENUH)" class="btn-submit">
            BAYAR SECARA FULL/PENUH, KLIK DISINI
        </button>
    </div>

    <p><strong>ATAU</strong></p>

    <div class="section-title">TERMIN</div>
    <div class="row-container">
        <p style="margin: 0;">
            NO VA BPP bayar TERMIN:<br>
            Termin 1: <strong>{{ $dataSkema->va_termin1 }}</strong> Rp. {{ number_format($dataSkema->nominal_termin1, 0, ',', '.') }} rentang bayar 08 Juni s.d. 09 Juli 2026<br>
            Termin 2: <strong>{{ $dataSkema->va_termin2 }}</strong> Rp. {{ number_format($dataSkema->nominal_termin2, 0, ',', '.') }} rentang bayar 28 Juli s.d. 23 Agustus 2026<br>
            Total tagihan skema TERMIN: <strong>Rp. {{ number_format($dataSkema->total_termin, 0, ',', '.') }}</strong>
        </p>
        <button type="submit" name="skema" value="TERMIN/CICILAN" class="btn-submit">
            BAYAR SECARA TERMIN/CICILAN, KLIK DISINI
        </button>
    </div>
</form>

<p><strong>Anda Sudah memilih skema Pembayaran yaitu : <span style="color: blue;">{{ $dataSkema->skema_dipilih ?? 'BELUM MEMILIH' }}</span></strong></p>
@else
<p style="color: red;">Data skema belum di-generate. Silahkan muat ulang halaman.</p>
@endif

<div style="margin-top:20px; border-top: 1px solid #ccc; padding-top: 10px;">
    <strong>Informasi Penting:</strong>
    <ol>
        <li>Jika sampai dengan tanggal 07 Juni 2027 mahasiswa belum melakukan pemilihan skema maka akan otomatis diarahkan ke skema Full Payment (Bayar Penuh).</li>
        <li>Apabila tagihan tidak dibayar sesuai jadwal pembayaran, maka akan dikenakan denda sebesar 3% perbulan dari nominal tagihan.</li>
    </ol>
</div>
@endsection