@extends('layouts.main')

@section('page')
    <style>
        /* --- BUNGKUS UTAMA --- */
        .home-container {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            gap: 20px; /* Jarak antar baris ke bawah */
        }

        /* --- 1. BANNER MERAH (MENU UTAMA) --- */
        .menu-banner {
            background-color: #333; /* Warna merah khas seperti di main layout */
            color: #ffffff;
            padding: 12px 20px;
            border-radius: 10px 10px 0 0;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* --- 2. KOTAK PROFIL (FULL WIDTH) --- */
        .profile-box {
            border: 0px 
            padding: 20px;
        }

        .student-name {
            font-size: 18px;
            font-weight: bold;
            color: #b30000;
            margin-bottom: 8px;
        }

        .welcome-text {
            font-size: 14px;
            color: #333333;
            line-height: 1.6;
        }

        /* --- 3. PEMBAGIAN BAWAH (KIRI & KANAN) --- */
        .bottom-split {
            display: grid;
            grid-template-columns: 1.3fr 0.7fr; /* Membagi layar 50% kiri, 50% kanan */
            gap: 10px;
        }

        /* Kotak Info PKKMB (Kiri) */
        .info-card {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-left: 4px solid #333; /* Garis merah penanda di kiri */
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            height: fit-content;
        }

        .info-card h5 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 14px;
            color: #222222;
            text-transform: uppercase;
        }

        .info-card p {
            margin: 0;
            font-size: 13px;
            color: #555555;
            line-height: 1.5;
        }

        /* Kotak Pengumuman (Kanan) */
        .pengumuman-box {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
            height: fit-content;
        }

        .pengumuman-header { /* Banner merah kecil untuk judul pengumuman */
            border-bottom: 3px solid #333;
            color: #b30000;
            padding: 10px;
            font-weight: bold;
            font-size: 13px;
            text-transform: uppercase;
        }

        .pengumuman-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        .pengumuman-table td {
            padding: 15px;
            border-bottom: 1px solid #eeeeee;
            color: #444444;
            line-height: 1.5;
        }
    </style>

    <div class="home-container">
        
        <div class="menu-banner">
            Menu Utama
        </div>

        <div class="profile-box">
            <div class="student-name">
                {{ $user->name }}
            </div>
            <div class="welcome-text">
                Selamat datang di ruang Lintar Mahasiswa, anda terdaftar sebagai mahasiswa 
                <b>{{ $user->prodi }}</b> dengan ID 
                <b>{{ $user->nim }}</b>.
            </div>
        </div>

        <div class="bottom-split">
            
            <div class="info-card">
                <h5>Informasi PKKMB Tahun 2025</h5>
                <p>Status Kelulusan: <span style="color: green; font-weight: bold;">LULUS</span><br>
                Informasi Pengenalan Kehidupan Kampus Mahasiswa baru 2025 (PKKMB) yang akan dilaksanakan pada tanggal 13 -15 Agustus 2025 dan 17 Agustus 2025.</p>
            </div>
            

            <div class="pengumuman-box">
                <div class="pengumuman-header">
                    Pengumuman
                </div>
                <table class="pengumuman-table">
                    <tbody>
                        <tr>
                            <td>Pengisian Kartu Rencana Studi (KRS) Semester Genap telah dibuka. Silakan periksa status akademis dan tagihan uang kuliah Anda pada menu yang tersedia.</td>
                        </tr>
                        </tbody>
                </table>
            </div>

            <div class="info-card">
                <h5>BATAS MASA STUDI : SEMESTER GENAP 2031/2032</h5>
            </div>

            <div class="pengumuman-box">
                <div class="pengumuman-header">
                    Informasi
                </div>
                <table class="pengumuman-table">
                    <tbody>
                        <tr>
                            <td>Pengisian Kartu Rencana Studi (KRS) Semester Genap telah dibuka. Silakan periksa status akademis dan tagihan uang kuliah Anda pada menu yang tersedia.</td>
                        </tr>
                        </tbody>
                </table>
            </div>
            

        </div>

    </div>
@endsection