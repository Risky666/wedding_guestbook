<?php
//Memulai sesi untuk menyimpan informasi login user
session_start();

//Menghubungkan ke file konfigurasi database
include '../config/db.php';

// Mengambil data username dan password dari form login dengan menggunakan metode POST
$user = $_POST['username'];
$pass = $_POST['password'];

// Menjalankan query untuk mencari user dengan username dan password yang cocok 
$q = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");

// Mengambil hasil query sebagai array asosiatif
$data = mysqli_fetch_assoc($q);


//jika login berhasil
if ($data) {

    //maka username dan role akan disimpan di $_SESSION
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];
    
    // Cek role user, jika admin arahkan ke dashboard admin
    if ($data['role'] == 'admin') {
        header("Location: ../admin/index.php"); // redirect ke halaman Admin
    } else {
        header("Location: ../user/index.php");// redirect ke halaman User
    }
    exit; // Memastikan tidak melanjutkan eksekusi setelah redirect

} else {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Gagal</title> 

    <!-- Styling untuk tampilan halaman ketika gagal login -->
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #ffffff, #fef9f1); /* latar putih krem */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .error-box {
            background: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 420px;
            border: 1px solid #e6c200;
        }
        h2 {
            color: #b8860b;
            margin-bottom: 20px;
            font-size: 26px;
        }
        p {
            color: #5c4d2f;
            font-size: 16px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #f9d976;
            color: #5c4d2f;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s;
        }
        a:hover {
            background-color: #f0c236;
        }
    </style>
</head>
<body>
    <div class="error-box">
        <h2>❌ Login Gagal</h2>
        <p>Username atau password salah.<br>Silakan coba lagi.</p>
        <a href="login.php">🔁 Kembali ke Login</a>  <!-- ketika di klik akan ke redirect ke halaman login -->
    </div>
</body>
</html>
<?php } ?>
