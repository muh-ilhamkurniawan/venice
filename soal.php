<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>
<?php
// Ambil hasil skor dari parameter query
$resultMessage = isset($_GET['resultMessage']) ? $_GET['resultMessage'] : '';
?>

<div id="content" class="p-4 p-md-5 pt-5">
    <form action="proses_kuis.php" id="quizForm" method="post">
        <div alt="soal1">
            <h4>No. 1</h4>
            <p>
                Bruto satu karung beras adalah 50 kg, jika taranya 0,4% maka neto satu karung beras tersebut adalah...
            </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="a" required>
                <label class="form-check-label">
                    (A) 46,8 kg
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="b" required>
                <label class="form-check-label">
                    (B) 47,8 kg
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="c" required>
                <label class="form-check-label">
                    (C) 48,8 kg
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="d" required>
                <label class="form-check-label">
                    (D) 49,8 kg
                </label>
            </div>
        </div>

        <div alt="soal2">
            <h4>No. 2</h4>
            <p>
                Pak Dedi membeli sepeda motor bekas dengan harga Rp5.000.000,00. Dalam waktu satu minggu motor tersebut dijual kembali dengan harga 110% dari harga belinya. Keuntungan Pak Dedi adalah...
            </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="a" required>
                <label class="form-check-label">
                    (A) Rp500.000,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="b" required>
                <label class="form-check-label">
                    (B) Rp1.000.000,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="c" required>
                <label class="form-check-label">
                    (C) Rp4.500.000,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="d" required>
                <label class="form-check-label">
                    (D) Rp5.500.000,00
                </label>
            </div>
        </div>

        <div alt="soal3">
            <h4>No. 3</h4>
            <p>
                Farid meminjam uang di bank sebesar Rp15.000.000,00 dengan bunga 16% pertahun. Maka bunga yang harus ditanggung oleh Farid selama 3 bulan adalah...
            </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="a" required>
                <label class="form-check-label">
                    (A) Rp300.000,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="b" required>
                <label class="form-check-label">
                    (B) Rp400.000,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="c" required>
                <label class="form-check-label">
                    (C) Rp500.000,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="d" required>
                <label class="form-check-label">
                    (D) Rp600.000,00
                </label>
            </div>
        </div>

        <div alt="soal4">
            <h4>No. 4</h4>
            <p>
                Seorang pedagang membeli 5 kg jeruk dengan harga Rp75.000,00 dan dijual lagi dengan keuntungan 15%, maka harga jual satu kilogram jeruk tersebut adalah...
            </p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="a" required>
                <label class="form-check-label">
                    (A) Rp15.250,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="b" required>
                <label class="form-check-label">
                    (B) Rp16.250,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="c" required>
                <label class="form-check-label">
                    (C) Rp17.250,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="d" required>
                <label class="form-check-label">
                    (D) Rp18.250,00
                </label>
            </div>
        </div>

        <div alt="soal5">
    <h4>No. 5</h4>
    <p>
        Ibu mendapat pesanan kue bolu sebanyak 30 loyang. Untuk membuatnya, ibu membeli bahan pokok untuk kue bolu dengan harga Rp350.000,00. Jika ibu menetapkan harga Rp20.000,00 per loyangnya, maka ibu akan memperoleh keuntungan sebanyak Rp150.000,00.
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q5" value="a" required>
        <label class="form-check-label">
            (A)Rp150.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q5" value="b" required>
        <label class="form-check-label">
            (B)Rp200.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q5" value="c" required>
        <label class="form-check-label">
            (C)Rp250.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q5" value="d" required>
        <label class="form-check-label">
            (D)Rp300.000,00
        </label>
    </div>
</div>

