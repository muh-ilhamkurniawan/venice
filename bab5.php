<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Harga Pembelian dan Harga Penjualan</h2>
        <div>
            <h4>1. Harga Pembelian</h4>
            <span>
                Harga pembelian merupakan suatu harga beli oleh pedagang dari grosir atau tempat lain. Berikut rumus harga pembelian saat mengalami keuntungan.
            </span>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Harga Pembelian = Harga Jual + Laba
            </h5>
            <span>
                Pembeli merupakan manusia yang menerima barang dari penjual dengan cara menyerahkan nilai uang sesuai harga yang manusia itu beli.
            </span>
            <h4>Contoh :</h4>
            <p>
                Faida menjual 8 Jilbab seharga Rp.70.000, dari hasil penjualan jilbab mendapatkan keuntungan Rp.20.000, berapakah harga pembelian setiap jilbab?
            </p>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>Harga penjualan</td>
                    <td>=</td>
                    <td>Rp 70.000,00</td>
                </tr>
                <tr>
                    <td>Keuntungan</td>
                    <td>=</td>
                    <td>Rp 20.000,00</td>
                </tr>
                <tr>
                    <td>Harga pembelian</td>
                    <td>=</td>
                    <td>Harga penjualan – Keuntungan</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 70.000 – Rp 20.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 50.000,00</td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
                <tr>
                    <td>Harga Pembelian Setiap jilbab</td>
                    <td>=</td>
                    <td>Rp. 50.000 : 8</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 6.250</td>
                </tr>
            </table>
            <span>
            <span>
                Jadi harga setiap pembelian jilbab adalah Rp.6.250.
            </span>
        </div>
        <div>
            <h4>2. Harga penjualan</h4>
            <p>
                Harga penjualan adalah harga dari barang yang akan dijual. Adanya selisih antara harga pembelian dan penjualan yang dinamakan untung atau rugi. Dalam hal penjualan yaitu penjual menjual barangnya kepada pembelinya
            </p>
            <div class="text-center">
                Berikut rumus harga penjualan saat mengalami keuntungan:
            </div>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Harga Penjualan = Harga Jual + Laba
            </h5>
            <div class="text-center">
                Berikut rumus harga penjualan saat mengalami kerugian:
            </div>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Harga Penjualan = Harga Beli − Rugi
            </h5>
            <span>
                Penjual yaitu menyerahkan suatu barang dengan menerima suatu imbalan dari pembeli sesuai dengan barang yang dijual
            </span>
            <h4>Contoh :</h4>
            <p>
                Suatu hari Pandya membeli sebuah sepeda sebesar Rp.850.000. Setelah terjual, penjual itu mendapatkan keuntungan sebesar Rp.150.000, tentukan harga penjualan sepeda tersebut
            </p>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>Harga pembelian</td>
                    <td>=</td>
                    <td>Rp.850.000</td>
                </tr>
                <tr>
                    <td>Keuntungan</td>
                    <td>=</td>
                    <td>Rp 150.000 × 50 </td>
                </tr>
                <tr>
                    <td>Harga Penjualan</td>
                    <td>=</td>
                    <td>Harga Pembelian + Keuntungan</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp.850.000 + Rp.150.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 1.000.000</td>
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