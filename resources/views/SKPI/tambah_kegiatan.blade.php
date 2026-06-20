@extends('layouts.main')

@section('page')
<style>
    .skpi-container {
        font-family: Arial, sans-serif;
        margin-top: 15px;
    }
    .btn-kembali {
        background-color: #f8fafc;
        border: 1px solid #ababab;
        padding: 3px 10px;
        border-radius: 3px;
        text-decoration: none;
        color: black;
        font-size: 13px;
        display: inline-block;
        margin-bottom: 10px;
    }
    .main-card {
        background: white;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .card-header-title {
        background-color: #212529;
        color: white;
        padding: 8px 15px;
        font-weight: bold;
        font-size: 13.5px;
        letter-spacing: 0.5px;
    }
    
    /* Navigasi Tab Atas */
    .tabs-container {
        display: flex;
        background: #f8fafc;
        border-bottom: 1px solid #ccc;
        flex-wrap: wrap;
    }
    .tab-item {
        padding: 10px 20px;
        font-size: 13px;
        cursor: pointer;
        border-right: 1px solid #e2e8f0;
        color: #334155;
        text-align: center;
    }
    .tab-item.active {
        background: white;
        font-weight: bold;
        border-bottom: 3px solid #fff;
        margin-bottom: -1px;
        position: relative;
    }

    .form-body {
        padding: 15px;
        background-color: #f1f5f9;
    }
    
    /* Box Putih Utama */
    .inner-box {
        background: white;
        border: 1px solid #cbd5e1;
        border-radius: 4px;
        padding: 20px;
    }
    
    /* Tab Samping Mandiri */
    .sub-tabs {
        display: flex;
        gap: 5px;
        margin-bottom: 15px;
    }
    .sub-tab-item {
        padding: 8px 15px;
        font-size: 13px;
        background: #f8fafc;
        border: 1px solid #cbd5e1;
        border-radius: 4px 4px 0 0;
        cursor: pointer;
    }
    .sub-tab-item.active {
        background: white;
        font-weight: bold;
        border-bottom: 2px solid #fff;
        margin-bottom: -1px;
    }

    /* Struktur Tabel Form LINTAR */
    .form-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
    }
    .form-table th {
        background-color: #006687;
        color: white;
        font-size: 12.5px;
        text-align: left;
        padding: 6px 10px;
        border: 1px solid #cbd5e1;
    }
    .form-table td {
        background-color: #dbdbdb;
        border: 1px solid #cbd5e1;
        padding: 12px;
        vertical-align: top;
    }
    
    .form-label-list {
        list-style-type: disc;
        padding-left: 15px;
        margin: 0;
    }
    .form-label-list li {
        font-size: 12.5px;
        font-style: italic;
        font-weight: bold;
        color: #334155;
        margin-bottom: 3px;
    }
    .form-control {
        width: 100%;
        padding: 4px;
        border: 1px solid #aaa;
        font-size: 12.5px;
        background-color: white;
        border-radius: 2px;
        margin-bottom: 8px;
    }
    
    .period-label {
        font-size: 12px;
        font-style: italic;
        text-align: center;
        display: block;
        margin-bottom: 4px;
    }
    .file-instruction {
        font-size: 12px;
        font-style: italic;
        color: #000;
        line-height: 1.4;
        margin-bottom: 15px;
    }

    .btn-simpan {
        background-color: #f0f0f0;
        border: 1px solid #ababab;
        padding: 4px 20px;
        border-radius: 3px;
        cursor: pointer;
        font-size: 13px;
    }
</style>

