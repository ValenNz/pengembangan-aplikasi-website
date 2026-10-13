<?php
// Menampilkan Variabel dan Konstanta
$nama = "Andi";
define("GAJI", 50000000);
echo $nama;
echo "<br>";
echo GAJI;

echo "<br><br>";

// Memanggil variabel dalam string
$nama = "Andi";
echo "<p>Selamat pagi $nama</p>";

echo "<br><br>";

// Menghapus Variabel
$nama = "Andi";
echo $nama;
unset($nama);
echo "<br>";
echo $nama; // Tidak akan tampil karena sudah di-unset
?>