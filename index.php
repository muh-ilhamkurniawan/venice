<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $user = $_SESSION['nama'];

    // Tambahkan koneksi ke database dan query SQL
    include "koneksi.php";
    $query = "SELECT * FROM nilai WHERE user_name = '$email'";
    $result = $conn->query($query);

    // Tampilkan pesan selamat datang dan tabel jika query berhasil
    if ($result->num_rows > 0) {
        include "sidebar.php";
        echo '<div id="content" class="p-4 p-md-5 pt-5">';
        echo "<h2 class='mb-4'>Selamat Datang $user!</h2>";
        echo "<p>Di bawah ini adalah hasil dari Latihan Soal yang sudah kamu kerjakan.</p>";
        echo "<table class='table table-striped table-bordered'>
                <tr>
                    
                    <th>Waktu</th>
                    <th>Jumlah Benar</th>
                    <th>Nilai</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            $nilai = $row['score'] * 5;
            echo "<tr>
                    
                    <td>{$row['time']}</td>
                    <td>{$row['score']}/20</td>
                    <td>{$nilai}</td>
                </tr>";
        }

        echo "</table>";
        echo '</div>';
        echo '</div>';
        echo '<script src="js/jquery.min.js"></script>';
        echo '<script src="js/popper.js"></script>';
        echo '<script src="js/bootstrap.min.js"></script>';
        echo '<script src="js/main.js"></script>';
        echo '</body></html>';
    } else {
        include "sidebar.php";
        echo '<div id="content" class="p-4 p-md-5 pt-5">';
        echo "<h2 class='mb-4'>Selamat Datang $user!</h2>";
        echo "<p>Anda belum pernah mengerjakan Latihan Soal. Silahkan Kerjakan Latihan Soal!</p>";
        echo '</div>';
        echo '</div>';
        echo '<script src="js/jquery.min.js"></script>';
        echo '<script src="js/popper.js"></script>';
        echo '<script src="js/bootstrap.min.js"></script>';
        echo '<script src="js/main.js"></script>';
        echo '</body></html>';
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    // Jika belum login, tampilkan form login
    echo "
<!doctype html>
<html lang='en'>
  <head>
  	<title>VENICE</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900' rel='stylesheet'>
		
		<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel='stylesheet' href='css/style.css'>
  </head>
  <body>
  <div id='content' class='p-4 p-md-5 pt-5 w-50 mx-auto'>
  <div class='text-center'>
    <h2 class='mb-4 mx-auto'>Login</h2>
  </div>
    <form action='login.php' method='post'>
        <div class='form-group'>
            <label for='exampleInputEmail1'>Email address</label>
            <input type='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email' name='email'>
        </div>
        <div class='form-group'>
            <label for='exampleInputPassword1'>Password</label>
            <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password' name='password'>
        </div>
        <p>Belum punya akun? <a href='registrasi.php'>Daftar</a></p>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
    </div>
    <script src='js/jquery.min.js'></script>
    <script src='js/popper.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/main.js'></script>
    </body></html>
    ";
}
?>
