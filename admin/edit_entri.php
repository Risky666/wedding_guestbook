<?php

// Menghubungkan ke database
include '../config/db.php';

// Mengambil ID dari parameter URL
$id = $_GET['id'];

// Jika form disubmit dengan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menangkap data dari form
    $name = $_POST['name'];
    $msg = $_POST['message'];
    // Melakukan update data pada tabel guestbook_entries berdasarkan ID
    mysqli_query($conn, "UPDATE guestbook_entries SET name='$name', message='$msg' WHERE id=$id");
    // Menampilkan halaman sukses jika update berhasil
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Update Berhasil</title>

        <!--Css-->
        <style>

            /* Styling box sukses */
            body {
                font-family: 'Segoe UI', sans-serif;
                background: #ffffff;
                color: #4b3e2e;
                margin: 0;
                padding: 0;
            }
            .success-box {
                max-width: 600px;
                margin: 100px auto;
                background: #fff;
                padding: 30px;
                border-radius: 12px;
                text-align: center;
                box-shadow: 0 6px 12px rgba(0,0,0,0.05);
                border: 2px solid #f1e1b0;
            }
            .success-box h2 {
                font-size: 24px;
                color: #c2a832;
                margin-bottom: 20px;
            }
            .success-box a {
                display: inline-block;
                margin-top: 20px;
                padding: 12px 24px;
                background-color: #f9f3da;
                color: #5a4b36;
                text-decoration: none;
                border-radius: 10px;
                font-weight: bold;
                transition: background 0.3s;
                border: 1px solid #e3d08a;
            }
            .success-box a:hover {
                background-color: #f5e7b7;
            }
        </style>
    </head>
    <body>
        <div class="success-box">
            <h2>✅ Entri berhasil diperbarui!</h2>
            <a href="data_buku_tamu.php">⬅️ Kembali ke Data Buku Tamu</a>
        </div>
    </body>
    </html>
<?php

} else {
    // Jika belum disubmit, ambil data entri dari database berdasarkan ID
    $q = mysqli_query($conn, "SELECT * FROM guestbook_entries WHERE id=$id");
    $r = mysqli_fetch_assoc($q);//Kode ini mengambil hasil query dari database ($q) dan menyimpannya dalam bentuk array asosiatif ke variabel $r.
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Entri</title>
    <style>
        /* Styling halaman edit entri */
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #ffffff;
            color: #4b3e2e;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #fffbe6;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #f0e6d2;
        }
        header h2 {
            margin: 0;
            font-size: 26px;
            color: #d4af37;
        }
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0,0,0,0.05);
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #e3d08a;
            border-radius: 8px;
            font-size: 16px;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        button {
            background-color: #f5e3a1;
            border: none;
            color: #5a4b36;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s;
            font-weight: bold;
        }
        button:hover {
            background-color: #edd88d;
        }
    </style>
</head>
<body>

    <!-- Judul halaman -->
    <header>
        <h2>✏️ Edit Entri Buku Tamu</h2>
    </header>

    <div class="form-container">
        <form method="post">
            <label>Nama:</label>
            <!-- Input untuk nama, nilainya diisi dari data yang diambil dari database -->
            <input type="text" name="name" value="<?= ($r['name']) ?>" required>
            <label>Pesan:</label>
            <!-- Input untuk pesan, nilainya diisi dari data yang diambil dari database -->
            <textarea name="message" required><?=($r['message']) ?></textarea>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
<?php } ?>
