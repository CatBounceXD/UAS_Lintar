<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update No HP - Paket Internet</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header-bar { background-color: #333; color: white; padding: 10px; font-weight: bold; font-size: 14px; text-transform: uppercase; }
        .alert-container { border: 1px solid #ccc; padding: 15px; margin-top: 10px; font-size: 13px; }
        .text-danger { font-weight: bold; text-transform: uppercase; }
        table { border-collapse: collapse; margin-top: 15px; width: 50%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <div class="header-bar">
        UPDATE NO HP
    </div>

    @if(!$mahasiswa || $mahasiswa->is_aktif_2021 == 0)
        
        <div class="alert-container">
            <p class="text-danger">MOHON MAAF, ANDA TIDAK AKTIF PADA SEMESTER GANJIL 2021,</p>
            <p>Anda tidak berhak melakukan update No HP untuk mendapatkan bantuan Paket Internet.</p>
        </div>

    @else

        <div class="alert-container" style="background-color: #e6f4ea;">
            Status Anda: <b>Aktif Terdaftar</b>. Silakan perbarui nomor Anda di bawah ini.
        </div>

        <form action="#" method="POST">
            <table>
                <tr>
                    <td>NPM</td>
                    <td><b>{{ $mahasiswa->npm }}</b></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                </tr>
                <tr>
                    <td>No HP Sekarang</td>
                    <td><input type="text" name="no_hp" value="{{ $mahasiswa->no_hp }}"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Simpan Perubahan</button>
                    </td>
                </tr>
            </table>
        </form>

    @endif

</body>
</html>