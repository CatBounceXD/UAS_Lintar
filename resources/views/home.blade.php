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
            padding: 10px 0px;
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
            grid-template-columns: 1.3fr 0.7fr; /* Membagi layar kiri dan kanan */
            gap: 20px;
        }

        /* FORMAT BARU: Pembungkus kolom agar susunan kotak menumpuk rapat ke bawah */
        .left-sub-column, .right-sub-column {
            display: flex;
            flex-direction: column;
            gap: 15px; /* Menentukan jarak rapat antar kotak internal */
        }

        /* Kotak Info PKKMB & Masa Studi (Kiri) */
        .info-card {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-left: 4px solid #333; 
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
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

        .info-card2 {
            background-color: #fdb8b8;
            border: 1px solid #cccccc;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .info-card2 p {
            margin: 0;
            font-size: 14px;
            color: #222222;
            line-height: 1.5;
        }

        /* Kotak Pengumuman & Informasi (Kanan) */
        .pengumuman-box {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .pengumuman-header { 
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
            padding: 12px 10px;
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
            
            <div class="left-sub-column">
                
                <div class="info-card">
                    <h5>Informasi PKKMB Tahun 2025</h5>
                    <p>Status Kelulusan: <span style="color: green; font-weight: bold;">LULUS</span><br>
                    Informasi Pengenalan Kehidupan Kampus Mahasiswa baru 2025 (PKKMB) yang akan dilaksanakan pada tanggal 13 -15 Agustus 2025 dan 17 Agustus 2025.</p>
                </div>

                <div class="info-card">
                    <h5>BATAS MASA STUDI : SEMESTER GENAP 2031/2032</h5>
                </div>

                <div class="info-card2">
                    <p><strong>Username WIFI</strong> Anda adalah : <strong>{{ $user->nim }}</strong></p>
                    <p><strong>Password WIFI</strong> Anda adalah : <strong>******</strong></p><br>
                    <p>Gunakan <strong>Username</strong> dan <strong>Password WIFI</strong> di atas untuk dapat menggunakan WIFI UNTAR</p>
                </div>

            </div>
            

            <div class="right-sub-column">
                
                <div class="pengumuman-box">
                    <div class="pengumuman-header">
                        Pengumuman
                    </div>
                    <table class="pengumuman-table">
                        <tbody>
                            @forelse($pengumuman as $p)
                                <tr>
                                    <td>{{ $p->isi }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="color: #999; font-style: italic;">Tidak ada pengumuman terbaru saat ini.</td>
                                end
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="pengumuman-box">
                    <div class="pengumuman-header">
                        Informasi
                    </div>
                    <table class="pengumuman-table">
                        <tbody>
                            @forelse($informasi as $i)
                                <tr>
                                    <td>{{ $i->isi }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td style="color: #999; font-style: italic;">Tidak ada informasi akademik saat ini.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection