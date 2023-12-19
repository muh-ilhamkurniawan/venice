<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah user dengan email dan password tertentu sudah terdaftar
    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    // Jika hasil query mengembalikan satu baris, maka user terdaftar
    if ($result->num_rows == 1) {
        // Ambil data pengguna
        $user = $result->fetch_assoc();

        // Simpan email dan nama ke dalam session
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $user['nama'];

        // Redirect ke halaman utama setelah login
        header("Location: index.php");
    } else {
        echo "<script>alert('Login gagal. Email atau password salah.'); window.location = 'index.php';</script>";

    }

    // Tutup koneksi ke database
    $conn->close();
}
?>
