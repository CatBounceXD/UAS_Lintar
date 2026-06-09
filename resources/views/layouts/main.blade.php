<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik LINTAR</title>
    <style>

        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #e9ecef; }

        .header-container { margin-bottom: 20px; }
        .logo-box { margin-bottom: 0px; padding-left: 5px; }
        .logo-box img { height: 75px; }

        .red-banner {
            background-color: #b30000;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 10px 10px 0 0;
            font-size: 14px;
            font-weight: bold;
            text-align: right;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .main-wrapper {
            display: flex;
            align-items: flex-start; 
            gap: 20px; 
        }

        .sidebar { 
            width: 250px; 
            background-color: #ffffff; 
            color: #333; 
            padding: 15px; 
            box-sizing: border-box; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
        }
        .sidebar h3 { 
            background-color: #2c3e50; 
            color: #ffffff; 
            text-align: center; 
            padding: 10px; 
            margin: -15px -15px 15px -15px; 
            border-radius: 10px 10px 0 0; 
            font-size: 15px;
        }
        .sidebar ul { list-style: none; padding: 0; margin: 0; }
        .sidebar ul li a, .sidebar summary {
            display: block; 
            color: #333; 
            text-decoration: none;
            font-size: 13px; 
            padding: 4px 10px; 
            margin-bottom: 2px; 
            cursor: pointer;
            font-weight: bold;
        }
        .sidebar ul li a:hover, .sidebar summary:hover {
            color: #b30000; 
            background-color: #f4f4f4;
            border-radius: 4px;
        }
        .sidebar summary { outline: none; }

        .submenu { padding-left: 15px !important; margin-bottom: 5px; }
        .submenu li a { font-size: 12px; font-weight: normal; }
        
        .content { 
            flex: 1; 
            background-color: #ffffff; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            min-height: 50vh; 
        }
    </style>
</head>
<body>

    <div class="header-container">
        <div class="logo-box">
            <img src="{{ asset('images/logo_untar.png') }}" alt="Logo UNTAR">
        </div>
        
        <div class="red-banner">
            LINTAR MAHASISWA
        </div>
    </div>

    <div class="main-wrapper">
        
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

    </div>

</body>
</html>