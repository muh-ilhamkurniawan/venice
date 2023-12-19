<?php
    // Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "dbj_venice";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>