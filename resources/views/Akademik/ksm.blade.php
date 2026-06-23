@extends('layouts.main')

@section('page')
    <style>
        .page-title-banner {
            background-color: #222222;
            color: #ffffff;
            padding: 10px 15px;
            font-weight: bold;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .ksm-controls {
            margin-bottom: 15px;
            font-size: 13px;
        }

        .ksm-controls select { padding: 3px; font-size: 13px;}
        .ksm-controls button { padding: 3px 8px; font-size: 12px; font-weight: bold; cursor: pointer;}

        .ksm-kop {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.4;
            margin-bottom: 20px;
        }

        .ksm-title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .ksm-identitas {
            width: 100%;
            font-size: 13px;
            margin-bottom: 15px;
        }
        .ksm-identitas td { padding: 3px 0; }

        .ksm-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            border: 1px solid #cccccc;
        }

        .ksm-table th {
            background-color: #c4d7d6;
            color: #000;
            padding: 8px;
            border: 1px solid #ffffff;
            text-align: center;
        }

        .ksm-table td {
            padding: 6px;
            border: 1px solid #ffffff;
            background-color: #d1e5e4;
        }

        .ksm-table .row-total {
            background-color: #cccccc;
            font-weight: bold;
            text-align: center;
        }

        .ksm-footer {
            margin-top: 20px;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
        }

        .catatan-box { width: 60%; line-height: 1.6; }
        .signature-box { width: 35%; text-align: center; line-height: 1.5; }
    </style>

    <div class="page-title-banner">
        AKADEMIK - KARTU STUDI MAHASISWA
    </div>

    <div class="ksm-controls">
        Tahun akademik : 
        <select>
            <option>{{ $tahunAkademik }}</option>
        </select>
        <button>CETAK KSM</button>
        <button>CETAK KSM BHS.ING</button>
        <div style="color: red; font-weight: bold; margin-top: 10px;">
            - Cetak KSM HARUS DENGAN PRINTER WARNA
        </div>
    </div>

    <div class="ksm-kop">
        Biro Administrasi Akademik<br>
        Universitas Tarumanagara<br>
        Jl.Let.Jend. S.Parman No.1 Jakarta 11440<br>
        Tlp.(021)5671747 (Hunting) Fax: (021)5604478
    </div>

    <div class="ksm-title">
        KARTU STUDI MAHASISWA (KSM)
    </div>

    <table class="ksm-identitas">
        <tr>
            <td width="15%">Nama</td>
            <td width="2%">:</td>
            <td width="40%"><strong>{{ $user->name }}</strong></td>
            <td width="15%">Semester</td>
            <td width="2%">:</td>
            <td>Genap</td>
        </tr>
        <tr>
            <td>No. Pokok Mahasiswa</td>
            <td>:</td>
            <td>{{ $user->nim }}</td>
            <td>Tahun Akademik</td>
            <td>:</td>
            <td>2025 / 2026</td>
        </tr>
        <tr>
            <td>Fak./Prog.Studi</td>
            <td>:</td>
            <td colspan="4">{{ strtoupper($user->prodi ?? 'TEKNIK INFORMATIKA') }}</td>
        </tr>
    </table>

    <table class="ksm-table">
        <thead>
            <tr>
                <th rowspan="2" width="5%">No</th>
                <th rowspan="2" width="12%">Kode M.K</th>
                <th rowspan="2" width="45%">Nama Mata Kuliah</th>
                <th rowspan="2" width="5%">sks</th>
                <th rowspan="2" width="5%">Kls</th>
                <th rowspan="2" width="8%">Status</th>
                <th width="20%">Paraf Pengawas</th>
            </tr>
            <tr>
                <th>UAS</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataKsm as $index => $ksm)
            <tr>
                <td align="center">{{ $index + 1 }}</td>
                <td align="center">{{ $ksm->kode_matkul }}</td>
                <td>{{ $ksm->nama_matkul }}</td>
                <td align="center">{{ $ksm->sks }}</td>
                <td align="center">{{ $ksm->kelas }}</td>
                <td align="center">{{ $ksm->status_matkul }}</td>
                <td></td> </tr>
            @empty
            <tr>
                <td colspan="7" align="center" style="background-color: #f8f9fa;">Belum ada Kartu Studi Mahasiswa.</td>
            </tr>
            @endforelse
            
            <tr>
                <td colspan="3" class="row-total">J U M L A H  S K S</td>
                <td align="center" style="background-color: #cccccc; font-weight: bold;">{{ $totalSks }}</td>
                <td colspan="3" style="background-color: #cccccc;"></td>
            </tr>
        </tbody>
    </table>

    <div class="ksm-footer">
        <div class="catatan-box">
            >> Catatan <<
            <ol style="margin-top: 5px; padding-left: 20px;">
                <li>Telitilah Mata Kuliah & Kelas yang tercantum pd KSM ini</li>
                <li>Apabila terdapat kesalahan, kekurangan/kelebihan sks harap lapor ke Biro Adak masing-masing kampus dengan membawa fotocopy KRRS/KSS</li>
                <li>KSM ini berlaku sebagai tanda mengikuti UTS, UAS dan Ujian Skripsi/Tugas Akhir/Tesis/Desertasi</li>
                <li>Informasi Akademik OnLine dapat diakses melalui https://lintar.untar.ac.id</li>
            </ol>
        </div>
        <div class="signature-box">
            Jakarta, 20 Juni 2026<br><br>
            KETUA LEMBAGA PEMBELAJARAN<br><br><br><br><br>
            TTD<br><br><br>
            Dr. Ir. Steven Darmawan, S.T., M.T.
        </div>
    </div>
@endsection