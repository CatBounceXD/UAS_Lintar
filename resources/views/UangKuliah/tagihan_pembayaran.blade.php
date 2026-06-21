@extends('layouts.main')

@section('page')

<style>
    .info-box {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
        font-size: 0.9rem;
    }

    .table-data {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        margin-bottom: 30px;
    }

    .table-data th,
    .table-data td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }

    .table-header {
        background-color: #d1d5db;
        font-weight: bold;
    }

    .status-lunas {
        color: green;
        font-weight: bold;
    }

    .status-belum {
        color: red;
        font-weight: bold;
    }
</style>

<h3>UANG KULIAH - INFORMASI</h3>

<div class="info-box">
    <strong>Informasi Untuk mahasiswa tentang VA :</strong>

    <ol style="padding-left:20px;">
        <li>Untuk seluruh mahasiswa pembayaran melalui VA (Virtual Account)</li>
        <li>Fakultas Ekonomi melalui BANK BCA</li>
        <li>Fakultas Teknik, Kedokteran, Psikologi, FSRD melalui BANK BNI</li>
        <li>Fakultas Hukum, Fakultas Ilmu Komunikasi (FIKOM), FTI melalui BANK MANDIRI</li>
        <li>Catat nomor VA Anda dengan benar sebelum melakukan pembayaran ke Bank.</li>
        <li>Pembayaran melewati tanggal batas bayar dikenakan denda (kecuali semester pendek).</li>
        <li>Pembayaran yang sudah dilakukan dapat dilihat di lintar mahasiswa H+1 setelah tanggal pembayaran.</li>
        <li>Keterlambatan pembayaran registrasi mengakibatkan Anda tidak dapat melakukan pengisian KRRS ONLINE.</li>
        <li>Abaikan tanggal batas bayar apabila nomor VA belum ada atau jumlah tagihan 0 rupiah.</li>
        <li>Khusus mahasiswa Sarjana mulai angkatan 2024 dan mulai pembayaran semester 2, pembayaran BPP dan SKS bisa menggunakan pembayaran full atau pembayaran cicilan (termin) 01 dan 02.</li>
        <li>Tagihan yang muncul di Bank ada 2 yaitu untuk pembayaran BPP/SKS Full Payment dan BPP/SKS Termin 01, silahkan lakukan pembayaran sesuai dengan metode yang diinginkan yaitu full payment atau cicilan (termin) sesuai dengan nomor VA yang dimasukkan ketika melakukan pembayaran.</li>
        <li>Apabila melakukan pembayaran Full Payment, maka tagihan cicilan (termin) akan dihapus. Sedangkan apabila melakukan pembayaran cicilan (termin) 01, maka tagihan full payment akan dihapus dan sesuai dengan jadwalnya akan dibuatkan tagihan cicilan (termin) 02.</li>
    </ol>
</div>

<h5>
    Data Uang Kuliah: {{ $mahasiswa->name }} - {{ $mahasiswa->nim }}
</h5>

<p>Tahun Akademik: 2027 GANJIL</p>

<table class="table-data">
    <tr class="table-header">
        <th rowspan="2">No</th>
        <th rowspan="2">Jenis</th>
        <th rowspan="2">No. Virtual Account</th>
        <th rowspan="2">Tgl. Batas Bayar</th>
        <th rowspan="2">Jumlah Tagihan</th>
        <th rowspan="2">Rincian</th>
        <th colspan="3">Pembayaran</th>
        <th rowspan="2">STATUS</th>
    </tr>

    <tr class="table-header">
        <th>Bank</th>
        <th>Tanggal</th>
        <th>Nominal</th>
    </tr>

    @if($dataSkema)

        <tr>
            <td>1</td>

            <td>
                {{ $dataSkema->skema_dipilih }}
            </td>

            <td>
                {{ $dataSkema->va_full ?? $dataSkema->va_termin1 }}
            </td>

            <td>
                09 July 2027
            </td>

            <td>
               Rp. 9,225,000
            </td>

            <td>
                BPP:
              Rp. 9,225,000
            </td>

            <td>-</td>
            <td>-</td>
            <td>0</td>

            <td class="status-belum">
                BELUM LUNAS
            </td>
        </tr>


    @else

        <tr>
            <td colspan="10" style="padding:20px;text-align:center;">
                Belum ada skema pembayaran yang dipilih.
            </td>
        </tr>

    @endif

</table>

@endsection