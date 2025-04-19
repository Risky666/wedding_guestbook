<?php

// Memulai sesi pengguna
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard User</title>
    <style>
        /* Mengimpor font dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap');

         /* Style umum untuk tampilan */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to right, #fffdf7, #ffffff);
            color: #4b3e2e;
            animation: fadeIn 1.2s ease;
        }

        /* Efek animasi fade in saat halaman dimuat */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

          /* Header bagian atas halaman */
        header {
            background-color: #ffffff;
            padding: 40px 20px 20px;
            text-align: center;
            border-bottom: 2px solid #f0e6d2;
            position: relative;
        }

          /* Judul utama dengan animasi slide down */
        header h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            color: #d4af37;
            margin: 0;
            animation: slideDown 1s ease-in-out;
        }

        @keyframes slideDown {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

         /* Menu navigasi utama */
        .menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 60px;
        }

        .menu a {
            text-decoration: none;
            background: #fffefb;
            color: #5a4b36;
            padding: 15px 30px;
            margin: 12px;
            border-radius: 14px;
            border: 1px solid #e5d7b9;
            font-size: 18px;
            font-weight: 500;
            width: 260px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(212, 175, 55, 0.1);
            transition: all 0.3s ease-in-out;
        }

        /* Efek hover pada tombol menu */
        .menu a:hover {
            background: #fffaf0;
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(212, 175, 55, 0.2);
        }
        
        /* Footer halaman */
        footer {
            margin-top: 60px;
            text-align: center;
            color: #aa9872;
            font-size: 13px;
            padding-bottom: 20px;
        }

        .line {
            width: 100px;
            height: 2px;
            background: #d4af37;
            margin: 20px auto;
        }

         /* Subjudul di bawah header */
        .subtitle {
            font-size: 16px;
            color: #a0895a;
            margin-top: 5px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<!-- Bagian header dengan judul dan subjudul -->
<header>
    <h1>Happy Wedding Nadilluv &amp;&amp; ChiefRR</h1>
    <div class="line"></div>
    <div class="subtitle">Bahagia Selalu</div>
</header>

<!-- Menu navigasi dashboard user -->
<div class="menu">
    <a href="isi_buku_tamu.php">📝 Isi Buku Tamu</a>
    <a href="entri.php">📖 Lihat Entri</a>
    <a href="logout.php">🔓 Logout</a>
</div>

<!-- Footer dengan tahun dinamis -->
<footer>
    &copy; <?= date('Y') ?> Made with 💛 for a beautiful wedding day
</footer>

</body>
</html>
