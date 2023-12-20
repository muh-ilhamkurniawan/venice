<?php
// Dapatkan nama file halaman saat ini
$current_page = basename($_SERVER['PHP_SELF']);

// Fungsi untuk menambahkan kelas "active" jika halaman yang sesuai
function isPageActive($pageNames)
{
    global $current_page;

    $pageArray = explode(',', $pageNames);
    foreach ($pageArray as $page) {
        if (trim($page) == $current_page) {
            echo 'active';
            return;
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>VENICE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>	
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" >
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
            </button>
    </div>
	<div class="p-4">
		<h1><a href="index.php" class="logo">VENICE</a></h1>
        <ul class="list-unstyled components mb-5">
            <li class="<?php isPageActive('index.php'); ?> font-weight-bold font-weight-bold">
            <a href="index.php">Home</a>
            </li>
            <li class="dropdown font-weight-bold <?php isPageActive('bab1.php,bab2.php,bab3.php,bab4.php,bab5.php,bab6.php,bab7.php,bab8.php,bab9.php'); ?>">
                <a href="#" class="dropdown-toggle" data-toggle="collapse" data-target="#materiDropdown" aria-expanded="false">
                    Materi
                </a>
                <ul class="collapse list-unstyled" id="materiDropdown">
                    <li class="<?php isPageActive('bab1.php'); ?> font-weight-bold">
                        <a href="bab1.php">Sejarah Aritmatika Sosial</a>
                    </li>
                    <li class="<?php isPageActive('bab2.php'); ?> font-weight-bold">
                        <a href="bab2.php">Pengertian Aritmatika Sosial</a>
                    </li>
                    <li class="<?php isPageActive('bab3.php'); ?> font-weight-bold">
                    <a href="bab3.php">Nilai Keseluruhan, Nilai Per-Unit, dan Nilai Sebagian</a>
                    </li>
                    <li class="<?php isPageActive('bab4.php'); ?> font-weight-bold">
                    <a href="bab4.php">Untung dan Rugi</a>
                    </li>
                    <li class="<?php isPageActive('bab5.php'); ?> font-weight-bold">
                    <a href="bab5.php">Harga Pembelian dan Harga Penjualan</a>
                    </li>
                    <li class="<?php isPageActive('bab6.php'); ?> font-weight-bold">
                    <a href="bab6.php"> Persentase Untung dan Persentase rugi</a>
                    </li>
                    <li class="<?php isPageActive('bab7.php'); ?> font-weight-bold">
                    <a href="bab7.php">Diskon atau Rabat</a>
                    </li>
                    <li class="<?php isPageActive('bab8.php'); ?> font-weight-bold">
                    <a href="bab8.php">Hubungan Bruto, Netto dan Tara</a>
                    </li>
                    <li class="<?php isPageActive('bab9.php'); ?> font-weight-bold">
                    <a href="bab9.php">Bunga Tunggal dan Pajak</a>
                    </li>
                    <!-- Tambahkan tautan materi lainnya di sini -->
                </ul>
            </li>
            
            <li class="<?php isPageActive('soal.php'); ?> font-weight-bold">
            <a href="soal.php">Latihan Soal</a>
            </li>
            <li class="<?php isPageActive('pembahasan.php'); ?> font-weight-bold">
            <a href="pembahasan.php">Pembahasan</a>
            </li>
            <li>
                <a href="BUKU_PERPUS.pdf" target="_blank" rel="noopener noreferrer">
                    <button class="btn btn-light font-weight-bold text-black w-100" type="button">
                    Download Materi
                </button></a>
            </li>
            <li>
                <a href="blog" rel="noopener noreferrer">
                    <button class="btn btn-light font-weight-bold text-black w-100" type="button">
                    Blog
                </button></a>
            </li>
            <li>
                <a href="logout.php" rel="noopener noreferrer">
                    <button class="btn btn-danger font-weight-bold text-black w-100" type="button">
                    Log Out
                </button></a>
            </li>
        </ul>
        <div class="mb-5">
            <h3 class="h6 mb-3">About Us</h3>
            
                Anggi Juniarti <br>
                Della Kuncaningrum <br>
                Falerinda Mardaningtyas <br>
                Ridho Dwi Saputra
            
        </div>
        <div class="footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a> -->
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
	</div>
    	</nav>