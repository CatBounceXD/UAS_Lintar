<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Uang Kuliah - Informasi Tagihan & Pembayaran</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px; color: #333; font-size: 13px;">


    <div style="background-color: #222; color: #fff; padding: 10px; font-weight: bold; font-size: 15px; margin-bottom: 15px;">
        UANG KULIAH - INFORMASI
    </div>

    <strong>Informasi Untuk mahasiswa tentang VA :</strong>
    <ol style="line-height: 1.5; margin-top: 5px; margin-bottom: 20px;">
        <li>Untuk seluruh mahasiswa pembayaran melalui VA (Virtual Account)</li>
        <li>Fakultas Ekonomi melalui <strong>BANK BCA</strong></li>
        <li>Fakultas Teknik, Kedokteran, Psikologi, FSRD melalui <strong>BANK BNI</strong></li>
        <li>Fakultas Hukum, Fakultas Ilmu Komunikasi (FIKOM), Fakultas Teknologi Informasi (FTI) melalui <strong>BANK MANDIRI</strong></li>
        <li>Catat nomor VA Anda dengan benar sebelum melakukan pembayaran ke Bank.</li>
        <li>Pembayaran melewati tanggal batas bayar dikenakan denda (kecuali semester pendek).</li>
        <li>Pembayaran yang sudah dilakukan dapat dilihat di lintar mahasiswa <strong>H+1</strong> setelah tanggal pembayaran.</li>
        <li>Keterlambatan pembayaran registrasi mengakibatkan Anda tidak dapat melakukan pengisian KRRS ONLINE.</li>
        <li><strong>Abaikan tanggal batas bayar apabila nomor VA belum ada atau jumlah tagihan 0 rupiah.</strong></li>
        <li><strong>Khusus mahasiswa Sarjana mulai angkatan 2024 dan mulai pembayaran semester 2, pembayaran BPP dan SKS bisa menggunakan pembayaran full atau pembayaran cicilan (termin) 01 dan 02.</strong></li>
        <li>Tagihan yang muncul di Bank ada 2 yaitu untuk pembayaran BPP/SKS Full Payment dan BPP/SKS Termin 01, silahkan lakukan pembayaran sesuai dengan metode yang diinginkan yaitu full payment atau cicilan (termin) sesuai dengan nomor VA yang dimasukkan ketika melakukan pembayaran.</li>
        <li>Apabila melakukan pembayaran Full Payment, maka tagihan cicilan (termin) akan dihapus. Sedangkan apabila melakukan pembayaran cicilan (termin) 01, maka tagihan full payment akan dihapus dan sesuai dengan jadwalnya akan dibuatkan tagihan cicilan (termin) 02.</li>
    </ol>

    <p style="margin-bottom: 5px;">Data Uang Kuliah: <strong>SEKAR ARUMA PUTRI (535250167)</strong></p>

    @foreach($groupedTagihan as $tahunAkademik => $daftarTagihan)
        <p style="margin-top: 15px; margin-bottom: 5px; font-weight: bold;">Tahun Akademik: {{ $tahunAkademik }}</p>
        
        <table border="1" cellpadding="6" cellspacing="0" width="100%" style="border-color: #ccc; border-collapse: collapse; text-align: center;">
            <thead>
                <tr bgcolor="#ccc" style="font-weight: bold;">
                    <td rowspan="2" width="4%">No</td>
                    <td rowspan="2" width="12%">Jenis</td>
                    <td rowspan="2" width="15%">No. Virtual Account</td>
                    <td rowspan="2" width="12%">Tgl. Batas Bayar</td>
                    <td rowspan="2" width="12%">Jumlah Tagihan</td>
                    <td rowspan="2" width="18%">Rincian</td>
                    <td colspan="3" width="22%">Pembayaran</td>
                    <td rowspan="2" width="5%">STATUS</td>
                </tr>
                <tr bgcolor="#ccc" style="font-weight: bold;">
                    <td>Bank</td>
                    <td>Tanggal</td>
                    <td>Nominal</td>
                </tr>
            </thead>
            <tbody>
                @foreach($daftarTagihan as $index => $tagihan)
                <tr bgcolor="{{ $index % 2 == 0 ? '#cae4db' : '#ffffff' }}">
                    <td>{{ $index + 1 }}</td>
                    <td align="left">{{ $tagihan->jenis }}</td>
                    <td>{{ $tagihan->no_va }}</td>
                    <td>{{ $tagihan->tgl_batas_bayar }}</td>
                    <td align="right">{{ $tagihan->jumlah_tagihan }}</td>
                    <td align="left" style="white-space: pre-line;">{{ $tagihan->rincian }}</td>
                    <td>{{ $tagihan->bayar_bank }}</td>
                    <td>{{ $tagihan->bayar_tanggal }}</td>
                    <td align="right">{{ $tagihan->bayar_nominal }}</td>
                    <td style="font-weight: bold;">{{ $tagihan->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach

</body>
</html>