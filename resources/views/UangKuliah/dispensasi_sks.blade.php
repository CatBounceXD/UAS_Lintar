@extends('layouts.main')

@section('page')

    <!-- Judul Header Atas Sesuai Gambar image_8993fe.png -->
    <h2>UANG KULIAH - DISPENSASI PENUNDAAN SKS</h2>
    
    <!-- Tombol Aksi -->
    <p>
        <button disabled>Ajukan Dispensasi SKS</button>
        <button disabled>Batalkan Pengajuan</button>
    </p>
    <hr>

    <!-- Teks Pengumuman Sesuai Gambar Mockup -->
    <p><strong>Informasi Pengajuan Dispensasi Penundaan Pembayaran SKS Tahun Akademik : Genap 2025/2026</strong></p>
    <ul>
        <li><strong>Dibuka mulai tanggal 3 Maret 2026 sd. 2 April 2026 Pukul 16.00 WIB.</strong></li>
        <li><strong>Untuk mahasiswa angkatan >= 2024 tidak dapat mengajukan Dispensasi sks ini karena sudah memakai skema Termin.</strong></li>
    </ul>

    <!-- Tabel Susunan Vertikal Menurun -->
    @foreach($dataSks as $data)
    <table border="1" cellpadding="6" cellspacing="0" width="100%" style="border-color: #ccc;">
        <tr>
            <td width="25%" bgcolor="#7ca9a7"><strong>Nama</strong></td>
            <td width="2%" bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->nama }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Nomor Pokok Mahasiswa</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->nomor_pokok_siswa }}</td>
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
            <td bgcolor="#cae4db">{{ $data->nomor_telepon }}</td>
        </tr>
        <tr>
            <td bgcolor="#7ca9a7"><strong>Tahun Akademik</strong></td>
            <td bgcolor="#7ca9a7" align="center">:</td>
            <td bgcolor="#cae4db">{{ $data->tahun_akademik }}</td>
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
    @endforeach

@endsection