<div class="skpi-container">
    <a href="{{ url('/isi-skpi') }}" class="btn-kembali">kembali</a>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 4px; font-size: 13px;">
            {{ session('success') }}
        </div>
    @endif

    <div class="main-card">
        <!-- Judul Header Otomatis Berubah Lewat JS -->
        <div class="card-header-title" id="main-header-title">SKPI - PENALARAN DAN KEILMUAN</div>
        
        <!-- Navigasi Kategori SKPI Atas -->
        <div class="tabs-container">
            <div class="tab-item active" onclick="switchCategory('penalaran', this)">Penalaran dan Keilmuan</div>
            <div class="tab-item" onclick="switchCategory('bakat', this)">Bakat dan Minat</div>
            <div class="tab-item" onclick="switchCategory('wirausaha', this)">Kewirausahaan</div>
            <div class="tab-item" onclick="switchCategory('organisasi', this)">Organisasi</div>
            <div class="tab-item" onclick="switchCategory('sosial', this)">Kepedulian Sosial</div>
            <div class="tab-item" onclick="switchCategory('lain', this)">Lain</div>
        </div>

        <div class="form-body">
            <!-- Sub Tab Samping (Hanya Mengaktifkan Mandiri) -->
            <div class="sub-tabs">
                <div class="sub-tab-item active">Mandiri</div>
                <div class="sub-tab-item" style="color: #999; cursor: not-allowed;">Dirjen Pembelajaran dan Kemahasiswaan</div>
            </div>

            <div class="inner-box">
                <!-- Action disatukan ke rute penyimpanan isi-skpi -->
                <form action="{{ url('/isi-skpi/simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Input Hidden untuk mengirim data Kategori Aktif ke Backend -->
                    <input type="hidden" name="kategori" id="hidden-kategori" value="Penalaran dan Keilmuan">
                    <input type="hidden" name="jenis" value="Mandiri">

                    <table class="form-table">
                        <thead>
                            <tr>
                                <th style="width: 45%;">Kegiatan</th>
                                <th style="width: 25%;">Periode</th>
                                <th style="width: 30%;">File Pendukung/Bukti</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Kolom Dropdown Form -->
                                <td>
                                    <ul class="form-label-list">
                                        <li>Kegiatan</li>
                                    </ul>
                                    <!-- Dropdown Utama yang isinya berganti secara otomatis -->
                                    <select name="kegiatan" id="dropdown-kegiatan" class="form-control">
                                        <option value="Olimpiade / Debat / Karya Tulis / Lomba Sejenisnya">Olimpiade / Debat / Karya Tulis / Lomba Sejenisnya</option>
                                    </select>

                                    <ul class="form-label-list">
                                        <li>Tingkat</li>
                                    </ul>
                                    <select name="tingkat" class="form-control">
                                        <option value="Internasional">Internasional</option>
                                        <option value="Nasional">Nasional</option>
                                        <option value="Provinsi">Provinsi</option>
                                        <option value="Universitas">Universitas</option>
                                    </select>

                                    <ul class="form-label-list">
                                        <li>Klasifikasi</li>
                                    </ul>
                                    <select name="klasifikasi" class="form-control">
                                        <option value="Juara I">Juara I</option>
                                        <option value="Juara II">Juara II</option>
                                        <option value="Juara III">Juara III</option>
                                        <option value="Anggota / Peserta">Anggota / Peserta</option>
                                    </select>
                                </td>

                                <!-- Kolom Periode -->
                                <td>
                                    <span class="period-label">Mulai</span>
                                    <input type="date" name="tgl_mulai" class="form-control" style="text-align: center;" required>
                                    
                                    <span class="period-label" style="margin: 8px 0;">sampai dengan</span>
                                    
                                    <input type="date" name="tgl_selesai" class="form-control" style="text-align: center;" required>
                                </td>

                                <!-- Kolom Bukti File -->
                                <td>
                                    <div class="file-instruction">
                                        Sertakan bukti atau file pendukung dengan format jpg/png/pdf dan tidak lebih dari 10 MB
                                    </div>
                                    <input type="file" name="file_bukti" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <button type="submit" class="btn-simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Engine untuk Mengubah Isi Dropdown Kegiatan Secara Real-Time -->
<script>
    // Pemetaan data kegiatan sesuai request kamu
    const masterKegiatan = {
        penalaran: [
            "Olimpiade / Debat / Karya Tulis / Lomba Sejenisnya"
        ],
        bakat: [
            "Kejuaraan Kegiatan Minat dan Bakat"
        ],
        wirausaha: [
            "Mengelola kewirausahaan"
        ],
        organisasi: [
            "Pengurus Organisasi",
            "Mengikuti latihan kepemimpinan manajemen mahasiswa (LKMM)"
        ],
        sosial: [
            "Mengikuti pelaksaan bakti sosial",
            "penanganan bencana alam dikoordinasikan Untar"
        ],
        lain: [
            "Kegiatan Lainnya"
        ]
    };

    function switchCategory(categoryKey, element) {
        // 1. Pindahkan kelas active pada Tab atas
        document.querySelectorAll('.tab-item').forEach(tab => tab.classList.remove('active'));
        element.classList.add('active');

        // 2. Ubah teks Header Card Title sesuai tab yang diklik
        const namaKategori = element.innerText;
        document.getElementById('main-header-title').innerText = "SKPI - " + namaKategori.toUpperCase();

        // 3. Set value input hidden kategori agar data di database tidak tertukar
        document.getElementById('hidden-kategori').value = namaKategori;

        // 4. Bersihkan dan isi ulang Dropdown Kegiatan dengan data baru
        const dropdown = document.getElementById('dropdown-kegiatan');
        dropdown.innerHTML = ""; // Kosongkan opsi lama

        masterKegiatan[categoryKey].forEach(item => {
            const option = document.createElement('option');
            option.value = item;
            option.innerText = item;
            dropdown.appendChild(option);
        });
    }
</script>
@endsection