<?php 
// Memulai sesi
session_start(); 

// Menghapus semua data sesi (logout)
session_destroy(); 

// Mengarahkan pengguna kembali ke halaman login
header("Location: ../auth/login.php");
?>
