<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Untung dan Rugi</h2>
        <div>
            <h4>1. Laba atau Untung</h4>
            <span>
                    Laba atau untung adalah selisih positif antara hasil penjualan dikurangi dengan biaya dan pajak. Rumus dalam mendapatkan keuntungan adalah sebagai berikut:
                </span>
                <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                    Untung = Harga Jual – Harga Beli
                </h5>
            <h4>Contoh :</h4>
            <p>
                Pak Hafidz mempunyai mainan di pasar gaya baru, ditoko tersebut menjual macam-macam mainan seperti, boneka, mobil-mobilan, holahop, dan masih banyak lagi. Kebetulan dihari rabu Pak Hafidz restok kembali mainan boneka dikarenakan ditoko miliknya sudah banyak yang laku. Lalu dihari yang sama pak Hafidz memborong boneka dari pabrik seharga 𝑅𝑝 45.000,00 per boneka. Setelah itu boneka yang pak Hafidz beli dijual kembali di toko mainan miliknya seharga 𝑅𝑝 60.000,00 per boneka. 
            </p>
            <span>
                Berapakah laba yang Pak Hafidz dapat untuk penjualan setiap bonekanya? 
            </span>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>Beli</td>
                    <td>=</td>
                    <td>Rp 45.000,00</td>
                </tr>
                <tr>
                    <td>Harga jual</td>
                    <td>=</td>
                    <td>Rp 60.000,00</td>
                </tr>
                <tr>
                    <td>Laba</td>
                    <td>=</td>
                    <td>Harga Jual – Harga Beli</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 60.000 – Rp 45.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 15.000,00</td>
                </tr>
            </table>
            <span>
            <span>
                Jadi, laba yang diperoleh Pak Hafidz sebesar Rp 15.000,00 per boneka.
            </span>
        </div>
        <div>
            <h4>2. Rugi</h4>
            <span>
                Kerugian adalah selisih dari harga penjualan dengan pembelian jika harga penjualan kurang dari harga pembelian. Rumus dalam mencari nilai rugi adalah sebagai berikut:
                </span>
                <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                    Rugi = Harga Beli – Harga Jual
                </h5>
            <h4>Contoh :</h4>
            <p>
                Aan membeli 50 roti tawar seharga Rp 25.000 perbungkus dan dan akan menjual kembali seharga Rp 28.000 perbungkus. Tapi besoknya ada 10 roti tersebut yang berjamur. Berapa kerugian Aan?
            </p>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>Harga beli</td>
                    <td>=</td>
                    <td>harga perbungkus × jumlah banyak bungkus</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 25.000 × 50 </td>
                </tr>
                <tr>
                    <td ></td>
                    <td>=</td>
                    <td>Rp 1.250.000 </td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
                <tr>
                    <td>Banyaknya roti yang bisa dijual</td>
                    <td>=</td>
                    <td>50 − 10</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
                <tr>
                    <td>Harga jual</td>
                    <td>=</td>
                    <td>harga jual perbungkus × jumlah banyak bungkus</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 28.000 × 40 </td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 1.125.000 </td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
                <tr>
                    <td>Kerugian</td>
                    <td>=</td>
                    <td>Harga Beli – Harga Jual</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 1.250.000 – Rp 1.120.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 130.000 </td>
                </tr>
            </table>
            <span>
            <span>
                Jadi, kerugian yang dialami oleh Pak Aan adalah Rp.130.000
            </span>
        </div>
    </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>