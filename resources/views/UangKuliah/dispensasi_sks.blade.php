@extends('layouts.main')

@section('page')
<style>
    .header-title {
        font-size: 1.6rem;
        color: #1e293b;
        font-weight: 700;
        margin-bottom: 1rem;
        letter-spacing: 0.5px;
    }
    .btn-container {
        display: flex;
        gap: 10px;
        margin-bottom: 1.25rem;
    }
    .btn-action {
        padding: 10px 20px;
        font-size: 0.9rem;
        font-weight: 600;
        border-radius: 6px;
        border: none;
        transition: all 0.2s ease;
    }
    .btn-action:disabled {
        background-color: #e2e8f0;
        color: #94a3b8;
        cursor: not-allowed;
    }
    .divider {
        border: 0;
        height: 1px;
        background-color: #e2e8f0;
        margin-bottom: 1.5rem;
    }

    .info-box {
        background-color: #f8fafc;
        border-left: 4px solid #3b82f6;
        padding: 1.25rem;
        border-radius: 0 8px 8px 0;
        margin-bottom: 1.5rem;
    }
    .info-box p {
        margin: 0 0 0.5rem 0;
        color: #1e293b;
    }
    .info-box ul {
        margin: 0;
        padding-left: 1.25rem;
        color: #475569;
    }
    .info-box li {
        margin-bottom: 0.4rem;
    }
    .info-box li:last-child {
        margin-bottom: 0;
    }


    .lintar-table-custom {
        width: 100%;
        max-width: 650px; 
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        margin-top: 1rem;
        margin-bottom: 20px;
    }

    .lintar-table-custom tr {
        background-color: #79babc !important; 
    }

    .lintar-table-custom td {
        padding: 5px 8px;
        color: #000000 !important; 
        vertical-align: top;
        border: 1px solid #ffffff; 
        font-weight: bold;
    }


    .lintar-table-custom .field-label {
        width: 30%;
    }

    .lintar-table-custom .field-value {
        width: 70%;
    }

    .alert-danger {
        background-color: #fef2f2;
        border: 1px solid #fee2e2;
        color: #991b1b;
        padding: 1rem 1.25rem;
        border-radius: 8px;
        font-weight: 600;
        margin-top: 1rem;
    }
</style>

    <h2 class="header-title">UANG KULIAH - DISPENSASI PENUNDAAN SKS</h2>
    
    <div class="btn-container">
        <button class="btn-action" disabled>Ajukan Dispensasi SKS</button>
        <button class="btn-action" disabled>Batalkan Pengajuan</button>
    </div>
    <div class="divider"></div>

    <div class="info-box">
        <p><strong>Informasi Pengajuan Dispensasi Penundaan Pembayaran SKS Tahun Akademik : Genap 2026/2027</strong></p>
        <ul>
            <li>Dibuka mulai tanggal 3 Maret 2026 sd. 2 April 2027 Pukul 16.00 WIB.</li>
            <li>Untuk mahasiswa angkatan >= 2024 tidak dapat mengajukan Dispensasi sks ini karena sudah memakai skema Termin.</li>
        </ul>
    </div>

    @if($dataSks)
        <table class="lintar-table-custom">
            <tbody>
                <tr>
                    <td class="field-label">Nama</td>
                    <td class="field-value">: {{ $dataSks->user->name }}</td>
                </tr>
                <tr>
                    <td class="field-label">Nomor Pokok Mahasiswa</td>
                    <td class="field-value">: {{ $dataSks->user->nim }}</td>
                </tr>
                <tr>
                    <td class="field-label">Fakultas/Program Studi</td>
                    <td class="field-value">: {{ $dataSks->user->prodi }}</td>
                </tr>
                <tr>
                    <td class="field-label">Alamat</td>
                    <td class="field-value">: {{ $dataSks->user->biodata->alamat }}</td>
                </tr>
                <tr>
                    <td class="field-label">Nomor Telepon</td>
                    <td class="field-value">: {{ $dataSks->user->biodata->handphone }}</td>
                </tr>
                <tr>
                    <td class="field-label">Tahun Akademik</td>
                    <td class="field-value">: {{ $dataSks->tahun_akademik }}</td>
                </tr>
                <tr>
                    <td class="field-label">Status Pengajuan</td>
                    <td class="field-value">: <strong>{{ $dataSks->status_pengajuan }}</strong></td>
                </tr>
                <tr>
                    <td class="field-label">Tanggal Pengajuan</td>
                    <td class="field-value">: {{ $dataSks->tanggal_pengajuan ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="field-label">Alasan Pengajuan</td>
                    <td class="field-value">: {{ $dataSks->alasan_pengajuan ?? '-' }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <div class="alert-danger">Belum ada data pengajuan dispensasi SKS di database.</div>
    @endif

@endsection