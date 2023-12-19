<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Bunga Tunggal dan Pajak</h2>
        <div>
            <h4>1. Bunga Tunggal</h4>
            <p>Bunga adalah nilai pakai modal yang diinvestasikan di bank untuk jangka waktu tertentu, dan bunga biasanya dihitung setiap tahun. Bunga tunggal adalah bunga yang sama atau tidak berubah selama setiap periode. Bunga dapat dirumuskan sebagai berikut:</p>
            <h5 class="mx-auto p-2 bg-secondary text-white w-100">
                Bunga dalam 1 tahun = Persen bunga × Modal <br>Bunga dalam n bulan = n/12 x Persen bunga × Modal
            </h5>
            <h4>Contoh 1 :</h4>
            <p>
                Khafid menyimpan uang dibank sebesar Rp. 2.500.000 dengan suku bunga 15% setahun dengan bunga tunggal:
            </p>
            <ol type="a">
                <li>Besarnya bunga pada akhir bulan?</li>
                <li>Besar bunga akhir bulan ke lima?</li>
                <li>Bunga 2 tahun?</li>
            </ol>
            <h4>Penyelesaian :</h4>
            <table>
                <tr>
                    <td>a. Besarnya bunga akhir bulan</td>
                    <td>=</td>
                    <td>1/12 x 15/100 x 2.500.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>15/120 x 2.500.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>37.500.000/120</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 312.500</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>b. Besar bunga akhir bulan ke lima</td>
                    <td>=</td>
                    <td>5/12 x 15/100 x 2.500.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>75/120 x 2.500.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>187.500.000/120</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 1.562.500</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>c. Bunga 2 tahun</td>
                    <td>=</td>
                    <td>2 x 15/120 x 2.500.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>75.000.000/120</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 62.500</td>
                </tr>
            </table>
            <h4>Contoh 2 :</h4>
            <p>
                Najwa menginvestasikan uang hasil kerja kerasnya sejumlah Rp. 3.000.000.000 menjadi tabungan dalam perbankan Bank Bukopin. Jika Najwa berencana mengambil tabungannya setelah 3 tahun sedangkan Bank Bukopin memberikan bunga sebesar 10% tiap tahun, berapakah uang yang akan diterima Najwa setelah 3 tahun?
            </p>
            <h4>Penyelesaian :</h4>
            <span>
                Diketahui : <br> 
                Uang Investasi (M) = Rp. 3.000.000.000 <br> 
                Bunga Bank (𝑖) = 10% <br>
                Tahun Menabung (𝑡) = 3 Tahun <br>
                Ditanya: <br>
                Uang yang diterima setelah 3 tahun (𝑀𝑎) = ⋯ ? <br>
                Jawab
            </span>
            <table>
                <tr>
                    <td>B</td>
                    <td>=</td>
                    <td>𝑀 × 𝑡 × 𝑖</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>3.000.000.000 × 3 × 10/100</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>900.000.000</td>
                </tr>
                <tr>
                    <td>𝑀𝑎</td>
                    <td>=</td>
                    <td>M + B</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>3.000.000.000 + 900.000.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 3.900.000.000</td>
                </tr>
            </table>
            <span>
                Saldo yang akan diterima Najwa dalam besarnya bunga tunggak adalah sebesar Rp.3.900.000.000.
            </span>
        </div>
        <div>
            <h4>2. Pajak</h4>
            <p>
                Pajak merupakan kewajiban dasar warga negara untuk memberikan sebagian kekayaannya kepada negara sesuai dengan peraturan pemerintah.
            </p>
            <p>
                Ada beberapa jenis pajak, antara lain pajak penghasilan (PPh), pajak bumi dan bangunan (PBB), dan pajak pertambahan nilai (PPN). Untuk menghitung pajak penghasilan (PPh) , gunakan rumus berikut:
            </p>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-100">
                Pajak Penghasilan (PPh) : <br>
                PPh = Persentase PPh × Penghasilan Kena Pajak
            </h5>
            <p>
                Untuk menghitung Pajak Pertambahan Nilai (PPn) menggunakan rumus sebagai berikut.
            </p>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-100">
                Pajak Pertambahan Nilai (PPn) : <br> 
                PPn = Persentase PPn × harga suatu jenis barang
            </h5>
            <h4>Contoh :</h4>
            <p>
                Nazifa kerja disuatu perusahaan dengan gaji Rp.2.400.000 sebulan, lalu penghasilan kena pajak Rp. 200.000, jika pajak penghasilan (PPh) diketahui 10%. Berapa besarkah penghasilan yang diterima Nazifa perbulan?
            </p>
            <h4>Penyelesaian :</h4>
            <span>
                Besar gaji Rp.2.400.000 <br>
                Penghasilan tidak kena pajak = Rp.200.000 <br>
                PPh =10% <br>
                Penyelesaian
            </span>
            <table>
                <tr>
                    <td>Besar penghasilan kena pajak</td>
                    <td>=</td>
                    <td>Besar gaji–Penghasilan tidak kena pajak</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp.2.400.000 - Rp.200.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 2.200.000</td>
                </tr>
                <tr>
                    <td>Besar pajak penghasilan</td>
                    <td>=</td>
                    <td>10% × penghasilan kena pajak</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>10%× Rp. 2.200.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>10/100 × Rp. 2.200.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 2.200.000 / 100</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td> Rp. 220.000</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Gaji yang diterima</td>
                    <td>=</td>
                    <td>besar gaji – besar pajak penghasilan</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 2.400.000 -Rp.220.000</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>Rp. 2.180.000</td>
                </tr>
            </table>
            <span>
            Jadi besar gaji yang diterima Nazifa perbulan adalah Rp 2.180.000
            </span>
        </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>