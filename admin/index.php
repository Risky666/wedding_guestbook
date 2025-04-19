<?php
// Memulai sesi untuk menyimpan data login admin
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <!-- Judul yang muncul  tab browser -->
    <title>Dashboard Admin - Buku Tamu Pernikahan</title>
    
     <!-- Css -->
    <style>

        /* Mengimpor font dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap');
        
           /* Styling utama untuk seluruh body halaman */
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to right, #fffdf7, #ffffff);
            color: #4b3e2e;
            margin: 0;
            padding: 0;
        }

         /* judul di atas halaman */
        header {
            background-color: #ffffff;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 2px solid #f0e6d2;
        }
        
         /* font wedding style */
        header h2 {
            margin: 0;
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
            color: #d4af37;
        }

         /* Container utama untuk menu navigasi */
        .container {
            padding: 50px 20px;
            max-width: 600px;
            margin: auto;
            text-align: center;
        }

        /* Styling untuk setiap tautan menu */
        a {
            display: block;
            margin: 18px auto;
            padding: 14px 28px;
            width: 80%;
            text-decoration: none;
            font-size: 18px;
            background: #fffaf3;
            color: #5a4b36;
            border: 1px solid #e5d7b9;
            border-radius: 14px;
            box-shadow: 0 4px 10px rgba(212, 175, 55, 0.1);
            transition: all 0.3s ease-in-out;
            font-weight: 500;
        }

        /* Efek hover untuk tombol menu */
        a:hover {
            background: #fff5e6;
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(212, 175, 55, 0.2);
        }
    </style>

</head>

<body>
    <!-- Bagian atas halaman -->
    <header>
        <h2>Dashboard Admin</h2>
    </header>

     <!-- Kontainer isi menu admin -->
    <div class="container">
         <!-- Tautan ke halaman untuk melihat semua entri tamu -->
        <a href='data_buku_tamu.php'>📄 Lihat Semua Entri</a>

          <!-- Tautan ke halaman laporan -->
        <a href='laporan.php'>📊 Laporan</a>

          <!-- Tautan ke halaman logout -->
        <a href='logout.php'>🔓 Logout</a>
    </div>
</body>
</html>
