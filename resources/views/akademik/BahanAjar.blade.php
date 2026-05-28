<!DOCTYPE html>
<html>
<head>
    <title>Bahan Ajar - LINTAR</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .header-title { background-color: #333; color: white; padding: 10px; font-weight: bold; }
        .btn-bahan { padding: 5px 15px; margin: 15px 0; border: 1px solid #ccc; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; font-size: 14px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <div class="header-title">AKADEMIK - BAHAN AJAR</div>
    
    <button class="btn-bahan">Bahan Ajar</button>
    
    <div>
        <label>Pilih Tahun akademik :</label>
        <select>
            <option>Genap 2025</option>
            <option>Ganjil 2024</option>
        </select>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>No</th>
                <th>Kode</th>
                <th>Mata Kuliah (sks)</th>
                <th>Kls</th>
                <th>Dosen Pengajar</th>
                <th>Ruang / Waktu</th>
                <th>Ket.</th>
                <th>Kode Join Class Microsoft Teams</th>
                <th>SAP</th>
                <th>Kontak Email Dosen</th>
            </tr>
        </thead>
        <tbody>
            @forelse($materi as $index => $data)
            <tr>
                <td><input type="radio" name="pilih_matkul"></td>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->kode_matkul }}</td>
                <td>{{ $data->nama_matkul }}</td>
                <td>{{ $data->kelas }}</td>
                <td>{{ $data->dosen_pengajar }}</td>
                <td>{{ $data->ruang_waktu }}</td>
                <td>{{ $data->keterangan }}</td>
                <td>{{ $data->kode_teams }}</td>
                <td><a href="#">[PDF]</a></td>
                <td>{{ $data->email_dosen }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="11" style="text-align: center;">Belum ada data matakuliah.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>