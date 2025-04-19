<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "guestbook_db";

// Koneksi database
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>