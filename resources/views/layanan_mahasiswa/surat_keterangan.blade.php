@extends('layouts.main')

@section('page')

    <h2 style="background-color: #333; color: white; padding: 5px;">LAYANAN MAHASISWA - SURAT KETERANGAN</h2>
    
    <div align="right">
        <button>Buat Baru</button>
    </div>
    <br>

    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <td colspan="6" align="left">Daftar Riwayat Pembuatan Surat Keterangan</td>
        </tr>
        <tr bgcolor="#d3d3d3" align="center">
            <th>No</th>
            <th>Tanggal</th>
            <th>No.Surat</th>
            <th>Jenis Surat Keterangan</th>
            <th>Bahasa</th>
            <th>View PDF</th>
        </tr>
        
        <!-- Looping data dari database -->
        @forelse($riwayatSurat as $surat)
        <tr align="center">
            <td>{{ $surat->no }}</td>
            <td>{{ $surat->tanggal }}</td>
            <td>{{ $surat->no_surat }}</td>
            <td>{{ $surat->jenis_surat_keterangan }}</td>
            <td>{{ $surat->bahasa }}</td>
            <td><a href="{{ $surat->view_pdf }}">Lihat</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="6" align="center">Belum ada data pengajuan surat keterangan.</td>
        </tr>
        @endforelse
    </table>
@endsection