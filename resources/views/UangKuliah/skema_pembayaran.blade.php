@extends('layouts.main')

@section('page')
<style>
    .info-header {
        background: #333; 
        color: white; 
        padding: 10px; 
        font-weight: bold; 
        margin-bottom: 10px; 
    }
    .row-container { 
        border: 1px solid #ccc; 
        margin-bottom: 20px;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .section-title { 
        background: #999; 
        color: white; 
        padding: 5px 10px; 
        font-weight: bold; 
    }
    .btn-submit { 
        background: #e0e0e0; 
        border: 1px solid #aaa; 
        padding: 10px; 
        cursor: pointer; 
        text-decoration: none; 
        color: #666; 
        font-weight: bold;
    }

</style>

<div class="info-header">
    UANG KULIAH - INFORMASI PILIHAN METODE PEMBAYARAN BPP SEMESTER GANJIL 2026/2027
</div>

<p>
    Halooo {{ $dataSkema->user->name ?? 'User' }} - {{ $dataSkema->user->nim ?? 'NIM' }} 
    Silahkan pilih salah satu skema pembayaran BPP Semester Ganjil 2026/2027, apakah ingin membayar secara FULL PAYMENT (PENUH) atau TERMIN/CICILAN.
</p>

<form action="{{ url('skema-pembayaran/pilih') }}" method="POST">
    @csrf
    
    <!-- BLOCK FULL PAYMENT -->
    <div class="section-title">FULL PAYMENT</div>
    <div class="row-container">
        <p style="margin: 0;">
            NO VA BPP bayar FULL : <br>
            <strong>{{ $dataSkema->va_full }}</strong> Rp.{{ number_format($dataSkema->nominal_full) }} rentang bayar 08 Juni s.d. 09 Juli 2027
        </p>
        <button type="submit" name="skema" value="FULL PAYMENT(PENUH)" class="btn-submit">
            BAYAR SECARA FULL/PENUH, KLIK DISINI
        </button>
    </div>

    <p><strong>ATAU</strong></p>

    <!-- BLOCK TERMIN -->
    <div class="section-title">TERMIN</div>
    <div class="row-container">
        <p style="margin: 0;">
            NO VA BPP bayar TERMIN:<br>
            Termin 1: <strong>1888853525016711</strong> Rp. 5,535,000 rentang bayar 08 Juni s.d. 09 Juli 2027<br>
            Termin 2: <strong>1888853525016712</strong> Rp. 3,690,000 rentang bayar 28 Juli s.d. 23 Agustus 2027<br>
            Total tagihan skema TERMIN: <strong>Rp. 9,225,000</strong>
        </p>
        <button type="submit" name="skema" value="TERMIN/CICILAN" class="btn-submit">
            BAYAR SECARA TERMIN/CICILAN, KLIK DISINI
        </button>
    </div>

</form>

<p><strong>Anda Sudah memilih skema Pembayaran yaitu : <span style="color: blue;">{{ $dataSkema->skema_dipilih ?? 'BELUM MEMILIH' }}</span></strong></p>

<div style="margin-top:20px; border-top: 1px solid #ccc; padding-top: 10px;">
    <strong>Informasi Penting:</strong>
    <ol>
        <li>Jika sampai dengan tanggal 07 Juni 2027 mahasiswa belum melakukan pemilihan skema maka akan otomatis diarahkan ke skema Full Payment (Bayar Penuh).</li>
        <li>Apabila tagihan tidak dibayar sesuai jadwal pembayaran, maka akan dikenakan denda sebesar 3% perbulan dari nominal tagihan, sesuai dengan Keputusan Rektor Nomor: 9335-KR/UNTAR/XII/2023.</li>
        <li>Mohon diperhatikan pada skema TERMIN/CICILAN, ada biaya administrasi.</li>
    </ol>
    <p>jangan lupa lakukan pembayaran sesuai waktu yang sudah ditentukan agar proses akademik anda lancar dan tertib. Terima kasih, salam sehat dan sukses selalu.</p>
</div>
@endsection