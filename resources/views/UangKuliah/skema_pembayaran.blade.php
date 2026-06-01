@extends('layouts.main')

@section('page')

    @foreach($dataSkema as $data)
    <div style="background-color: #222; color: #fff; padding: 10px; font-weight: bold; font-size: 16px; margin-bottom: 15px;">
        UANG KULIAH - INFORMASI PILIHAN METODE PEMBAYARAN BPP {{ strtoupper($data->semester_tahun) }}
    </div>

    <p>Halooo <strong>{{ $data->nama }}-{{ $data->nim }}</strong> Silahkan <strong>PILIH</strong> salah satu skema pembayaran BPP {{ $data->semester_tahun }} Anda sebagai berikut:</p>

    <div style="background-color: #999; color: #fff; padding: 5px 10px; font-weight: bold; margin-top: 15px;">
        FULL PAYMENT
    </div>
    <table width="100%" cellpadding="10" cellspacing="0" style="border: 1px solid #ccc; margin-bottom: 15px;">
        <tr>
            <td>
                <strong>NO VA BPP bayar FULL :</strong><br>
                {{ $data->va_full }} {{ $data->nominal_full }} rentang bayar 08 Juni s.d. 09 Juli 2026
            </td>
   <td align="right" width="40%">
    <a href="/tagihan-pembayaran" style="text-decoration: none;">
        <button style="padding: 10px; font-weight: bold; background-color: #f5f5f5; border: 1px solid #333; cursor: pointer;">
            BAYAR SECARA FULL/PENUH, KLIK DISINI
        </button>
    </a>
    </td>
    </table>

    <p><strong>ATAU</strong></p>

    <div style="background-color: #999; color: #fff; padding: 5px 10px; font-weight: bold;">
        TERMIN
    </div>
    <table width="100%" cellpadding="10" cellspacing="0" style="border: 1px solid #ccc; margin-bottom: 25px;">
        <tr>
            <td>
                <strong>NO VA BPP bayar TERMIN:</strong><br>
                Termin 1: {{ $data->va_termin1 }} {{ $data->nominal_termin1 }} rentang bayar 08 Juni s.d. 09 Juli 2026<br>
                Termin 2: {{ $data->va_termin2 }} {{ $data->nominal_termin2 }} rentang bayar 28 Juli s.d. 23 Agustus 2026<br>
                <strong>Total tagihan skema TERMIN:{{ $data->total_termin }}</strong>
            </td>
    <td align="right" width="40%" valign="top">
        <a href="/tagihan-pembayaran" style="text-decoration: none;">
            <button style="padding: 10px; font-weight: bold; background-color: #f5f5f5; border: 1px solid #333; cursor: pointer;">
                BAYAR SECARA TERMIN/CICILAN, KLIK DISINI
            </button>
        </a>
    </td>
    </table>

    <p style="font-size: 16px;">
        <strong>Anda Sudah memilih skema Pembayaran yaitu : <span style="text-decoration: underline;">{{ $data->skema_dipilih }}</span></strong>
    </p>

    <p><strong>Informasi Penting:</strong></p>
    <ol style="line-height: 1.6;">
        <li>Jika sampai dengan tanggal 07 Juni 2026 mahasiswa belum melakukan pemilihan skema pembayaran maka akan otomatis diarahkan ke skema Full Payment (Bayar Penuh).</li>
        <li>Apabila tagihan tidak dibayar sesuai jadwal pembayaran, maka akan dikenakan denda sebesar 3% perbulan dari nominal tagihan, sesuai dengan Keputusan Rektor Nomor: 9335-KR/UNTAR/XII/2023.</li>
        <li>Mohon diperhatikan pada skema TERMIN/CICILAN, ada biaya administrasi.</li>
    </ol>

    <p><i>jangan lupa lakukan pembayaran sesuai waktu yang sudah ditentukan agar proses akademik anda lancar dan tertib. Terima kasih, salam sehat dan sukses selalu.</i></p>
    @endforeach

@endsection