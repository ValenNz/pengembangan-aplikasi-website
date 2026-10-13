# 🐘 Praktikum Pemrograman Aplikasi Web (PAW)
## Modul 4: Pengenalan PHP Tingkat Dasar

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![VS Code](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white)

**Program Studi S1 Sistem Informasi**  
**Telkom University Surabaya**  
**Tahun Ajaran 2026**

</div>

---

## 📋 Daftar Isi

- [📖 Deskripsi](#-deskripsi)
- [🎯 Tujuan Pembelajaran](#-tujuan-pembelajaran)
- [🛠️ Tools yang Digunakan](#️-tools-yang-digunakan)
- [📁 Struktur Folder](#-struktur-folder)
- [📘 Materi Praktikum](#-materi-praktikum)
- [📝 Tugas Praktikum](#-tugas-praktikum)
- [🚀 Cara Menjalankan](#-cara-menjalankan)
- [📦 Pengumpulan Tugas](#-pengumpulan-tugas)
- [👨‍🏫 Penyusun](#-penyusun)

---

## 📖 Deskripsi

Praktikum Modul 4 ini membahas pengenalan **PHP (Hypertext Preprocessor)** sebagai bahasa pemrograman **server-side scripting** utama dalam pengembangan aplikasi web dinamis. Mahasiswa akan mempelajari cara membuat halaman web yang interaktif dengan PHP, mulai dari setup environment, sintaks dasar, hingga function.

Praktikum ini mencakup:
- **Setup Environment** — Instalasi dan konfigurasi XAMPP
- **Sintaks Dasar PHP** — Hello World, PHP dalam HTML, aturan dasar
- **Variabel & Konstanta** — Deklarasi, penggunaan, dan scope
- **Tipe Data** — Integer, Float, String, Boolean, Array, Object, Null
- **Operator** — Aritmatika, Perbandingan, String, Array
- **Struktur Kontrol** — If, Switch, For, While, Foreach
- **Function** — User Defined Function dan PHP Built-in Function

---

## 🎯 Tujuan Pembelajaran

Setelah mengikuti praktikum ini, mahasiswa diharapkan mampu:
- ✅ Menginstal dan mengkonfigurasi **XAMPP** (Apache, MySQL, PHP).
- ✅ Memahami perbedaan **client-side** (HTML/CSS/JS) dan **server-side** (PHP).
- ✅ Menulis sintaks dasar PHP dan mengintegrasikannya dengan HTML.
- ✅ Mendeklarasikan **variabel** dan **konstanta** di PHP.
- ✅ Menguasai **tipe data** PHP (Integer, Float, String, Boolean, Array, Object, Null).
- ✅ Menerapkan berbagai **operator** (aritmatika, perbandingan, string, array).
- ✅ Mengimplementasikan **struktur kontrol** (if, switch, for, while, foreach).
- ✅ Membuat **User Defined Function** dengan parameter dan return value.
- ✅ Menggunakan **PHP Built-in Function** (String, Number, Array).
- ✅ Menjalankan file PHP melalui **localhost** dengan XAMPP.

---

## 🛠️ Tools yang Digunakan

| Tool | Deskripsi | Link Download |
|------|-----------|---------------|
| 🖥️ **Visual Studio Code** | Code Editor utama | [Download](https://code.visualstudio.com/download) |
| 🌐 **XAMPP** | Web Server (Apache + MySQL + PHP) | [Download](https://www.apachefriends.org/download.html) |
| 🚀 **Laragon** (Alternatif) | Web Server alternatif yang lebih ringan | [Download](https://laragon.org/download/) |
| 🎯 **FlyEnv** (Alternatif) | Web Server modern multi-platform | [Download](https://www.flyenv.com/) |
| 🗄️ **phpMyAdmin** | GUI untuk MySQL (termasuk di XAMPP) | [localhost/phpmyadmin](http://localhost/phpmyadmin) |

---

## 📁 Struktur Folder

```
modul-4-pengenalan-php-dasar/
│
├── 📄 hello.php                    # Hello World PHP
├── 📄 html_php.php                 # PHP di dalam HTML
├── 📄 basic.php                    # Aturan Dasar PHP
├── 📄 variable_const.php           # Variabel dan Konstanta
├── 📄 data_type.php                # Tipe Data
├── 📄 operator.php                 # Operator
├── 📄 control_structure.php        # Struktur Kontrol
├── 📄 user_defined_function.php    # User Defined Function
├── 📄 php_function.php             # PHP Built-in Function
│
├── 📄 README.md                    # Dokumentasi repository
└── 📄 index.php                    # Halaman utama (opsional)
```

---

## 📘 Materi Praktikum

### 1️⃣ Setup XAMPP
**Langkah Instalasi:**
1. Download XAMPP dari [apachefriends.org](https://www.apachefriends.org/download.html)
2. Install XAMPP di komputer Anda
3. Buka **XAMPP Control Panel**
4. Jalankan service **Apache** dan **MySQL**
5. Akses dashboard XAMPP: `http://localhost`
6. Akses PHP Info: `http://localhost/dashboard/phpinfo.php`
7. Akses phpMyAdmin: `http://localhost/phpmyadmin`

**Struktur Folder XAMPP:**
```
C:\xampp\htdocs\           # Windows
/Applications/XAMPP/htdocs/ # macOS
/opt/lampp/htdocs/         # Linux
```

💡 **Tips**: Buat folder baru di `htdocs` untuk menyimpan semua file PHP praktikum Anda.

### 2️⃣ Hello World
File: `hello.php`
```php
<?php
echo "Hello World";
?>
```

**Cara Menjalankan:**
```
http://localhost/nama-folder/hello.php
```

### 3️⃣ PHP di dalam HTML
File: `html_php.php`
```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <p>Teks ini hanyalah kode HTML sederhana</p>
    <?php echo "<p>Saya berasal dari PHP</p>"; ?>
    <p>Saya berasal dari HTML</p>
    <?php echo "<p>Saya juga berasal dari PHP</p>"; ?>
</body>
</html>
```

### 4️⃣ Aturan Dasar PHP
File: `basic.php`

**Aturan Penting:**
- ✅ **Case-insensitive** untuk keyword PHP (`echo`, `ECHO`, `EcHo` sama saja)
- ❌ **Case-sensitive** untuk variabel (`$nama` ≠ `$Nama`)
- ✅ Setiap statement diakhiri dengan **semicolon** (`;`)
- ✅ Komentar: `//` (single line) atau `/* */` (multi-line)

**Contoh:**
```php
<?php
// Standard
echo "<p>Kalimat ini berasal dari Standard PHP tag</p>";

// Case Insensitive
echo "<p>Hello World</p>";
ECHO "<p>Hello World</p>";
EcHo "<p>Hello World</p>";

// Case Sensitive Error
$andi = "Andi";
echo $Andi; // Notice: Undefined variable: Andi

// Statement
$a = 3;
$b = 4;
$nama = "Sistem Informasi";
$c = $a / 25.0;

if ($a != $b) {
    echo "<p>Pemrograman Web</p>";
}
?>
```

### 5️⃣ Variabel dan Konstanta
File: `variable_const.php`

**Variabel:**
```php
<?php
$nama = "Andi";
echo $nama;

// Memanggil variabel dalam string
echo "<p>Selamat pagi $nama</p>";

// Menghapus variabel
unset($nama);
?>
```

**Konstanta:**
```php
<?php
define("GAJI", 50000000);
echo GAJI;
?>
```

💡 **Perbedaan:**
- **Variabel**: Nilai bisa diubah, diawali `$`
- **Konstanta**: Nilai tetap, tanpa `$`, biasanya UPPERCASE

### 6️⃣ Tipe Data
File: `data_type.php`

**Cek Tipe Data:**
```php
<?php
$var1 = 12;
echo gettype($var1); // integer

var_dump($var1); // int(12)
?>
```

**Tipe Data PHP:**

| Tipe | Contoh | gettype() |
|------|--------|-----------|
| **Integer** | `21`, `15000` | `"integer"` |
| **Float** | `3.19`, `13235.50` | `"double"` |
| **String** | `"Andi"`, `'A'` | `"string"` |
| **Boolean** | `true`, `false` | `"boolean"` |
| **Array** | `array("Andi", "Joko")` | `"array"` |
| **Object** | `new Siswa()` | `"object"` |
| **Null** | `null` | `"NULL"` |

**String:**
```php
<?php
// Single Quote vs Double Quote
$prodi = "Sistem Informasi";
$belajar1 = 'Sedang belajar di $prodi'; // Tidak parse variabel
$belajar2 = "Sedang belajar di $prodi"; // Parse variabel

// Curly Braces
$kata = "Sistem";
echo "{$kata} Informasi";
?>
```

**Array:**
```php
<?php
// Indexed Array
$siswa = array("Andri", "Joko", "Sukma");
echo $siswa[1]; // Joko

// Menambah elemen
$siswa[] = "Rina";

// Associative Array
$mahasiswa = [
    "nim" => "12345",
    "nama" => "Budi",
    "ipk" => 3.67
];
echo $mahasiswa["nama"]; // Budi
?>
```

**Object:**
```php
<?php
class Siswa {
    public $nama;
    public $umur;
    
    public function get_nama() {
        return $this->nama;
    }
}

$andi = new Siswa;
$andi->nama = "Andi";
$andi->umur = 19;

print_r($andi);
?>
```

### 7️⃣ Operator
File: `operator.php`

**Aritmatika:**
```php
<?php
$hasil1 = +11;      // 11
$hasil2 = -3;       // -3
$hasil3 = 3 + 5;    // 8
$hasil4 = 8 - 4.5;  // 3.5
$hasil5 = 2 * 5;    // 10
$hasil6 = 8 / 5;    // 1.6
$hasil7 = 10 % 4;   // 2 (modulo)
$hasil8 = 2 ** 4;   // 16 (pangkat)
?>
```

**Increment & Decrement:**
```php
<?php
$a = 5;
echo ++$a; // 6 (pre-increment)
echo $a;   // 6

$b = 5;
echo $b++; // 5 (post-increment)
echo $b;   // 6
?>
```

**Perbandingan:**
```php
<?php
var_dump(12 < 14);   // true
var_dump(14 <= 14);  // true
var_dump(10 <> 14);  // true (not equal)
var_dump(15 == 10);  // false
var_dump(10 === 10); // true (identical)
?>
```

**String Concatenation:**
```php
<?php
$hasil = "Belajar" . "PHP"; // BelajarPHP

$a = "Sstt!";
$b = " lagi";
$c = " serius";
$hasil = $a . $b . $c; // Sstt! lagi serius
?>
```

**Array Union:**
```php
<?php
$kelasA = ["Andri", "Joko", "Sukma"];
$kelasB = ["Alex", "Rina", "Rico"];
$semua = $kelasA + $kelasB; // ["Andri", "Joko", "Sukma"]
?>
```

### 8️⃣ Struktur Kontrol
File: `control_structure.php`

**If Statement:**
```php
<?php
$user = "admin";
if ($user == "admin") {
    echo "Selamat datang Admin!";
}

// If-Else
if ($user == "admin") {
    echo "Admin";
} else {
    echo "Guest";
}

// If dengan AND/OR
$username = "admin";
$password = "qwerty";
if ($username == "admin" AND $password == "qwerty") {
    echo "Login berhasil";
}
?>
```

**Switch Statement:**
```php
<?php
$hari = 4;
switch ($hari) {
    case 1:
        echo "Hari Senin";
        break;
    case 2:
        echo "Hari Selasa";
        break;
    case 3:
        echo "Hari Rabu";
        break;
    case 4:
        echo "Hari Kamis";
        break;
    default:
        echo "Nama hari cuma ada 7!";
}
?>
```

**Perulangan:**
```php
<?php
// FOR
for ($i = 1; $i <= 10; $i++) {
    echo "Saya sedang belajar PHP<br>";
}

// WHILE
$i = 1;
while ($i <= 10) {
    echo "Iterasi ke-$i<br>";
    $i++;
}

// DO-WHILE
$i = 1;
do {
    echo "Nilai: $i<br>";
    $i++;
} while ($i <= 10);

// FOR dengan Array
$nama = array("Andri", "Joko", "Sukma");
for ($i = 0; $i < count($nama); $i++) {
    echo $nama[$i] . "<br>";
}

// FOREACH
foreach ($nama as $val) {
    echo "$val<br>";
}

// FOREACH dengan Key
$mahasiswa = [
    1 => "Andri",
    6 => "Joko",
    12 => "Sukma"
];
foreach ($mahasiswa as $kunci => $isi) {
    echo "Urutan ke-$kunci adalah $isi<br>";
}
?>
```

### 9️⃣ User Defined Function
File: `user_defined_function.php`

**Basic Function:**
```php
<?php
function salam() {
    echo "<p>Selamat Pagi</p>";
}
salam();
salam();
?>
```

**Function dengan Parameter:**
```php
<?php
function salam2($nama) {
    echo "<p>Selamat Pagi, $nama</p>";
}
salam2("Andi");
salam2("Jojo");
?>
```

**Multiple Parameters:**
```php
<?php
function salam3($waktu, $nama) {
    echo "<p>Selamat $waktu, $nama</p>";
}
salam3("Malam", "Andi");
salam3("Siang", "Jojo");
?>
```

**Return Value:**
```php
<?php
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}
$a = tambah(6, 10);
echo $a; // 16
?>
```

**Default Parameter:**
```php
<?php
function salam5($waktu = "Malam", $nama = "Anton") {
    echo "<p>Selamat $waktu, $nama</p>";
}
salam5();                    // Selamat Malam, Anton
salam5("Pagi");              // Selamat Pagi, Anton
salam5("Datang", "Presiden"); // Selamat Datang, Presiden
?>
```

**Anonymous Function:**
```php
<?php
$salam = function() {
    return "Selamat Siang";
};
echo $salam();
?>
```

**Arrow Function (PHP 7.4+):**
```php
<?php
$salam = fn() => "Selamat Siang";
echo $salam();
?>
```

### 🔟 PHP Built-in Function
File: `php_function.php`

**String Functions:**
```php
<?php
$kalimat = "Sedang belajar PHP";
echo strtolower($kalimat); // sedang belajar php
echo strtoupper($kalimat); // SEDANG BELAJAR PHP

$kalimat2 = "sedang dalam perjalanan";
echo ucfirst($kalimat2); // Sedang dalam perjalanan
echo lcfirst($kalimat2); // sedang dalam perjalanan
?>
```

**Trim:**
```php
<?php
$a = " abcd ";
$trim_a = trim($a);
echo $a;       // " abcd "
echo $trim_a;  // "abcd"
?>
```

**Number Format:**
```php
<?php
echo number_format(39999.99, 0, ',', '.'); // 39.999
echo number_format(39999.99, 2, ',', '.'); // 39.999,99
echo number_format(1499999, 2, ',', '.');  // 1.499.999,00
?>
```

**Substring:**
```php
<?php
$kalimat = "Belajar PHP di Sistem Informasi";
echo substr($kalimat, 0);      // Belajar PHP di Sistem Informasi
echo substr($kalimat, 15);     // Sistem Informasi
echo substr($kalimat, 0, 7);   // Belajar
echo substr($kalimat, 0, 11);  // Belajar PHP
?>
```

**Array Functions:**
```php
<?php
$zoo = array("kucing", "ikan", "ayam", "bebek", "sapi");

// Count
echo count($zoo); // 5

// Loop dengan count
for ($i = 0; $i < count($zoo); $i++) {
    echo $zoo[$i] . "<br>";
}

// Array Push
$siswa = array("andi", "gina", "joko");
array_push($siswa, "rani");
print_r($siswa); // ["andi", "gina", "joko", "rani"]

// Array Pop
$satu_siswa = array_pop($siswa);
echo $satu_siswa; // rani
print_r($siswa);  // ["andi", "gina", "joko"]

// In Array
$cek = in_array("joko", $siswa);
var_dump($cek); // bool(true)
?>
```

---

## 📝 Tugas Praktikum

### 🎯 Tugas
| No | Item | Keterangan |
|----|------|------------|
| 1 | **Praktik** | Praktekkan seluruh poin praktikum dengan **XAMPP**, **Laragon**, dan **FlyEnv** |
| 2 | **Dokumentasi** | Screenshot kode program, output di browser, penjelasan kode |
| 3 | **Laporan** | Buat Laporan Praktikum dalam format `.pdf` |
| 4 | **Pengumpulan** | Upload `.zip` (Laporan + File PHP) via **E-Learning** |

### 📋 Checklist Tugas
- ✅ Setup XAMPP, Laragon, dan FlyEnv
- ✅ `hello.php` — Hello World
- ✅ `html_php.php` — PHP dalam HTML
- ✅ `basic.php` — Aturan Dasar PHP
- ✅ `variable_const.php` — Variabel & Konstanta
- ✅ `data_type.php` — Tipe Data
- ✅ `operator.php` — Operator
- ✅ `control_structure.php` — Struktur Kontrol
- ✅ `user_defined_function.php` — User Defined Function
- ✅ `php_function.php` — PHP Built-in Function

---

## 🚀 Cara Menjalankan

### Metode 1: XAMPP (Recommended)
1. **Install XAMPP** dari [apachefriends.org](https://www.apachefriends.org/download.html)
2. **Buka XAMPP Control Panel**
3. **Start Apache** dan **MySQL**
4. **Buat folder** di `C:\xampp\htdocs\nama-folder-anda\`
5. **Copy semua file PHP** ke folder tersebut
6. **Buka browser** dan akses:
   ```
   http://localhost/nama-folder-anda/hello.php
   ```

### Metode 2: Laragon (Alternatif)
1. **Install Laragon** dari [laragon.org](https://laragon.org/download/)
2. **Buka Laragon** dan klik **"Start All"**
3. **Buat folder** di `C:\laragon\www\nama-folder-anda\`
4. **Copy semua file PHP** ke folder tersebut
5. **Akses**:
   ```
   http://localhost/nama-folder-anda/hello.php
   ```

### Metode 3: FlyEnv (Modern)
1. **Install FlyEnv** dari [flyenv.com](https://www.flyenv.com/)
2. **Buka FlyEnv** dan start services
3. **Buat folder** di directory yang ditentukan
4. **Copy semua file PHP**
5. **Akses via localhost**

### 🔍 Debugging PHP
**Cara Melihat Error:**
1. Buka file `php.ini` di XAMPP
2. Cari baris: `display_errors = Off`
3. Ubah menjadi: `display_errors = On`
4. Restart Apache
5. Error akan tampil di browser

**Error Umum:**
- ❌ **Parse error: syntax error** — Lupa `;` atau `}`
- ❌ **Undefined variable** — Variabel belum dideklarasikan
- ❌ **Fatal error: Call to undefined function** — Function tidak ada
- ❌ **Warning: Cannot modify header information** — Output sebelum `header()`

---

## 📦 Pengumpulan Tugas

### Format Pengumpulan
- 📄 **Laporan Praktikum** (`.pdf`)
- 📦 **File PHP** dalam format **`.zip`**

### Isi ZIP File
```
Nama_NIM_Modul4.zip
├── Laporan_Praktikum_Modul4_Nama_NIM.pdf
├── hello.php
├── html_php.php
├── basic.php
├── variable_const.php
├── data_type.php
├── operator.php
├── control_structure.php
├── user_defined_function.php
└── php_function.php
```

### 📝 Isi Laporan Praktikum
1. 📸 Screenshot kode program
2. 🖥️ Screenshot output di browser
3. 📝 Penjelasan kode program yang ditulis
4. 🐛 **Screenshot error** (jika ada) dan cara memperbaikinya
5. 💡 **Perbandingan** XAMPP vs Laragon vs FlyEnv (opsional)

### ⏰ Deadline
> **Paling lambat sebelum jadwal praktikum minggu depan**  
> Dikumpulkan via **E-Learning** dalam format `.zip`

---

## 👨‍🏫 Penyusun

| Peran | Nama |
|-------|------|
| **Dosen/Asisten Modul** | Purnama Anaking, S.Kom., M.Kom. |
| **Program Studi** | S1 Sistem Informasi |
| **Institusi** | Telkom University Surabaya |
| **Tahun** | 2026 |

---

## 📚 Referensi

- [PHP Official Documentation](https://www.php.net/manual/en/)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [PHP.net - Function Reference](https://www.php.net/manual/en/funcref.php)
- [XAMPP Documentation](https://www.apachefriends.org/docs/)
- [Laragon Documentation](https://laragon.org/docs/)
- [PHP The Right Way](https://phptherightway.com/)

---

## 💡 Tips & Tricks

### 🎨 Best Practices PHP
1. ✅ Selalu gunakan `<?php ?>` tag lengkap
2. ✅ Akhiri setiap statement dengan `;`
3. ✅ Gunakan **nama variabel yang deskriptif** (`$nama_mahasiswa` bukan `$x`)
4. ✅ Gunakan **konstanta** untuk nilai yang tidak berubah
5. ✅ Selalu **validasi input** dari user
6. ✅ Gunakan **prepared statements** untuk query database (mencegah SQL Injection)
7. ✅ Tulis **komentar** untuk kode yang kompleks

### 🐛 Debugging Tips
1. Gunakan `var_dump()` untuk melihat tipe data dan nilai
2. Gunakan `print_r()` untuk melihat isi array/object
3. Gunakan `error_reporting(E_ALL)` untuk menampilkan semua error
4. Cek **error log** di `C:\xampp\apache\logs\error.log`
5. Gunakan **Xdebug** untuk advanced debugging

### ⚠️ Common Mistakes
1. ❌ Lupa `;` di akhir statement
2. ❌ Lupa `$` di awal variabel
3. ❌ Menggunakan `=` (assignment) bukan `==` (comparison)
4. ❌ Case-sensitive pada variabel (`$nama` ≠ `$Nama`)
5. ❌ Output sebelum `header()` atau `session_start()`
6. ❌ Tidak menutup tag `?>` di file pure PHP (opsional)
7. ❌ Menggunakan `mysql_*` functions (deprecated, gunakan `mysqli_*` atau PDO)

### 🌐 Perbedaan Client-Side vs Server-Side

| Aspek | Client-Side (HTML/CSS/JS) | Server-Side (PHP) |
|-------|---------------------------|-------------------|
| **Eksekusi** | Di browser user | Di server |
| **Kecepatan** | Cepat (lokal) | Bergantung server |
| **Keamanan** | Kode terlihat | Kode tersembunyi |
| **Database** | Tidak bisa akses langsung | Bisa akses database |
| **File System** | Terbatas | Full access |
| **Contoh** | HTML, CSS, JavaScript | PHP, Python, Node.js |

### 📊 PHP vs JavaScript

| Fitur | PHP | JavaScript |
|-------|-----|------------|
| **Tipe** | Server-side | Client-side (bisa server dengan Node.js) |
| **Ekstensi File** | `.php` | `.js` |
| **Variabel** | `$nama` | `nama` atau `let nama` |
| **Statement End** | `;` (wajib) | `;` (opsional) |
| **Array** | `array()` atau `[]` | `[]` |
| **Object** | `class` + `new` | `class` + `new` atau `{}` |
| **Database** | Native support | Perlu library/framework |

---

## 🔐 Keamanan PHP

### 🛡️ Best Practices Keamanan
1. ✅ **Validasi semua input** dari user
2. ✅ Gunakan **prepared statements** untuk database
3. ✅ **Sanitize output** dengan `htmlspecialchars()`
4. ✅ **Hash password** dengan `password_hash()`
5. ✅ **Batasi file upload** (tipe, ukuran)
6. ✅ **Disable error display** di production
7. ✅ **Update PHP** ke versi terbaru

### Contoh Sanitize Output:
```php
<?php
$input = "<script>alert('XSS')</script>";
$safe = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
echo $safe; // &lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;
?>
```

---

## 📜 Lisensi

Repository ini dibuat untuk keperluan **praktikum akademik** Program Studi Sistem Informasi, Telkom University Surabaya.

---

<div align="center">

**💻 Selamat Belajar & Selamat Coding! 🚀**

*PHP makes the web dynamic! Let's build something awesome!* 🐘✨

*Dibuat dengan ❤️ untuk Praktikum PAW Modul 4 - 2026*

</div>