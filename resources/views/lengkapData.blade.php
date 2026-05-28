<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA MAHASISWA</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        .header-bar { background-color: #222; color: white; padding: 10px; font-weight: bold; font-size: 14px; display: flex; justify-content: space-between; align-items: center; }
        .nav-links { font-size: 12px; }
        .nav-links span { color: white; margin-left: 10px; }
        .alert-box { border: 1px solid #ccc; padding: 15px; margin-top: 10px; background-color: #fff; font-size: 14px; }
        .btn-lengkapi { background-color: #f0f0f0; border: 1px solid #777; padding: 2px 8px; cursor: pointer; font-size: 13px; margin-left: 5px; }
        .btn-lengkapi:hover { background-color: #e0e0e0; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; font-size: 13px; }
        th, td { border: 1px solid #ccc; padding: 6px; text-align: left; }
        .section-header { font-weight: bold; color: white; }
        .bg-grey { background-color: #eaeaea; }
    </style>
</head>
<body>

    @if(!$lengkapData || empty($lengkapData->no_ijazah) || empty($lengkapData->nama_orang_tua))
        
        <div class="header-bar">
            <div>BIODATA - LENGKAPI DATA</div>
        </div>

        <div class="alert-box">
            Bagi Mahasiswa Profesi Dokter dan mahasiswa S1 angkatan 2021, untuk melengkapi data silahkan klik Tombol Lengkapi Data 
            <button class="btn-lengkapi" onclick="alert('Formulir pelengkapan data dibuka!')">Lengkapi Data</button>
        </div>

    @else

        <div class="header-bar">
            <div>BIODATA - BIODATA MAHASISWA</div>
        </div>

        <table>
            <tbody>
                <tr style="background-color: #3a8f8f;" class="section-header">
                    <td colspan="2">DATA MAHASISWA</td>
                </tr>
                <tr>
                    <td width="25%">NPM</td>
                    <td><b>{{ $lengkapData->npm }}</b></td>
                </tr>
                <tr class="bg-grey">
                    <td>NAMA MAHASISWA</td>
                    <td><b>{{ $lengkapData->nama_mahasiswa }}</b></td>
                </tr>
                <tr>
                    <td>NO.REKENING</td>
                    <td><b>{{ $lengkapData->no_rekening ?? '-' }}</b></td>
                </tr>
                <tr class="bg-grey">
                    <td>TEMPAT TANGGAL LAHIR</td>
                    <td><b>{{ $lengkapData->tempat_tanggal_lahir }}</b></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td><b>{{ $lengkapData->jenis_kelamin }}</b></td>
                </tr>
                <tr class="bg-grey">
                    <td>AGAMA</td>
                    <td><b>{{ $lengkapData->agama }}</b></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><b>{{ $lengkapData->alamat }}</b></td>
                </tr>
                <tr class="bg-grey">
                    <td>HANDPHONE</td>
                    <td><b>{{ $lengkapData->handphone }}</b></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td style="color: blue;"><b>{{ $lengkapData->email }}</b></td>
                </tr>

                <tr style="background-color: #a95151;" class="section-header">
                    <td colspan="2">DATA SEKOLAH</td>
                </tr>
                <tr>
                    <td>ASAL SEKOLAH</td>
                    <td><b>{{ $lengkapData->asal_sekolah }}</b></td>
                </tr>
                <tr class="bg-grey">
                    <td>NO.IJAZAH</td>
                    <td><b>{{ $lengkapData->no_ijazah ?? '-' }}</b></td>
                </tr>

                <tr style="background-color: #4a9a4a;" class="section-header">
                    <td colspan="2">DATA ORANG TUA</td>
                </tr>
                <tr>
                    <td>NAMA ORANG TUA / WALI</td>
                    <td><b>{{ $lengkapData->nama_orang_tua ?? '-' }}</b></td>
                </tr>
            </tbody>
        </table>

    @endif

</body>
</html>