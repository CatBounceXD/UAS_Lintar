@extends('layouts.main')

@section('page')

    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <thead>
            <tr style="background-color: black; color: white; text-align: left;">
                <th colspan="2">BIODATA - BIODATA MAHASISWA</th>
            </tr>
        </thead>
        <tbody>
            @if($biodata)
                <tr style="background-color: teal; color: white; font-weight: bold;">
                    <td colspan="2">DATA MAHASISWA</td>
                </tr>
               <!-- UBAH BAGIAN NPM -->
                <tr>
                    <td width="30%">NPM</td>
                    <!-- Aslinya: $biodata->npm -->
                    <td><b>{{ $biodata->user->nim }}</b></td> <!-- Di tabel users, kolomnya bernama 'nim' -->
                </tr>

                <!-- UBAH BAGIAN NAMA -->
                <tr style="background-color: lightgrey;">
                    <td>NAMA MAHASISWA</td>
                    <!-- Aslinya: $biodata->nama_mahasiswa -->
                    <td><b>{{ $biodata->user->name }}</b></td> <!-- Di tabel users, kolomnya bernama 'name' -->
                </tr>
                <tr>
                    <td>NO.REKENING</td>
                    <td><b>{{ $biodata->no_rekening ?? '-' }}</b></td>
                </tr>
                <tr style="background-color: lightgrey;">
                    <td>TEMPAT TANGGAL LAHIR</td>
                    <td><b>{{ $biodata->tempat_tanggal_lahir }}</b></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td><b>{{ $biodata->jenis_kelamin }}</b></td>
                </tr>
                <tr style="background-color: lightgrey;">
                    <td>AGAMA</td>
                    <td><b>{{ $biodata->agama }}</b></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><b>{{ $biodata->alamat }}</b></td>
                </tr>
                <tr style="background-color: lightgrey;">
                    <td>TELEPON</td>
                    <td><b>{{ $biodata->telepon ?? '-' }}</b></td>
                </tr>
                <tr>
                    <td>HANDPHONE</td>
                    <td><b>{{ $biodata->handphone }}</b></td>
                </tr>
                <tr style="background-color: lightgrey;">
                    <td>EMAIL</td>
                    <td><b style="color: blue;">{{ $biodata->user->email }}</b></td>
                </tr>

                <tr><td colspan="2" style="background-color: white; border: none; height: 15px;"></td></tr>

                <tr style="background-color: maroon; color: white; font-weight: bold;">
                    <td colspan="2">DATA SEKOLAH</td>
                </tr>
                <tr>
                    <td>ASAL SEKOLAH</td>
                    <td><b>{{ $biodata->asal_sekolah }}</b></td>
                </tr>
                <tr style="background-color: lightgrey;">
                    <td>NO.IJAZAH</td>
                    <td><b>{{ $biodata->no_ijazah }}</b></td>
                </tr>
                <tr>
                    <td>TGL IJAZAH</td>
                    <td><b>{{ $biodata->tgl_ijazah }}</b></td>
                </tr>

                <tr><td colspan="2" style="background-color: white; border: none; height: 15px;"></td></tr>

                <tr style="background-color: green; color: white; font-weight: bold;">
                    <td colspan="2">DATA ORANG TUA</td>
                </tr>
                <tr>
                    <td>NAMA ORANG TUA / WALI</td>
                    <td><b>{{ $biodata->nama_orang_tua }}</b></td>
                </tr>
                <tr style="background-color: lightgrey;">
                    <td>ALAMAT</td>
                    <td><b>{{ $biodata->alamat_orang_tua }}</b></td>
                </tr>
                <tr>
                    <td>TELEPON</td>
                    <td><b>{{ $biodata->telepon_orang_tua ?? '-' }}</b></td>
                </tr>
            @else
                <tr>
                    <td colspan="2" style="text-align: center;">Data mahasiswa belum ada. Silakan isi tabel biodata_mhs di database terlebih dahulu.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
