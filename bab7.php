<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Diskon atau Rabat</h2>
        <div>
            <p>
                Rabat adalah potongan harga atau lebih dikenal menggunakan kata diskon. Biasanya supermarket menggunakannya buat menarik konsumen datang ke supermarket. misalnya saat menjelang hari besar, hari raya idul fitri misalnya, supermarket yg menggelar diskon buat aneka macam kebutuhan, baik makanan, pakaian, dan lainnya. Dan umumnya potongan (diskon ) ini diperhitungkan menggunakan persen. 
            </p>
            <p>
                Dalam penerapannya masih terdapat disparitas kata antara potongan & bonus. Istilah potongan dipakai sang penghasil pada grosir, agen, atau pengecer. Sedangkan kata bonus dipakai sang grosir, agen, atau pengecer pada konsumen.
            </p>
            <div class="text-center">
                Rabat atau diskon dapat dirumuskan sebagai berikut:
            </div>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Rabat = Persentase diskon × harga sebelum diskon
            </h5>
            <div class="text-center">
                Berikutnya rumus dalam menentukan harga setelah diskon yaitu:
            </div>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Harga setelah diskon = harga sebelum diskon – diskon
            </h5>
            <span>
                Penjual yaitu menyerahkan suatu barang dengan menerima suatu imbalan dari pembeli sesuai dengan barang yang dijual
            </span>
            <h4>Contoh :</h4>
            <p>
                Faiza membeli sebuah gamis seharga Rp.125.000 disebuah toko gamis, dan toko tersebut memberikan diskon sebesar 20%. Berapakah harga yang harus dibayar Faiza?
            </p>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>Harga sebelum diskon</td>
                    <td>=</td>
                    <td>Rp.125.000</td>
                </tr>
                <tr>
                    <td>Potongan Harga</td>
                    <td>=</td>
                    <td>20% × Rp. 125.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp.25.000</td>
                </tr>
                <tr>
                    <td colspan='3'><br></td>
                </tr>
                <tr>
                    <td>Harga setelah diskon</td>
                    <td>=</td>
                    <td>Harga sebelum diskon - Diskon</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 125.000 − Rp.25.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp.100.000</td>
                </tr>
            </table>
        </div>
    </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>