<div alt="soal6">
    <h4>No. 6</h4>
    <p>
        Kondisi berikut yang menunjukkan kondisi rugi adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q6" value="a" required>
        <label class="form-check-label">
            (A)Pemasukan Rp1.700.000,00 dan Pengeluaran Rp1.900.000,00.
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q6" value="b" required>
        <label class="form-check-label">
            (B)Pemasukan Rp1.100.000,00 dan Pengeluaran Rp1.100.000,00.
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q6" value="c" required>
        <label class="form-check-label">
            (C)Pemasukan Rp2.700.000,00 dan Pengeluaran Rp2.000.000,00.
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q6" value="d" required>
        <label class="form-check-label">
            (D)Pemasukan Rp1.700.000,00 dan Pengeluaran Rp1.650.000,00.
        </label>
    </div>
</div>

<div alt="soal7">
    <h4>No. 7</h4>
    <p>
        Perhatikan tabel berikut ini!
    </p>
    <table class="table">
        <tr>
            <td>Toko A</td>
            <td>Toko B</td>
            <td>Toko C</td>
            <td>Toko D</td>
        </tr>
        <tr>
            <td>Harga Rp250.000,00</td>
            <td>Harga Rp220.000,00</td>
            <td>Harga Rp260.000,00</td>
            <td>Harga Rp250.000,00</td>
        </tr>
        <tr>
            <td>Diskon 25%</td>
            <td>Diskon 15%</td>
            <td>Diskon 28%</td>
            <td>Cashback Rp80.000</td>
        </tr>
    </table>
    <p>
        Dari tabel di atas toko yang menjual dengan harga yang lebih murah adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q7" value="a" required>
        <label class="form-check-label">
            (A)Toko A
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q7" value="b" required>
        <label class="form-check-label">
            (B)Toko B
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q7" value="c" required>
        <label class="form-check-label">
            (C)Toko C
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q7" value="d" required>
        <label class="form-check-label">
            (D)Toko D
        </label>
    </div>
</div>

<div alt="soal8">
    <h4>No. 8</h4>
    <p>
        Pak Budi menjual sepeda dengan harga Rp1.200.000,00. Jika Pak Budi mengalami kerugian 20%, maka harga pembelian sepeda adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q8" value="a" required>
        <label class="form-check-label">
            (A) Rp1.280.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q8" value="b" required>
        <label class="form-check-label">
            (B) Rp1.400.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q8" value="c" required>
        <label class="form-check-label">
            (C) Rp1.500.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q8" value="d" required>
        <label class="form-check-label">
            (D) Rp1.640.000,00
        </label>
    </div>
</div>

<div alt="soal9">
    <h4>No. 9</h4>
    <p>
        Pedagang membeli 150 <em>kg</em> beras dengan harga Rp 750.000,00. Jika pedagang menginginkan untung 15%, harga penjualan tiap <em>kg</em> adalah:
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q9" value="a" required>
        <label class="form-check-label">
            (A) Rp6.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q9" value="b" required>
        <label class="form-check-label">
            (B) Rp5.750,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q9" value="c" required>
        <label class="form-check-label">
            (C) Rp5.500,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q9" value="d" required>
        <label class="form-check-label">
            (D) Rp4.500,00
        </label>
    </div>
</div>

<div alt="soal10">
    <h4>No. 10</h4>
    <p>
        Pemilik sebuah toko mendapat kiriman 100 karung beras Bulog, yang masing-masing pada karungnya tertera tulisan bruto 114 kg, tara 2 kg. Neto kiriman yang diterima pemilik toko adalah:
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q10" value="a" required>
        <label class="form-check-label">
            (A) 200 kuintal
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q10" value="b" required>
        <label class="form-check-label">
            (B) 166 kuintal
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q10" value="c" required>
        <label class="form-check-label">
            (C) 114 kuintal
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q10" value="d" required>
        <label class="form-check-label">
            (D) 112 kuintal
        </label>
    </div>
</div>

