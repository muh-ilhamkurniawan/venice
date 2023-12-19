<?php
include "koneksi.php";
session_start();
// Tangkap data dari formulir
$user_name = $_SESSION['email'];
$score = 0;

// Fungsi untuk mendapatkan jawaban benar dari tabel kunci_jawaban
function getCorrectAnswer($questionNo) {
    // Ganti dengan nama tabel dan kolom yang sesuai di database Anda
    global $conn;
    $sql = "SELECT jawaban FROM kunci_jawaban WHERE no = '$questionNo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['jawaban'];
    } else {
        return ''; // Mengembalikan string kosong jika nomor pertanyaan tidak ditemukan
    }
}

// Pengecekan jawaban untuk pertanyaan 1 hingga 5
$questionNo = 1;

while (isset($_POST['q' . $questionNo])) {
    $userAnswer = $_POST['q' . $questionNo];
    $correctAnswer = getCorrectAnswer($questionNo);

    if ($userAnswer == $correctAnswer) {
        $score++;
    }

    $questionNo++;
}

// Simpan skor ke dalam database
$sql = "INSERT INTO nilai (user_name, score, time) VALUES ('$user_name', '$score', CURRENT_TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
    // Ambil skor dari tabel yang baru saja ditambahkan
    $lastInsertedId = $conn->insert_id;
    $nilai = $score*5;
    $resultMessage = "Skor Anda: $nilai";

    // Redirect kembali ke halaman formulir dengan membawa hasil skor sebagai parameter query
    header("Location: soal.php?resultMessage=" . urlencode($resultMessage));
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
?>
