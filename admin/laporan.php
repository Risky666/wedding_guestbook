<?php 
// Menghubungkan ke file konfigurasi database
include '../config/db.php';

// Melakukan query untuk mengambil semua data dari tabel guestbook_entries
// Kemudian menghitung jumlah total baris (entri) yang ada
$total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM guestbook_entries"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Buku Tamu</title>
    <style>
         /* Mengimpor font dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to right, #fffdf7, #ffffff);
            color: #4b3e2e;
            margin: 0;
            padding: 0;
        }

         /* Bagian atas halaman (judul laporan) */
        header {
            background-color: #ffffff;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 2px solid #f0e6d2;
        }

        header h2 {
            margin: 0;
            font-size: 30px;
            color: #d4af37;
            font-family: 'Great Vibes', cursive;
        }

        /* Kontainer utama isi laporan */
        .content {
            max-width: 600px;
            margin: 60px auto;
            text-align: center;
            background: #fffefc;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.05);
        }
        
          /* Menampilkan jumlah total entri buku tamu */
        .total {
            font-size: 24px;
            margin-bottom: 30px;
            color: #5e4b2b;
            font-weight: 500;
        }

        .total strong {
            font-size: 28px;
            color: #c59d2f;
        }

         /* Tombol kembali ke dashboard */
        .back-link {
            text-decoration: none;
            padding: 12px 26px;
            background-color: #fff8ec;
            border: 1px solid #e5d7b9;
            border-radius: 12px;
            color: #5a4b36;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(212, 175, 55, 0.08);
        }

        .back-link:hover {
            background-color: #fef7e1;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <!-- Judul halaman -->
    <header>
        <h2>📊 Laporan Buku Tamu</h2>
    </header>

    <div class="content">
        <!-- Menampilkan total entri yang sudah dihitung dari database -->
        <div class="total">Total Entri: <strong><?= $total ?></strong></div>
        <a class="back-link" href="index.php">⬅️ Kembali ke Dashboard</a>
    </div>
</body>
</html>
