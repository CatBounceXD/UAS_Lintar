<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Layanan Mahasiswa - Surat Permohonan</title>
</head>
<body>

    <h2 style="background-color: #333; color: white; padding: 5px;">LAYANAN MAHASISWA - SURAT PERMOHONAN</h2>
    
    <div align="right">
        <button>Buat Baru</button>
    </div>
    <br>

    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <td colspan="6" align="left">Daftar Riwayat Pembuatan Surat Permohonan</td>
        </tr>
        <tr bgcolor="#d3d3d3" align="center">
            <th>No</th>
            <th>Tanggal</th>
            <th>No.Surat</th>
            <th>Jenis Permohonan</th>
            <th>Bahasa</th>
            <th>View PDF</th>
        </tr>
        
        <!-- Looping data dari database -->
        @forelse($riwayatPermohonan as $mohon)
        <tr align="center">
            <td>{{ $mohon->no }}</td>
            <td>{{ $mohon->tanggal }}</td>
            <td>{{ $mohon->no_surat }}</td>
            <td>{{ $mohon->jenis_permohonan }}</td>
            <td>{{ $mohon->bahasa }}</td>
            <td><a href="{{ $mohon->view_pdf }}">Lihat</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="6" align="center">Belum ada data pengajuan surat permohonan.</td>
        </tr>
        @endforelse
    </table>

</body>
</html>