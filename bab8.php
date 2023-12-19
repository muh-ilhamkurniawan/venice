<?php
    include "sidebar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin(); // Panggil fungsi untuk memeriksa login
?>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Hubungan Bruto, Netto dan Tara</h2>
        <span>
            Sekarung gula berisikan sekarung gula putih yang memiliki berat seluruhnya 50 kg, jika berat karung 0,10 kg, maka :
        </span>
        <span>
            Berat sekarung gula = 50 kg – 0,10 kg = 49,9 kg
        </span>
        <span>Berdasarkan penjelasan di atas, diperoleh definisi sebagai berikut:</span>
        <ol type="a">
            <li>Berat gula dan karung adalah 50 kg dinamakan Bruto atau berat kotor.</li>
            <li>Berat gula adalah 49,9 kg dinamakan Netto atau berat bersih.</li>
            <li>Berat karung adalah 0,10 kg dinamakan Tara.</li>
        </ol>
        <div>
            <h4>1. Bruto</h4>
            <span>Bruto adalah berat kotor, berikut rumus dari Bruto:</span>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-100">
                Bruto = Netto + Tara
            </h5>
            <h4>Contoh :</h4>
            <p>
                Kayla membeli sekaleng selai coklat seberat 7.000 gram, setelah itu berat wadah selai coklat itu adalah 500 gram. Berapakah Brutonya?
            </p>
            <h4>Penyelesaian :</h4>
            <span>1 wadah selai coklat = 7.000 gram</span>
            <span>Bruto = 500 gram</span>
            <table>
                <tr>
                    <td>Bruto</td>
                    <td>=</td>
                    <td>Netto + Tara</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>7.000 + 500 </td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>7.500 gram</td>
                </tr>
            </table>
            <span>
            Jadi Bruto 1 wadah selai coklat adalah 7.500 gram.
            </span>
        </div>
        <div>
            <h4>2. Netto</h4>
            <span>Netto adalah berat bersih, berikut rumus dari Netto:</span>
            <h5 class="text-center mx-auto p-2 bg-secondary text-white w-100">
                Netto = Bruto – Tara
            </h5>
            <h4>Contoh :</h4>
            <p>
                Dzaki membeli jagung sebanyak 500 kg. Setelah disimpan selama 6 bulan taranya 2%. Berapakah berat netto jagung setelah 6 bulan?

            </p>
            <h4>Penyelesaian :</h4>
            <span>Berat bruto = 500 kg </span>
            <table>
                <tr>
                    <td>Tara 2%</td>
                    <td>=</td>
                    <td>2/100 x 500 kg</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>10 kg</td>
                </tr>
                <tr>
                    <td>Netto</td>
                    <td>=</td>
                    <td>Bruto - Tara</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>500 - 10 kg</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>490 kg</td>
                </tr>
            </table>
        </div>
        <div>
            <h4>3. Tara</h4>
            <span>Tara adalah potongan berat, berikut rumus dari tara:</span>
            <h5 class="mx-auto p-2 bg-secondary text-white w-100">
                Tara = Bruto – Netto <br>
                Tara = Persentase Tara × Bruto <br>
                Persentase Tara = Tara/Bruto x 100%
            </h5>
            <h4>Contoh :</h4>
            <p>
                Indra membeli 7 kotak tepung beras dengan bruto masing-masing 70 kg dan tara total 7 kotak adalah 1%. Berapakah taranya?
            </p>
            <h4>Penyelesaian :</h4>
            <span>Bruto tiap kotak tepung beras = 70 kg</span>
            <span>Tara 7 kotak tepung beras = 1%</span>
            <table>
                <tr>
                    <td>Bruto total</td>
                    <td>=</td>
                    <td>jumlah kotak× bruto kotak</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>7 x 70 kg</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>490 kg</td>
                </tr>
            </table>
            <span>Tara = persentase tara × bruto</span>
            <table>
                <tr>
                    <td>Tara 1%</td>
                    <td>=</td>
                    <td>1/100 x 490</td>
                </tr>
                <tr>
                    <td></td>
                    <td>=</td>
                    <td>4,9 kg</td>
                </tr>
            </table>
            <span>Jadi tara 1 kaleng tepung beras adalah 4,9 kg</span>
        </div>
    </div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>