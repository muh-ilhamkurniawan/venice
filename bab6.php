<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>
        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">
            Persentase Untung, Persentase rugi, Menentukan Harga Penjualan dan Harga Pembelian Jika Persentase Untung atau Rugi Diketahui
        </h2>
        <div>
            <h4>1. Persentase Untung</h4>
            <span>
                Persentase dari untung didapatkan penjual ketika harga jual lebih besar nilainya dari harga beli sedangkan persentase kerugian disebakan karena harga beli lebih besar dari harga jual.13Adapun rumus untuk mengetahui persentase untung adalah sebagai berikut:
            </span>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Persentase untung = untung / harga pembelian x 100%
            </h5>
            <h4>Contoh :</h4>
            <p>
                Syifa membeli 2 kg Garam seharga Rp.30.000, kemudian garam tersebut dijual kembali seharga Rp.40.000, berapakah persentase keuntungan Syifa?
            </p>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>Harga beli</td>
                    <td>=</td>
                    <td>Rp 30.000,00</td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td>=</td>
                    <td>Rp 40.000,00</td>
                </tr>
                <tr>
                    <td>Untung</td>
                    <td>=</td>
                    <td>Harga Jual – harga beli</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 40.000 – Rp 30.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 10.000</td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
                <tr>
                    <td>Persen keuntungan (%)</td>
                    <td>=</td>
                    <td>Untung / Harga Beli x 100%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp 10.000 / Rp 30.000 x 100%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>33,33%</td>
                </tr>
            </table>
            <span>
            <span>
                Jadi persentase Keuntungan syifa sebesar 33,33%
            </span>
        </div>
        <div>
            <h4>2. Persentase Rugi</h4>
            <p>
                Persentase rugi disebabkan karena harga beli lebih besar dari harga jual. Adapun rumus persentase rugi adalah sebagai berikut:
            </p>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Persentase rugi = rugi / harga pembelian x 100%
            </h5>
            <h4>Contoh :</h4>
            <p>
            Pak Biruni membeli sebuah kulkas baru dengan harga Rp.4.500.000, karena pak Biruni sedang membutuhkan uang jadi pak Biruni menjual kulkas tersebut dengan harga Rp. 4.000.000, Tentukan persentase kerugian pak Biruni?
            </p>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>Harga beli</td>
                    <td>=</td>
                    <td>Rp.4.500.000</td>
                </tr>
                <tr>
                    <td>Harga jual</td>
                    <td>=</td>
                    <td>Rp 4.000.000 × 50 </td>
                </tr>
                <tr>
                    <td>Rugi</td>
                    <td>=</td>
                    <td>Harga beli − Harga Jual</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp.4.500.000 − Rp. 4.000.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 500.000</td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
                <tr>
                    <td>Persentase kerugian</td>
                    <td>=</td>
                    <td>Rugi / Harga beli x 100%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 500.000 / Rp.4.500.000 x 100%</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>11,11%</td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
            </table>
            <span>
            <span>
                Jadi persentase kerugiannya adalah 11,11%.
            </span>
        </div>
        <div>
            <h4>3. Menentukan Harga Penjualan dan Harga Pembelian Jika Persentase Untung atau Rugi Diketahui</h4>
            <p>
                Harga beli dan jual setelah ditambahkan persentase untung dan rugi adalah sebagai berikut:
            </p>
            <div class="mb-3 p-2 bg-secondary">
                <h5 class="text-white ">
                    Jika Persen untung diketahui:
                </h5>
                <h5 class="text-white ">
                    Penjualan = harga beli + (Persen untung × harga beli)
                </h5>
            </div>
            <div class="p-2 bg-secondary">
                <h5 class="text-white ">
                    Jika persen rugi diketahui:
                </h5>
                <h5 class="text-white ">
                    Penjualan = harga beli − (Persen rugi × harga beli)
                </h5>
            </div>
        </div>
    </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>