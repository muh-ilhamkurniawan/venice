<?php
// misalnya, simpan pada file functions.php

function cekLogin() {
    
    include "koneksi.php";

    if (!isset($_SESSION['email'])) {
        header("Location: index.php"); // Redirect ke halaman login jika belum login
        exit();
    }
}
?>
