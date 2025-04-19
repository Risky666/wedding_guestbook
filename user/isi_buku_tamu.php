<?php 
// Menghubungkan ke database
include '../config/db.php';

// Jika form disubmit (metode POST)
if ($_POST) {
    $name = $_POST['name'];  
    $msg = $_POST['message']; 

     // Menyimpan data ke dalam tabel guestbook_entries
    mysqli_query($conn, "INSERT INTO guestbook_entries (name, message) VALUES ('$name', '$msg')");

    // Menampilkan halaman konfirmasi setelah data berhasil dikirim
    echo <<<HTML

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Ucapan Dikirim</title>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
        <style>
             body {
                margin: 0;
                padding: 0;
                font-family: 'Montserrat', sans-serif;
                background: #ffffff;
                color: #333;
                animation: fadeIn 1.2s ease;
            }

            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }

            .box {
                background: #fff;
                padding: 40px;
                border-radius: 18px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.1);
                text-align: center;
                max-width: 500px;
                margin: 0 auto 50px;
                border-top: 5px solid #b39565;
                animation: fadeIn 1.5s ease;
            }

            h2 {
                font-family: 'Great Vibes', cursive;
                color: #b39565;
                font-size: 36px;
                margin-bottom: 10px;
            }

            p {
                color: #6b3a4a;
                font-size: 16px;
            }

            a {
                display: inline-block;
                margin-top: 20px;
                padding: 12px 24px;
                background-color: #f9f9f9;
                color: #444;
                text-decoration: none;
                border-radius: 14px;
                font-weight: 500;
                transition: all 0.3s ease-in-out;
                font-size: 18px;
            }

            a:hover {
                background: #fffdf9;
                transform: translateY(-3px);
                box-shadow: 0 6px 12px rgba(0,0,0,0.08);
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h2>💌 Ucapan Dikirim!</h2>
            <p>Terima kasih telah memberi ucapan untuk Nadilluv & ChiefRR 💖</p>
            <a href="index.php">⬅️ Kembali ke Dashboard</a>
        </div>
    </body>
    </html>
    HTML;
} else {
     // Jika belum disubmit, tampilkan form untuk mengisi buku tamu
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Isi Buku Tamu</title>

    <!--mengambil resource css dari googleapis-->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
   
    <!--Css-->
   <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background: #ffffff;
            color: #333;
            animation: fadeIn 1.2s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-box {
            background: #fff;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto 50px;
            border-top: 5px solid #cba135; /* Gold */
            animation: fadeIn 1.5s ease;
        }

        h2 {
            text-align: center;
            color: #cba135; /* Gold */
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
            margin-bottom: 30px;
        }

        label {
            font-weight: 600;
            color: #6b3a4a;
            font-size: 18px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #eaeaea;
            font-size: 16px;
            background-color: #fafafa;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #cba135; /* Gold */
            outline: none;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        button {
            background-color: #f9f9f9;
            border: none;
            color: #444;
            padding: 14px 30px;
            font-size: 16px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #cba135; /* Gold */
            color: #fff;
        }
    </style>

</head>

<body>
    <div class="form-box">
        <form method="post">
            <h2>Isi Buku Tamu</h2>
            <label>Nama:</label>
            <input type="text" name="name" required>
            <label>Ucapan:</label>
            <textarea name="message" required></textarea>
            <button type="submit">Kirim Ucapan</button>
        </form>
    </div>
</body>
</html>
<?php } ?>
