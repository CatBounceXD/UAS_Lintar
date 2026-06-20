@extends('layouts.main')

@section('page')
    <style>
        .dashboard-container {
            display: grid;
            grid-template-columns: 1fr 1.5fr; /* Membagi kolom kiri (40%) dan kanan (60%) */
            gap: 20px;
            font-family: Arial, sans-serif;
            align-items: start;
        }

        /* --- STYLING KOLOM KIRI --- */
        .left-column {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .menu-utama-header {
            background-color: #222222; /* Kotak hitam panjang menu utama */
            color: #ffffff;
            padding: 10px 15px;
            font-weight: bold;
            font-size: 13px;
            text-transform: uppercase;
            border-radius: 4px;
            letter-spacing: 0.5px;
        }

        .profile-box {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .student-name {
            font-size: 18px;
            font-weight: bold;
            color: #b30000; /* Warna merah khas UNTAR */
            margin-bottom: 8px;
        }

        .welcome-text {
            font-size: 13px;
            color: #333333;
            line-height: 1.6;
        }

        .info-card-box {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-left: 4px solid #b30000; /* Aksen merah vertikal di sebelah kiri */
            padding: 15px;
            border-radius: 4px;
        }

        .info-card-box h5 {
            margin-top: 0;
            margin-bottom: 8px;
            font-size: 13px;
            color: #222222;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .info-card-box p {
            margin: 0;
            font-size: 12px;
            color: #555555;
            line-height: 1.5;
        }

        /* --- STYLING KOLOM KANAN --- */
        .right-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .section-box {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .section-box-header {
            background-color: #b30000; /* Bar merah judul tabel */
            color: #ffffff;
            padding: 10px 15px;
            font-weight: bold;
            font-size: 13px;
            text-transform: uppercase;
        }

        .dashboard-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        .dashboard-table th {
            background-color: #f5f5f5;
            color: #333333;
            font-weight: bold;
            text-align: left;
            padding: 10px;
            border-bottom: 2px solid #cccccc;
        }

        .dashboard-table td {
            padding: 10px;
            border-bottom: 1px solid #eeeeee;
            color: #444444;
            line-height: 1.4;
        }

        /* Efek baris belang-belang otomatis sesuai standar kita */
        .dashboard-table tr:nth-child(even) {
            background-color: #fafafa;
        }

        .text-link {
            color: #b30000;
            text-decoration: none;
            font-weight: bold;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .badge-lintar {
            background: #e17055;
            color: white;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 10px;
            font-weight: bold;
        }

        .badge-info {
            background: #0984e3;
            color: white;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 10px;
            font-weight: bold;
        }
    </style>

    <div class="dashboard-container">
        
        <div class="left-column">
            
            <div class="menu-utama-header">
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

            <div class="info-card-box">
                <h5>📋 Informasi PKKMB</h5>
                <p>Status Kelulusan: <span style="color: green; font-weight: bold;">LULUS</span><br>
                Sertifikat kelulusan PKKMB tingkat Universitas dapat divalidasi melalui Biro Kemahasiswaan.</p>
            </div>

            <div class="info-card-box