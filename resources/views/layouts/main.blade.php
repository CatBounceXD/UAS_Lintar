<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik LINTAR</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; display: flex; }
        /* CSS untuk Sidebar Kiri */
        .sidebar { width: 250px; background-color: #2c3e50; color: white; min-height: 100vh; padding: 20px; box-sizing: border-box; }
        .sidebar h3 { color: #f1c40f; text-align: center; border-bottom: 1px solid #555; padding-bottom: 10px; }
        .sidebar ul { list-style: none; padding: 0; }
        .sidebar ul li { margin: 15px 0; }
        .sidebar ul li a { color: white; text-decoration: none; font-size: 14px; }
        .sidebar ul li a:hover { color: #f1c40f; }
        
        /* CSS untuk Konten Kanan */
        .content { flex: 1; padding: 20px; background-color: white; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>MENU UTAMA</h3>
        <ul>
            <li><a href="#">🏠 Halaman Utama</a></li>
            <li><br><b>📂 Perkuliahan</b></li>
            <li><a href="/rps">📄 RPS</a></li>
            <li><a href="/bahan-ajar">📚 Bahan Ajar</a></li>
        </ul>
    </div>

    <div class="content">
        @yield('page')
    </div>

</body>
</html>