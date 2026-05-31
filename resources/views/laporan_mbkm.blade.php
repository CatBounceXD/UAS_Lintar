<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaporan MBKM</title>
    <style>
        /* 1. Desain Kotak Judul */
        .header-title { background-color: #333; color: white; padding: 10px; font-weight: bold; margin-bottom: 15px; }
        
        /* 2. Desain Kotak Biasa untuk Informasi */
        .info-box { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; background-color: #f9f9f9; }
        
        /* 3. Desain Teks Tambahan */
        .text-center { text-align: center; }
        .text-red { color: #b22222; font-size: 22px; margin-bottom: 5px; font-weight: bold; }
        .text-grey { color: #666; font-size: 14px; }
    </style>
</head>
<body style="font-family: sans-serif; padding: 20px;">

    <div class="header-title">PELAPORAN MBKM - Merdeka Belajar Kampus Merdeka</div>

    <div class="info-box">
        <h3 style="margin-top: 0;">{{ $laporan ? $laporan->nama : 'YAEL REHUELLAH' }}</h3>
        <p class="text-grey" style="margin-bottom: 0;">
            NPM: {{ $laporan ? $laporan->npm : '535250175' }} | 
            Prodi: {{ $laporan ? $laporan->prodi : 'TEKNIK INFORMATIKA' }}
        </p>
    </div>

    <div class="info-box text-center" style="padding: 40px 20px;">
        <div class="text-red">
            {{ $laporan ? $laporan->status_mbkm : 'Tidak Terdaftar di MBKM' }}
        </div>
        <p class="text-grey">
            {{ $laporan ? $laporan->keterangan : 'Mahasiswa tidak terdaftar dalam program MBKM. Hubungi Program Studi apabila terdapat kesalahan data.' }}
        </p>
    </div>

</body>
</html>