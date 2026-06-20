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
        margin-bottom: 1.5rem;
    }
    .btn-action {
        padding: 10px 20px;
        font-size: 0.9rem;
        font-weight: 600;
        border-radius: 6px;
        border: 1px solid #cbd5e1;
        background-color: #ffffff;
        color: #334155;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        background-color: #f8fafc;
        border-color: #94a3b8;
    }
    .divider {
        border: 0;
        height: 1px;
        background-color: #e2e8f0;
        margin-bottom: 1.5rem;
    }
    .table-data {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 1.5rem;
    }
    .table-data th {
        background-color: #f1f5f9;
        color: #1e293b;
        text-align: left;
        padding: 14px 18px;
        font-size: 1rem;
        font-weight: 700;
        border-bottom: 1px solid #e2e8f0;
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
    .table-data tbody tr:last-child td {
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
    .section-subtitle {
        font-size: 1.1rem;
        color: #1e293b;
        font-weight: 600;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
    }
    .empty-state {
        background-color: #f8fafc;
        border: 1px dashed #cbd5e1;
        color: #64748b;
        padding: 1.25rem;
        border-radius: 8px;
        font-style: italic;
    }
</style>

    <h2 class="header-title">CUTI ONLINE - AJUAN CUTI</h2>
    <div class="divider"></div>

    <div class="btn-container">
        <button class="btn-action">Ajukan Cuti</button>
        <button class="btn-action">Batalkan Pengajuan Cuti</button>
    </div>

    <table class="table-data">
        <thead>
            <tr>
                <th colspan="3">Informasi Pribadi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="label">Nama</td>
                <td class="separator">:</td>
                <td>{{ $infoPribadi ? $infoPribadi->user->name : 'Data belum ada' }}</td>
            </tr>
            <tr>
                <td class="label">Nomor Pokok Mahasiswa</td>
                <td class="separator">:</td>
                <td>{{ $infoPribadi ? $infoPribadi->user->nim : 'Data belum ada' }}</td>
            </tr>
            <tr>
                <td class="label">Fakultas/Program Studi</td>
                <td class="separator">:</td>
                <td>{{ $infoPribadi ? $infoPribadi->user->prodi : 'Data belum ada' }}</td>
            </tr>
            <tr>
                <td class="label">Alamat</td>
                <td class="separator">:</td>
                <td>{{ $infoPribadi ? $infoPribadi->user->biodata->alamat : 'Data belum ada' }}</td>
            </tr>
            <tr>
                <td class="label">Telepon/HP</td>
                <td class="separator">:</td>
                <td>{{ $infoPribadi ? $infoPribadi->user->biodata->handphone : 'Data belum ada' }}</td>
            </tr>
            <tr>
                <td class="label">Email</td>
                <td class="separator">:</td>
                <td>{{ $infoPribadi ? $infoPribadi->user->email : 'Data belum ada' }}</td>
            </tr>
        </tbody>
    </table>

    <table class="table-data">
        <thead>
            <tr>
                <th colspan="3">Informasi Tahun Akademik</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="label">Tahun Akademik Pengajuan</td>
                <td class="separator">:</td>
                <td>{{ $infoAkademik ? $infoAkademik->tahun_akademik_pengajuan : 'Data belum ada' }}</td>
            </tr>
            <tr>
                <td class="label">Tanggal Buka Pengajuan</td>
                <td class="separator">:</td>
                <td>{{ $infoAkademik ? $infoAkademik->tanggal_buka_pengajuan : 'Data belum ada' }}</td>
            </tr>
        </tbody>
    </table>
    
    <h3 class="section-subtitle">Daftar Pengajuan Cuti Akademik</h3>
    <div class="empty-state">
        Belum ada data pengajuan cuti akademik.
    </div>
    
@endsection