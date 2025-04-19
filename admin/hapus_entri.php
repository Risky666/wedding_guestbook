<?php

// Menghubungkan ke file konfigurasi database
include '../config/db.php';

// Mengambil nilai 'id' dari URL menggunakan metode GET
$id = $_GET['id'];

// Menjalankan query untuk menghapus data di tabel guestbook_entries berdasarkan id
mysqli_query($conn, "DELETE FROM guestbook_entries WHERE id=$id");

// Setelah data dihapus, pengguna diarahkan kembali ke halaman data buku tam
header("Location: data_buku_tamu.php");
?>