<?php
// Menghubungkan ke database
include '../config/db.php';

// Mengambil semua data entri dari tabel guestbook_entries, urut berdasarkan waktu terbaru
$q = mysqli_query($conn, "SELECT * FROM guestbook_entries ORDER BY created_at DESC");

// Menampilkan tampilan HTML awal
echo <<<HTML
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ucapan Tamu</title>
    <!--mengambil resource css dari googleapis-->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!--Css-->
    <style>
        /* Style dasar untuk body */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background: #f4f4f4;
            color: #333;
            animation: fadeIn 1.2s ease;
        }

        /* Efek animasi saat halaman dimuat */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

         /* Bagian header */
        header {
            background-color: #fff;
            padding: 20px 20px;
            text-align: center;
            border-bottom: 2px solid #eaeaea;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        header h1 {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            color: #cba135; /* Gold */
            margin: 0;
            animation: slideDown 1s ease-in-out;
        }

        @keyframes slideDown {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        /* Kontainer utama yang berisi ucapan */
        .content {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            overflow-y: auto;
            max-height: 400px; /* Limit the height with scrolling */
        }

        .message-container {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            border-left: 5px solid #cba135; /* Gold accent */
        }

        .message-container p {
            font-size: 18px;
            line-height: 1.6;
            color: #6b3a4a;
            margin-bottom: 15px;
        }

        .message-container b {
            color: #cba135; /* Gold */
        }

        .message-container i {
            font-size: 14px;
            color: #888;
        }

         /* Tombol kembali ke dashboard */
        .back-link {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: inline-block;
            padding: 12px 24px;
            background-color: #f9f9f9;
            color: #444;
            text-decoration: none;
            border-radius: 14px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            z-index: 1000; 
        }

        .back-link:hover {
            background: #fffdf9;
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

         /* Footer halaman */
        footer {
            margin-top: 60px;
            text-align: center;
            color: #888;
            font-size: 13px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>💌 Ucapan Tamu</h1>
    </header>
    
    <!-- Kontainer untuk semua pesan tamu -->
    <div class="content">
HTML;

// Menampilkan semua data entri dari database ke dalam HTML
while ($row = mysqli_fetch_assoc($q)) {
    echo "<div class='message-container'>
            <p><b>{$row['name']}</b>: {$row['message']} <i>({$row['created_at']})</i></p>
          </div>";
}

// Menampilkan penutup HTML
echo <<<HTML
    </div>
    <a href="index.php" class="back-link">🔙 Kembali ke Dashboard</a>
    <footer>
        <p>&copy; 2025 Happy Wedding Nadilluv & ChiefRR</p>
    </footer>
</body>
</html>
HTML;
?>
