<?php
// Lakukan koneksi ke database
include "koneksi.php";

// Ambil data yang dikirimkan melalui formulir registrasi
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

// Cek apakah email sudah terdaftar
$queryCekEmail = "SELECT * FROM user WHERE email = '$email'";
$resultCekEmail = $conn->query($queryCekEmail);

if ($resultCekEmail->num_rows > 0) {
    // Jika email sudah terdaftar, berikan pesan kesalahan
    echo "<script>alert('Email sudah terdaftar. Silakan gunakan email lain atau login jika sudah punya akun.');</script>";
    echo "<script>window.location.href='registrasi.php';</script>";
} else {
    // Jika email belum terdaftar, lakukan registrasi
    $queryRegistrasi = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$password')";
    
    if ($conn->query($queryRegistrasi) === TRUE) {
        // Registrasi sukses, beri pesan ke pengguna
        echo "<script>alert('Registrasi berhasil. Silakan login dengan akun baru Anda.');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        // Registrasi gagal, berikan pesan kesalahan
        echo "<script>alert('Error: " . $queryRegistrasi . "<br>" . $conn->error . "');</script>";
        echo "<script>window.location.href='registrasi.php';</script>";
    }
}

// Tutup koneksi ke database
$conn->close();
?>
