<?php 
// Memulai session
session_start();

// Menghapus semua data session (logout)
session_destroy();

// Redirect ke halaman login
header("Location: ../auth/login.php"); 
?>
