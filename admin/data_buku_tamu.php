<?php

// Menghubungkan ke database melalui file konfigurasi
include '../config/db.php';

// Menjalankan query untuk mengambil semua data dari tabel guestbook_entries
$q = mysqli_query($conn, "SELECT * FROM guestbook_entries");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku Tamu</title>

    <!--Css-->
    <style>
        /* Mengimpor font dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap');

        /* Styling dasar halaman */
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(to right, #fffdf7, #ffffff);
            color: #4b3e2e;
            margin: 0;
            padding: 0;
        }
        /* Header bagian atas */
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
        
        /* Container utama */
        .container {
            padding: 40px 20px;
            max-width: 1000px;
            margin: auto;
        }

        /* Styling untuk tabel data */
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fffefc;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #f2e6d6;
            text-align: left;
        }

        th {
            background-color: #f7f2e8;
            color: #7b613f;
            font-weight: 600;
        }

        tr:hover {
            background-color: #fff8ec;
        }

        .aksi a {
            margin-right: 8px;
            text-decoration: none;
            color: #a87c3f;
            font-weight: 600;
        }

        .aksi a:hover {
            text-decoration: underline;
        }


        /* Tautan kembali */
        .back-link {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            padding: 12px 24px;
            background: #fff8ec;
            border: 1px solid #e5d7b9;
            border-radius: 12px;
            color: #5a4b36;
            transition: all 0.3s ease;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(212, 175, 55, 0.08);
        }

        .back-link:hover {
            background: #fef7e1;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <header>
        <h2>📄 Semua Entri Buku Tamu</h2>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>Nama</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>

            <!-- Perulangan untuk menampilkan setiap data entri dari database -->
            <?php while ($r = mysqli_fetch_assoc($q)) { ?>

            <tr>
                <td><?= ($r['name']) ?></td>
                 <!-- Menampilkan pesan tamu dengan newline menjadi <br> -->
                <td><?= nl2br(($r['message'])) ?></td>
                
                <!-- Tautan aksi edit dan hapus -->
                <td class="aksi">
                    <a href='edit_entri.php?id=<?= $r['id'] ?>'>✏️ Edit</a>
                    <a href='hapus_entri.php?id=<?= $r['id'] ?>'>🗑️ Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>

        <!-- Tautan untuk kembali ke halaman dashboard admin -->
        <a class="back-link" href='index.php'>⬅️ Kembali ke Dashboard</a>
    </div>
</body>
</html>
