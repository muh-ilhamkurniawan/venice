<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Nilai Keseluruhan, Nilai Per-Unit, dan Nilai Sebagian</h2>
        <ol>
            <li>Nilai Keseluruhan</li>
            <span>
                Nilai keseluruhan merupakan nilai total dari semua unit yang ada. 
            </span>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Nilai keseluruhan = banyak unit × nilai per unit
            </h5>
            <li>Nilai per-unit</li>
            <span>
                Nilai per-unit adalah nilai per satu satuan dari barang atau produk.
            </span>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
            Nilai per unit = Nilai keseluruhan / Banyak unit
            </h5>
            <li>Nilai sebagian</li>
            <span>
                Nilai sebagian adalah nilai barang dalam suatu bagian tertentu. Nilai keseluruhan dapat dihitung jika nilai per unit diketahui.
            </span>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-50">
                Nilai sebagian = banyak sebagian unit × nilai
            </h5>
        </ol>
        <h4>Contoh :</h4>
        <p>
            Pak Ali menjual satu kotak pena di toko miliknya seharga Rp 15.000,. Ternyata, dalam satu kotak terdapat 12 buah pensil. Seseorang membeli sebuah pensil dan pemilik toko menjualnya dengan harga Rp. 1.250,- per buah. Dalam hal ini, harga satu kotak pensil = Rp. 15.000,- disebut nilai keseluruhan, sedangkan harga satu pensil = Rp. 1.250,- disebut nilai per unit.
        </p>
    </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>