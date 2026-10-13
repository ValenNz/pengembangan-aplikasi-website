<?php
// Membuat dan Memanggil Function
function salam() {
    echo "<p>Selamat Pagi</p>";
}
salam();
salam();
salam();

echo "<br/><br/>";

// Argumen Function
function salam2($nama) {
    echo "<p>Selamat Pagi, $nama<p>";
}
salam2("Andi");
salam2("Jojo");
salam2("Indonesia");
salam2("Dunia...");

echo "<br/><br/>";

// Multiple Argumen
function salam3($waktu, $nama) {
    echo "<p>Selamat $waktu, $nama</p>";
}
salam3("Malam", "Andi");
salam3("Siang", "Jojo");
salam3("Pagi", "Indonesia...");

echo "<br/><br/>";

// Pemanggilan Argumen
function salam4($waktu, $nama) {
    echo "<p>Selamat $waktu, $nama!</p>";
}
$event = "Belajar PHP";
$user = "Andi";
salam4($event, $user);

echo "<br/><br/>";

// Return Value
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}
$a = tambah(6, 10);
echo $a;

echo "<br/><br/>";

// Default Argumen
function salam5($waktu = "Malam", $nama = "Anton") {
    echo "<p>Selamat $waktu, $nama</p>";
}
salam5();
salam5("Pagi");
salam5("Datang", "Pak Presiden!");

echo "<br/><br/>";

// Anonymous Function
$salam = function() {
    return "Selamat Siang";
};
echo $salam();

echo "<br/><br/>";

// Arrow Function (PHP 7.4+)
$salam = fn() => "Selamat Siang";
echo $salam();
?>