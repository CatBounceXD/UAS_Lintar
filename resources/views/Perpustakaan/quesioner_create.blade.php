@extends('layouts.main')

@section('page')

<style>
.page-title {
    background: #2c3e50;
    color: white;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
}
.form-container {
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.section-title {
    background: #7f8c8d;
    color: white;
    padding: 8px 12px;
    margin-top: 25px;
    margin-bottom: 15px;
    font-weight: bold;
}
.question-block {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}
.table-rating {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
.table-rating th {
    background: #34495e;
    color: white;
    padding: 10px;
    text-align: center;
}
.table-rating td {
    padding: 10px;
    border: 1px solid #ddd;
}
.input-text {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.btn-submit {
    background: #27ae60;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    font-size: 16px;
}
.btn-submit:hover {
    background: #219653;
}
</style>

<div class="page-title">
    Kuesioner Perpustakaan Tahun 2026
    <p style="margin: 5px 0 0 0; font-size: 14px; color: #bdc3c7;">Isilah Kuesioner ini dengan jujur dan benar.</p>
</div>

<div class="form-container">
    <form action="{{ route('quesioner.store') }}" method="POST">
        @csrf

        <div class="section-title">Aktivitas Anda di Perpustakaan</div>
        
        <div class="question-block">
            <label><b>1. Seberapa sering Anda memanfaatkan jasa dan fasilitas perpustakaan dalam seminggu?</b></label>
            <div style="margin-top: 8px;">
                <label><input type="radio" name="frekuensi_kunjungan" value="1-2 kali" required> 1-2 kali</label>&nbsp;&nbsp;
                <label><input type="radio" name="frekuensi_kunjungan" value="2-4 kali"> 2-4 kali</label>&nbsp;&nbsp;
                <label><input type="radio" name="frekuensi_kunjungan" value="4-6 kali"> 4-6 kali</label>&nbsp;&nbsp;
                <label><input type="radio" name="frekuensi_kunjungan" value="> 6 kali"> > 6 kali</label>
            </div>
            <input type="text" name="alasan_kunjungan" class="input-text" placeholder="Berikan Alasan Anda ke perpustakaan...">
        </div>

        <div class="question-block">
            <label><b>2. Seberapa sering Anda mengakses sumber-sumber informasi melalui web perpustakaan dalam seminggu?</b></label>
            <div style="margin-top: 8px;">
                <label><input type="radio" name="frekuensi_akses_web" value="1-2 kali" required> 1-2 kali</label>&nbsp;&nbsp;
                <label><input type="radio" name="frekuensi_akses_web" value="2-4 kali"> 2-4 kali</label>&nbsp;&nbsp;
                <label><input type="radio" name="frekuensi_akses_web" value="4-6 kali"> 4-6 kali</label>&nbsp;&nbsp;
                <label><input type="radio" name="frekuensi_akses_web" value="> 6 kali"> > 6 kali</label>
            </div>
            <input type="text" name="alasan_akses_web" class="input-text" placeholder="Berikan Alasan untuk apa akses sumber sumber informasi...">
        </div>


        <div class="section-title">Persepsi Kualitas Pelayanan Perpustakaan (Kinerja Petugas)</div>
        <p style="font-size: 13px; color: #666; margin-bottom: 10px;">Skor: 1 (Sangat Tidak Puas) sampai 7 (Sangat Puas)</p>
        
        <table class="table-rating">
            <thead>
                <tr>
                    <th style="text-align: left; width: 60%;">Pertanyaan</th>
                    @for($i = 1; $i <= 7; $i++)
                        <th>{{ $i }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @php
                    $p_questions = [
                        1 => "Petugas memahami kebutuhan saya di perpustakaan.",
                        2 => "Petugas Membimbing Kebutuhan saat saya mengalami kesulitan mencari informasi.",
                        3 => "Petugas cepat tanggap menangani keluhan.",
                        4 => "Petugas cakap pada bidangnya saat melayani.",
                        5 => "Petugas Sopan Saat Melayani.",
                        6 => "Petugas Ramah Saat Melayani.",
                        7 => "Petugas menepati janji bila menjanjikan layanan.",
                        8 => "Petugas melayani sesuai ketentuan jam pelayanan yang ditetapkan."
                    ];
                    // Kolom p yang memiliki isian alasan di database seeder kamu
                    $p_reasons = [2, 3, 5, 6, 7, 8];
                @endphp

                @foreach($p_questions as $no => $text)
                    <tr style="background: #fdfdfd;">
                        <td><b>{{ $no }}.</b> {{ $text }}</td>
                        @for($score = 1; $score <= 7; $score++)
                            <td style="text-align: center;">
                                <input type="radio" name="p{{ $no }}" value="{{ $score }}" required>
                            </td>
                        @endfor
                    </tr>
                    @if(in_array($no, $p_reasons))
                        <tr style="background: #fff;">
                            <td colspan="8" style="padding-top: 0; padding-bottom: 15px;">
                                <input type="text" name="alasan_p{{ $no }}" class="input-text" style="margin-top:0;" placeholder="Alasan untuk poin nomor {{ $no }}...">
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>


        <div class="section-title">Kualitas Informasi dan Akses Informasi</div>
        <table class="table-rating">
            <thead>
                <tr>
                    <th style="text-align: left; width: 60%;">Pertanyaan</th>
                    @for($i = 1; $i <= 7; $i++)
                        <th>{{ $i }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @php
                    $i_questions = [
                        1 => "Ketersediaan judul (buku dan jurnal) tercetak sesuai kebutuhan belajar pada prodi saya.",
                        2 => "Ketersediaan judul (buku dan jurnal) elektronik sesuai kebutuhan belajar prodi saya.",
                        3 => "Kecukupan jumlah copy buku yang tercetak sesuai belajar pada prodi saya.",
                        4 => "Kecukupan jumlah copy buku yang dapat dipinjam dibawa pulang.",
                        5 => "Ketersediaan (buku - buku baru dan jurnal) tercetak.",
                        6 => "Kenyamanan dalam mengakses informasi di perpustakaan tanpa datang ke perpustakaan.",
                        7 => "Kejelasan petunjuk menggunakan fasilitas layanan.",
                        8 => "Kemudahan penggunaan katalog digital untuk mencari informasi."
                    ];
                    $i_reasons = [1, 2, 4, 5, 8];
                @endphp

                @foreach($i_questions as $no => $text)
                    <tr style="background: #fdfdfd;">
                        <td><b>{{ $no }}.</b> {{ $text }}</td>
                        @for($score = 1; $score <= 7; $score++)
                            <td style="text-align: center;">
                                <input type="radio" name="i{{ $no }}" value="{{ $score }}" required>
                            </td>
                        @endfor
                    </tr>
                    @if(in_array($no, $i_reasons))
                        <tr style="background: #fff;">
                            <td colspan="8" style="padding-top: 0; padding-bottom: 15px;">
                                <input type="text" name="alasan_i{{ $no }}" class="input-text" style="margin-top:0;" placeholder="Alasan untuk poin nomor {{ $no }}...">
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>


        <div class="section-title">Kenyamanan Ruangan Perpustakaan</div>
        <table class="table-rating">
            <thead>
                <tr>
                    <th style="text-align: left; width: 60%;">Pertanyaan</th>
                    @for($i = 1; $i <= 7; $i++)
                        <th>{{ $i }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @php
                    $r_questions = [
                        1 => "Keleluasaan keluar dan masuk ke perpustakaan.",
                        2 => "Pencahayaan ruangan sangat terang dan baik.",
                        3 => "Suhu ruangan dalam perpustakaan terasa sejuk.",
                        4 => "Kondisi ruangan perpustakaan tidak terasa bising.",
                        5 => "Kebersihan ruangan terpelihara dengan baik.",
                        6 => "Fasilitas yang digunakan (meja, kursi, komputer) baik.",
                        7 => "Sirkulasi udara di dalam ruangan baik."
                    ];
                @endphp

                @foreach($r_questions as $no => $text)
                    <tr>
                        <td><b>{{ $no }}.</b> {{ $text }}</td>
                        @for($score = 1; $score <= 7; $score++)
                            <td style="text-align: center;">
                                <input type="radio" name="r{{ $no }}" value="{{ $score }}" required>
                            </td>
                        @endfor
                    </tr>
                @endforeach
            </tbody>
        </table>


        <div class="section-title">Usulan dan Saran Perbaikan</div>
        <div class="question-block" style="border-bottom: none;">
            <textarea name="saran" rows="4" class="input-text" placeholder="Tuliskan saran perbaikan Anda di sini..."></textarea>
        </div>

        <div style="margin-top: 20px; text-align: right;">
            <a href="/quesioner" style="text-decoration: none; color: #7f8c8d; margin-right: 20px;">Batal</a>
            <button type="submit" class="btn-submit">Selesai</button>
        </div>
    </form>
</div>

@endsection