<?php
    include "navbar.php";
?>
	<div id="content" class="p-4 p-md-5 pt-5">
    <div class="text-center">
            <h1 class="mb-4">Ilmu Deduktif</h1>
        </div>
        <h2 class="mb-4">Ilmu Deduktif Contoh-1</h2>
        <span>
            Contoh 1
        </span>
        <p>
            Bilangan ganjil ditambah bilangan ganjil adalah bilangan genap. <br>
            Misalnya kita ambil beberapa buah bilangan ganjil, baik ganjil positif, atau ganjil negatif yaitu 1, 3, -5, 7. 
        </p>
        <img src="post2-2.png" alt="" class="w-25">
        <p>
            Dari tabel di atas, terlihat bahwa untuk setiap dua bilangan ganjil jika dijumlahkan hasilnya selalu genap. Dalam matematika, hasil di atas belum dianggap sebagai suatu generalisasi, walaupun anak membuat contoh-contoh dengan bilangan yang lebih banyak lagi. Pembuktian dengan cara induktif ini harus dibuktikan lagi dengan cara deduktif.
        </p>

        <p>
            Pembuktian secara deduktif sebagai berikut:
            <br>Misalkan: a dan b adalah sembarang bilangan bulat, maka 2a bilangan genap dan 2b bilangan genap, maka 2a + 1 bilangan ganjil dan 2b + 1 bilangan ganjil.
        </p>

        <p>
            Jika dijumlahkan:
            <br>(2a + 1) + (2b + 1) = 2a + 2b + 2 = 2 (a + b + 1)
        </p>

        <p>
            Karena a dan b bilangan bulat, maka (a + b + 1) juga bilangan bulat, sehingga 2 (a + b + 1) adalah bilangan genap.
            <br>Jadi, bilangan ganjil + bilangan ganjil = bilangan genap (generalisasi).
        </p>
		<table class="mx-auto text-center">
			<tr>
				<td colspan='3'>Halaman</td>
			</tr>
			<tr>
				<td><a href="post2-1.php">1</a></td>
				<td><a href="post2-2.php">2</a></td>
				<td><a href="post2-3.php">3</a></td>
			</tr>
		</table>
    </div>

<?php
    include "bottom.php";
?>