<div alt="soal11">
    <h4>No. 11</h4>
    <p>
        Misalkan <em>y</em> merupakan bilangan positif. Jika <em>y</em> ditambahkan sebanyak 30% dari nilai awalnya, kemudian dikurangi 40% dari nilai setelah penambahan, maka <em>y</em> = ...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q11" value="a" required>
        <label class="form-check-label">
            (A) Mengalami pengurangan sebesar 18% dari nilai awal.
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q11" value="b" required>
        <label class="form-check-label">
            (B) Mengalami pengurangan sebesar 22% dari nilai awal.
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q11" value="c" required>
        <label class="form-check-label">
            (C) Mengalami pengurangan sebesar 48% dari nilai awal.
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q11" value="d" required>
        <label class="form-check-label">
            (D) Mengalami pengurangan sebesar 10% dari nilai awal.
        </label>
    </div>
</div>

<div alt="soal12">
    <h4>No. 12</h4>
    <p>
        Pak Balugu memesan buah apel dari grosir untuk dijual kembali sebanyak 500 buah dengan harga @Rp5.000,00 per buah. Selain itu, dikenakan biaya pengiriman sebesar 2% dari total harga pembelian. Setelah itu, ia menjual 300 apel dengan harga @Rp5.700,00 per buah. Agar ia mendapatkan keuntungan sebesar 20% dari total biaya pembelian apel, maka Pak Balugu harus menjual sisa apel yang belum terjual dengan harga...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q12" value="a" required>
        <label class="form-check-label">
            (A) Rp6.750,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q12" value="b" required>
        <label class="form-check-label">
            (B) Rp6.450,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q12" value="c" required>
        <label class="form-check-label">
            (C) Rp6.150,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q12" value="d" required>
        <label class="form-check-label">
            (D) Rp5.850,00
        </label>
    </div>
</div>

<div alt="soal13">
    <h4>No. 13</h4>
    <p>
        Ada empat toko menjual jenis barang yang sama. Daftar harga barang dan diskon seperti pada tabel.
    </p>
    <img src="soal13.jpg" alt="">
    <p>
        Ali akan membeli sebuah baju dan celana di toko yang sama. Di toko manakah Ali berbelanja agar diperoleh harga yang paling murah.
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q13" value="a" required>
        <label class="form-check-label">
            (A) Toko Rame
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q13" value="b" required>
        <label class="form-check-label">
            (B) Toko Damai
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q13" value="c" required>
        <label class="form-check-label">
            (C) Toko Seneng
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q13" value="d" required>
        <label class="form-check-label">
            (D) Toko Indah
        </label>
    </div>
</div>

<div alt="soal14">
    <h4>No. 14</h4>
    <p>
        Apif membeli sepatu dengan harga Rp329.000,00, kemudian sepatu itu dijual kepada saudaranya dan mengalami kerugian 2%. Harga penjualan sepatu adalah...
    </p>
    <div

 class="form-check">
        <input class="form-check-input" type="radio" name="q14" value="a" required>
        <label class="form-check-label">
            (A) Rp322.420,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q14" value="b" required>
        <label class="form-check-label">
            (B) Rp329.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q14" value="c" required>
        <label class="form-check-label">
            (C) Rp335.580,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q14" value="d" required>
        <label class="form-check-label">
            (D) Rp345.420,00
        </label>
    </div>
</div>

<div alt="soal15">
    <h4>No. 15</h4>
    <p>
        Toko elektronik "CINTA PRODUK INDONESIA" menjual televisi dan memperoleh keuntungan 25%. Jika harga beli televisi tersebut Rp3.600.000,00, maka harga jualnya adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q15" value="a" required>
        <label class="form-check-label">
            (A) Rp3.800.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q15" value="b" required>
        <label class="form-check-label">
            (B) Rp4.000.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q15" value="c" required>
        <label class="form-check-label">
            (C) Rp4.250.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q15" value="d" required>
        <label class="form-check-label">
            (D) Rp4.500.000,00
        </label>
    </div>
</div>

