@extends('layouts.main')

@section('page')
    
<style>
    /* 1. Desain Kotak Judul */
    .header-title { background-color: #333; color: white; padding: 10px; font-weight: bold; margin-bottom: 15px; }
    
    /* 2. Desain Tombol */
    .btn-action { padding: 5px 15px; margin-bottom: 15px; border: 1px solid #ccc; cursor: pointer; background-color: #f9f9f9; }
    
    /* 3. Desain Tabel Utama */
    .table-data { width: 100%; border-collapse: collapse; font-size: 14px; margin-top: 15px; }
    .table-data th, .table-data td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    .table-data th { background-color: #f4f4f4; }
    
    /* 4. Desain Teks Tambahan */
    .text-center { text-align: center; }
    .text-blue { color: blue; }
    .text-red { color: red; }
</style>

    <div class="header-title">PERKULIAHAN - BAHAN AJAR</div>
    
    <!-- <button class="btn-action">Bahan Ajar</button> -->
    
    <div style="margin-bottom: 15px;">
        <label>Pilih Tahun akademik :</label>
        <select>
            <option>Genap 2025</option>
            <option>Ganjil 2024</option>
        </select>
    </div>

    <table class="table-data">
        <thead>
            <tr>
                <!-- <th>#</th> -->
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
                <!-- <td><input type="radio" name="pilih_matkul"></td> -->
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
                <td colspan="11" style="text-align: center; color: #888;">Belum ada data matakuliah.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

@endsection