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
        line-height: 1.5;
    }
    .info-box p:last-child {
        margin-bottom: 0;
    }

    .table-data {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
    }
    /* Zebra Striping murni via CSS */
    .table-data tbody tr:nth-child(even) {
        background-color: #f8fafc;
    }
    .table-data tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }
    .table-data td {
        padding: 14px 18px;
        border-bottom: 1px solid #e2e8f0;
        color: #334155;
        font-size: 0.95rem;
        vertical-align: top;
    }
    .table-data tr:last-child td {
        border-bottom: none;
    }
    .table-data td.label {
        font-weight: 600;
        color: #1e293b;
        width: 25%;
    }
    .table-data td.separator {
        width: 2%;
        text-align: center;
        color: #94a3b8;
        font-weight: bold;
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

    <h2 class="header-title">UANG KULIAH - DISPENSASI PENUNDAAN BPP</h2>
    
    <div class="btn-container">
        <button class="btn-action" disabled>Ajukan Dispensasi BPP</button>
        <button class="btn-action" disabled>Batalkan Pengajuan</button>
    </div>
    <div class="divider"></div>

    <div class="info-box">
        <p><strong>PENGUMUMAN: Pengajuan Dispensasi hanya untuk Mahasiswa Angkatan 2023 kebawah, Untuk Mahasiswa Angkatan 2024 Keatas menggunakan mekanisme Cicilan.</strong></p>
        <p>Informasi Pengajuan Dispensasi Penundaan Pembayaran BPP Tahun Akademik : Genap 2025/2026<br>
        Dibuka mulai tanggal 2 Desember 2025 sd. 8 Januari 2026 Pukul 23.00 WIB.</p>
    </div>

    @if($dataDispensasi)
        <table class="table-data">
            <tbody>
                <tr>
                    <td class="label">Nama</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->user->name }}</td>
                </tr>
                <tr>
                    <td class="label">Nomor Pokok Mahasiswa</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->user->nim }}</td>
                </tr>
                <tr>
                    <td class="label">Fakultas/Program Studi</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->user->prodi }}</td>
                </tr>
                <tr>
                    <td class="label">Alamat</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->user->biodata->alamat }}</td>
                </tr>
                <tr>
                    <td class="label">Nomor Telepon</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->user->biodata->handphone }}</td>
                </tr>
                <tr>
                    <td class="label">Tahun Akademik</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->tahun_akademik }}</td>
                </tr>
                <tr>
                    <td class="label">Informasi Pembayaran</td>
                    <td class="separator">:</td>
                    <td>{!! nl2br(e($dataDispensasi->info_pembayaran ?? '-')) !!}</td>
                </tr>
                <tr>
                    <td class="label">Status Pengajuan</td>
                    <td class="separator">:</td>
                    <td><strong>{{ $dataDispensasi->status_pengajuan }}</strong></td>
                </tr>
                <tr>
                    <td class="label">Tanggal Pengajuan</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->tanggal_pengajuan ?? '-' }}</td>
                </tr>
                <tr>
                    <td class="label">Alasan Pengajuan</td>
                    <td class="separator">:</td>
                    <td>{{ $dataDispensasi->alasan_pengajuan ?? '-' }}</td>
                </tr>
            </tbody>
        </table>
    @else
        <div class="alert-danger">Belum ada data pengajuan dispensasi BPP di database.</div>
    @endif

@endsection