<div alt="soal16">
    <h4>No. 16</h4>
    <p>
        Pak Nur menjual telepon genggam seharga Rp2.250.000,00 dan mengalami kerugian sebesar 10%. Harga beli telepon genggam tersebut adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q16" value="a" required>
        <label class="form-check-label">
            (A) Rp475.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q16" value="b" required>
        <label class="form-check-label">
            (B) Rp2.350.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q16" value="c" required>
        <label class="form-check-label">
            (C) Rp2.500.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q16" value="d" required>
        <label class="form-check-label">
            (D) Rp2.625.000,00
        </label>
    </div>
</div>

<div alt="soal17">
    <h4>No. 17</h4>
    <p>
        Setelah 9 bulan, uang tabungan Susi di koperasi berjumlah Rp3.815.000,00. Koperasi memberi jasa simpanan berupa bunga 12% pertahun. Tabungan awal Susi di koperasi adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q17" value="a" required>
        <label class="form-check-label">
            (A) Rp3.500.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q17" value="b" required>
        <label class="form-check-label">
            (B) Rp3.550.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q17" value="c" required>
        <label class="form-check-label">
            (C) Rp3.600.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q17" value="d" required>
        <label class="form-check-label">
            (D) Rp3.650.000,00
        </label>
    </div>
</div>

<div alt="soal18">
    <h4>No. 18</h4>
    <p>
        Seseorang meminjam uang di koperasi sebesar Rp 6.000.000,00 dan diangsur selama 12 bulan dengan bunga 1,5% per bulan. Besar angsuran tiap bulan adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q18" value="a" required>
        <label class="form-check-label">
            (A) Rp507.500,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q18" value="b" required>
        <label class="form-check-label">
            (B) Rp590.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q18" value="c" required>
        <label class="form-check-label">
            (C) Rp640.000,00
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q18" value="d" required>
        <label class="form-check-label">
            (D) Rp650.000,00
        </label>
    </div>
</div>

<div alt="soal19">
    <h4>No. 19</h4>
    <p>
        Seorang pedagang membeli 3 lusin buku dengan harga Rp 64.800,00. Dua lusin buku terjual dengan harga Rp 2.500,00 per buah dan 1 lusin buku dengan harga Rp 1.750,00 per buah. Persentase keuntungan yang diperoleh pedagang itu adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q19" value="a" required>
        <label class="form-check-label">
            (A) 20%
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q19" value="b" required>
        <label class="form-check-label">
            (B) 22,5%
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q19" value="c" required>
        <label class="form-check-label">
            (C) 25%
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q19" value="d" required>
        <label class="form-check-label">
            (D) 30%
        </label>
    </div>
</div>

<div alt="soal20">
    <h4>No. 20</h4>
    <p>
        Toni menabung di bank dengan besar tabungan awal Rp 1.200.000,00, suku bunga tabungan 9% per tahun. Ketika ia mengambil seluruh uang tabungannya, jumlah tabungan Toni menjadi sebesar Rp 1.281.000,00. Lama Toni menabung adalah...
    </p>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q20" value="a" required>
        <label class="form-check-label">
            (A) 6 bulan
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q20" value="b" required>
        <label class="form-check-label">
            (B) 8 bulan
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q20" value="c" required>
        <label class="form-check-label">
            (C) 9 bulan
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="q20" value="d" required>
        <label class="form-check-label">
            (D) 10 bulan
        </label>
    </div>
</div>


        <!-- Tambahkan pertanyaan dan opsi jawaban untuk pertanyaan lainnya -->

        <input type="submit" value="Submit" class="btn btn-primary font-weight-bold text-black">
    </form>
<script>
    document.getElementById("quizForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah formulir dikirim secara otomatis

        // Menampilkan alert dengan hasil
        var hasilKuis = confirm("Apakah Anda yakin ingin mengirim jawaban?");
        if (hasilKuis) {
            // Jika pengguna mengonfirmasi, formulir dikirim
            this.submit();
        } else {
            // Jika pengguna membatalkan, tidak ada tindakan tambahan yang diambil
        }
    });
</script>
<?php if ($resultMessage): ?>
        <script>
            alert("<?php echo $resultMessage; ?>");
        </script>
    <?php endif; ?>

</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>