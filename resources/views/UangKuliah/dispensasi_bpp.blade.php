@extends('layouts.main')

@section('page')

    <!-- Judul Halaman -->
    <h2>UANG KULIAH - DISPENSASI PENUNDAAN BPP</h2>
    
    <!-- Tombol Aksi Sederhana -->
    <p>
        <button disabled>Ajukan Dispensasi BPP</button>
        <button disabled>Batalkan Pengajuan</button>
    </p>
    <hr>

    <!-- Teks Pengumuman Sesuai Gambar -->
    <p><strong>PENGUMUMAN: Pengajuan Dispensasi hanya untuk Mahasiswa Angkatan 2023 kebawah, Untuk Mahasiswa Angkatan 2024 Keatas menggunakan mekanisme Cicilan.</strong></p>
    <p><strong>Informasi Pengajuan Dispensasi Penundaan Pembayaran BPP Tahun Akademik : Genap 2025/2026<br>
    Dibuka mulai tanggal 2 Desember 2025 sd. 8 Januari 2026 Pukul 23.00 WIB.</strong></p>

    <!-- Perulangan Data dari Database Secara Vertikal -->
    @forelse($dataDispensasi as $data)
    <table border="1" cellpadding="6" cellspacing="0" width="100%" style="margin-bottom: 20px; border-color: #ccc;">
        <tr>
            <td width="25%" bgcolor="#7ca9a7"><strong>Nama</strong></td>
            <td width="2%" bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->nama }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Nomor Pokok Mahasiswa</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->nim }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Fakultas/Program Studi</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->fakultas_prodi }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Alamat</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->alamat }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Nomor Telepon</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->no_telepon }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Tahun Akademik</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->tahun_akademik }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Informasi Pembayaran</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <!-- nl2br digunakan agar baris baru (\n) di database terbaca sebagai <br> di HTML -->
            <td bgcolor="#cae4db">{!! nl2br(e($data->info_pembayaran ?? '-')) !!}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Status Pengajuan</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db"><strong>{{ $data->status_pengajuan }}</strong></td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Tanggal Pengajuan</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->tanggal_pengajuan ?? '-' }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Alasan Pengajuan</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->alasan_pengajuan ?? '-' }}</td>
        </tr>
    </table>
    @empty
    <p style="color: red; font-weight: bold;">Belum ada data pengajuan dispensasi BPP di database.</p>
    @endforelse

@endsection