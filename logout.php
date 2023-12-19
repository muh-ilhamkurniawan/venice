<?php
session_start();

// Hapus nilai session email saat logout
unset($_SESSION['email']);

// Redirect ke halaman utama setelah logout
header("Location: index.php");
?>
