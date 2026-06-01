<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik LINTAR</title>
    <style>
        /* 1. Latar Belakang Layar (Abu-abu terang agar kotak putih terlihat menonjol) */
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 20px; /* Jarak dari tepi layar */
            background-color: #e9ecef; /* Warna abu-abu */
            display: flex; 
            align-items: flex-start; /* RAHASIA 1: Mencegah sidebar memanjang full ke bawah layar */
            gap: 20px; /* Jarak antara Sidebar Kiri dan Konten Kanan */
        }
        
        /* 2. CSS untuk Kotak Sidebar Kiri */
        .sidebar { 
            width: 250px; 
            background-color: #ffffff; /* Warna putih */
            color: #333; /* Teks gelap */
            padding: 15px; 
            box-sizing: border-box; 
            border-radius: 10px; /* RAHASIA 2: Sudut membulat (Rounded Rectangle) */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Bayangan agar kotak terlihat 3D/mengambang */
        }

        /* Kepala Sidebar (Warna gelap seperti desain LINTAR) */
        .sidebar h3 { 
            background-color: #2c3e50; 
            color: #ffffff; 
            text-align: center; 
            padding: 10px; 
            margin: -15px -15px 15px -15px; /* Menempelkan background ke pojok atas */
            border-radius: 10px 10px 0 0; /* Membulatkan pojok atasnya saja */
            font-size: 15px;
        }

        /* 3. Desain Menu & Spasi (Dibuat sangat rapat) */
        .sidebar ul { list-style: none; padding: 0; margin: 0; }
        
        .sidebar ul li a, .sidebar summary {
            display: block; 
            color: #333; 
            text-decoration: none;
            font-size: 13px; /* Font dikecilkan sedikit */
            padding: 4px 10px; /* RAHASIA 3: Padding dikecilkan agar jarak tulisan rapat */
            margin-bottom: 2px; /* Margin ditipiskan */
            cursor: pointer;
            font-weight: bold;
        }

        /* Warna saat mouse digeser ke menu */
        .sidebar ul li a:hover, .sidebar summary:hover {
            color: #800000; /* Berubah jadi merah khas untar */
            background-color: #f4f4f4;
            border-radius: 4px;
        }
        .sidebar summary { outline: none; }

        /* Anak Menu (Submenu) */
        .submenu {
            padding-left: 15px !important; /* Maju sedikit ke dalam */
            margin-bottom: 5px;
        }
        .submenu li a {
            font-size: 12px;
            font-weight: normal;
        }
        
        /* 4. CSS untuk Kotak Konten Kanan (Memperbaiki layar yang 'Full Putih') */
        .content { 
            flex: 1; 
            background-color: #ffffff; /* Kotak konten diberi warna putih sendiri */
            padding: 20px; 
            border-radius: 10px; /* Membulat juga */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Diberi bayangan juga */
            min-height: 50vh; /* Tinggi minimal agar tidak terlalu kempes saat kosong */
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>MENU UTAMA</h3>
        <ul>
            <li><a href="/">🔗 Halaman Utama</a></li>
            
            <li>
                <details class="menu-folder">
                    <summary>📂 Perkuliahan</summary>
                    <ul class="submenu">
                        <li><a href="/rps">🔗 RPS</a></li>
                        <li><a href="/bahan-ajar">🔗 Bahan Ajar</a></li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="menu-folder">
                    <summary>📂 Layanan Mahasiswa</summary>
                    <ul class="submenu">
                        <li><a href="/surat-keterangan">🔗 Surat Keterangan</a></li>
                        <li><a href="/surat-permohonan">🔗 Surat Permohonan</a></li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="menu-folder">
                    <summary>📂 Cuti Online</summary>
                    <ul class="submenu">
                        <li><a href="/ajuan-cuti">📄 Ajuan Cuti</a></li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="menu-folder">
                    <summary>📂 Perpustakaan</summary>
                    <ul class="submenu">
                        <li><a href="/buku">🔗 Katalog Buku</a></li>
                        <li><a href="/skripsi">🔗 Katalog Skripsi</a></li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="menu-folder">
                    <summary>📂 Biodata</summary>
                    <ul class="submenu">
                        <li><a href="/biodata">🔗 Biodata</a></li>
                        <li><a href="/lengkapdata">🔗 Lengkapi Data</a></li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="menu-folder">
                    <summary>📂 Uang Kuliah</summary>
                    <ul class="submenu">
                        <li><a href="/dispensasi-bpp">🔗 Dispensasi BPP</a></li>
                        <li><a href="/dispensasi-sks">🔗 Dispensasi SKS</a></li>
                        <li><a href="/uang-kuliah">🔗 Uang Kuliah</a></li>
                        <li><a href="/tagihan-pembayaran">🔗 Tagihan Pembayaran</a></li>
                    </ul>
                </details>
            </li>

            <li>
                <details class="menu-folder">
                    <summary>📂 MBKM</summary>
                    <ul class="submenu">
                        <li><a href="/mbkm">🔗 Laporan MBKM</a></li>
                    </ul>
                </details>
            </li>

        </ul>
    </div>

    <div class="content">
        @yield('page')
    </div>

</body>
</html>