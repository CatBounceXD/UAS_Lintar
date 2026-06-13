@extends('layouts.main')

@section('page')
    <style>
        .welcome-banner { 
            background-color: #2c3e50; 
            color: white; 
            padding: 30px 20px; 
            border-radius: 8px; 
            text-align: center; 
            margin-bottom: 25px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .welcome-banner h2 { margin-top: 0; font-size: 24px; margin-bottom: 10px; }
        .welcome-banner p { margin: 0; font-size: 15px; color: #dcdde1; }
        
        .info-cards { display: flex; gap: 20px; }
        .card { 
            flex: 1; 
            background: #ffffff; 
            padding: 20px; 
            border: 1px solid #e0e0e0; 
            border-top: 4px solid #b30000; /* Garis merah UNTAR di atas kartu */
            border-radius: 8px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .card h4 { color: #333; margin-top: 0; margin-bottom: 10px; font-size: 16px; }
        .card p { color: #666; font-size: 13px; line-height: 1.5; margin: 0; }
    </style>

    <div class="welcome-banner">
        <h2>Selamat Datang di LINTAR MAHASISWA</h2>
        <p>Sistem Informasi Akademik Terpadu Universitas Tarumanagara</p>
    </div>

    <div class="info-cards">
        <div class="card">
            <h4>🎓 Pengumuman Akademik</h4>
            <p>Pastikan Anda selalu mengecek jadwal perkuliahan, batas waktu pengisian KRS, dan informasi akademik lainnya melalui menu di sebelah kiri.</p>
        </div>
        <div class="card">
            <h4>💳 Status Keuangan</h4>
            <p>Cek menu Uang Kuliah untuk melihat rincian tagihan, skema pembayaran, dan pengajuan dispensasi semester berjalan.</p>
        </div>
        <div class="card">
            <h4>🛡️ Pembaruan Data</h4>
            <p>Mohon pastikan Biodata dan Informasi Pribadi Anda selalu dalam keadaan mutakhir untuk keperluan administrasi kampus.</p>
        </div>
    </div>
@endsection