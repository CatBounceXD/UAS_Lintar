@extends('layouts.main')

@section('page') {{-- <--- Diganti menjadi 'page' agar kontennya mau muncul --}}
<style>
    .pwd-card {
        font-family: 'Segoe UI', Arial, sans-serif;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .pwd-header {
        background-color: #1e293b;
        color: #ffffff;
        padding: 15px 20px;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.5px;
    }
    .pwd-body {
        padding: 25px;
    }
    .pwd-alert {
        background-color: #f8fafc;
        border-left: 4px solid #475569;
        padding: 15px;
        margin-bottom: 20px;
        font-size: 13.5px;
        color: #334155;
    }
    .rules-heading {
        font-weight: 700;
        font-size: 14px;
        color: #0f172a;
        margin-bottom: 12px;
    }
    .rules-box {
        margin: 0;
        padding-left: 20px;
        line-height: 1.8;
        font-size: 13px;
        color: #475569;
    }
    .action-container {
        margin-top: 25px;
        font-size: 13.5px;
        color: #1e293b;
    }
    .btn-orange {
        color: #ea580c;
        font-weight: 600;
        text-decoration: none;
    }
    .btn-orange:hover {
        text-decoration: underline;
    }
    .btn-red {
        color: #dc2626;
        font-weight: 600;
        text-decoration: none;
    }
    .btn-red:hover {
        text-decoration: underline;
    }
</style>

<div class="pwd-card">
    <div class="pwd-header">
        BIODATA - UBAH PASSWORD
    </div>
    <div class="pwd-body">
        
        @if($dataAkun)
            <div class="pwd-alert">
                Sistem mendeteksi akun aktif: <b>{{ $dataAkun->nama_mahasiswa }}</b> ({{ $dataAkun->nim }}) | Email Terikat: <i>{{ $dataAkun->email_office }}</i>
            </div>
        @endif

        <div class="rules-heading">Saran Perubahan password :</div>
        <ul class="rules-box">
            <li>Password harus kombinasi Huruf Besar, Huruf Kecil dan Angka</li>
            <li>Panjang Password minimum 8 karakter</li>
            <li>Panjang Password maksimum 16 karakter</li>
            <li>Tidak boleh menggunakan username, nama depan, nama belakang, bulan lahir, nomor atau karakter berurut</li>
            <li>Berupa suatu kata yg mengandung arti, contoh : Lov3soW3ll</li>
        </ul>

        <div class="action-container">
            Merubah password LINTAR saat ini melalui 
            <a href="https://portal.office.com" target="_blank" class="btn-orange">portal.office.com</a>, 
            atau <a href="#" class="btn-red">klik disini</a>
        </div>
        
    </div>
</div>
@endsection