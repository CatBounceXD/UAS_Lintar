<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti Online - Ajuan Cuti</title>
</head>
<body>

    <h2>CUTI ONLINE - AJUAN CUTI</h2>
    <hr>

    <button>Ajukan Cuti</button>
    <button>Batalkan Pengajuan Cuti</button>
    <br><br>

    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr bgcolor="#d3d3d3">
            <th colspan="3" align="left">Informasi Pribadi</th>
        </tr>
        <tr>
            <td width="20%">Nama</td>
            <td width="1%">:</td>
            <td>{{ $infoPribadi ? $infoPribadi->nama : 'Data belum ada' }}</td>
        </tr>
        <tr>
            <td>Nomor Pokok Mahasiswa</td>
            <td>:</td>
            <td>{{ $infoPribadi ? $infoPribadi->npm : 'Data belum ada' }}</td>
        </tr>
        <tr>
            <td>Fakultas/Program Studi</td>
            <td>:</td>
            <td>{{ $infoPribadi ? $infoPribadi->fakultas_prodi : 'Data belum ada' }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $infoPribadi ? $infoPribadi->alamat : 'Data belum ada' }}</td>
        </tr>
        <tr>
            <td>Telepon/HP</td>
            <td>:</td>
            <td>{{ $infoPribadi ? $infoPribadi->telepon : 'Data belum ada' }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{ $infoPribadi ? $infoPribadi->email : 'Data belum ada' }}</td>
        </tr>
    </table>

    <br>

    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr bgcolor="#d3d3d3">
            <th colspan="3" align="left">Informasi Tahun Akademik</th>
        </tr>
        <tr>
            <td width="20%">Tahun Akademik Pengajuan</td>
            <td width="1%">:</td>
            <td>{{ $infoAkademik ? $infoAkademik->tahun_akademik_pengajuan : 'Data belum ada' }}</td>
        </tr>
        <tr>
            <td>Tanggal Buka Pengajuan</td>
            <td>:</td>
            <td>{{ $infoAkademik ? $infoAkademik->tanggal_buka_pengajuan : 'Data belum ada' }}</td>
        </tr>
    </table>

    <br>
    
    <p>Daftar Pengajuan Cuti Akademik</p>
    <p><i>Belum ada data pengajuan cuti akademik.</i></p>

</body>
</html>