# 🌐 Pengembangan Aplikasi Web

<div align="center">

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)](https://developer.mozilla.org/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white)](https://developer.mozilla.org/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)](https://developer.mozilla.org/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Git](https://img.shields.io/badge/Git-F05032?style=flat-square&logo=git&logoColor=white)](https://git-scm.com/)

**Repository Praktikum Mata Kuliah Pengembangan Aplikasi Web**  
**Program Studi S1 Sistem Informasi — Telkom University Surabaya**

</div>

---

## 📖 Tentang Repository

Repository ini berisi kumpulan **praktikum dan tugas** mata kuliah **Pengembangan Aplikasi Web (PAW)**. Materi disusun secara bertahap mengikuti **Learning Plan** resmi, dimulai dari fondasi web (HTML, CSS, JavaScript) hingga pengembangan aplikasi web modern menggunakan **PHP, Laravel, dan Bootstrap**.

Setiap modul/folder berisi:
- 📄 **Materi praktikum** (contoh kode & penjelasan)
- 💻 **Source code** yang dapat dijalankan
- 📝 **Tugas** (jika ada)
- 📊 **Laporan** (dokumentasi hasil praktikum)

---

## 🗺️ Learning Plan

Kurikulum mata kuliah ini terbagi menjadi **2 fase utama**:

### 🔹 Fase 1: Fondasi Web Development

| # | Topik | Fokus Pembelajaran |
|---|-------|-------------------|
| 1 | Pengantar Pengembangan Aplikasi Web | Konsep dasar web, arsitektur client-server |
| 2 | Pengenalan HTML | Struktur dokumen, elemen, semantik |
| 3 | Pengenalan CSS | Styling, layout, responsive design |
| 4 | Pengenalan JavaScript | Interaktivitas, DOM, event handling |
| 5 | Pengenalan PHP | Server-side scripting dasar |
| 6 | Pengenalan PHP Lanjut | OOP, session, form handling |
| 7 | Database & Version Control (Git) | MySQL, Git workflow |
| 8 | **UTS** | Evaluasi tengah semester |

### 🔹 Fase 2: Modern Web Framework

| # | Topik | Fokus Pembelajaran |
|---|-------|-------------------|
| 9 | Pengenalan Framework (Bootstrap & Laravel) | Arsitektur MVC, UI framework |
| 10 | Laravel Routing, Controller & View | Alur request-response |
| 11 | Laravel Database | Migration, Eloquent ORM |
| 12 | Laravel Authentication, Factory & File Storage | Auth system, seeder, upload |
| 13 | Laravel 3rd Packages & Final Project | Integrasi library eksternal |
| 14–15 | Responsi | Pendalaman & konsultasi |
| 16 | **Demo UAS** | Presentasi proyek akhir |

---

## 📁 Struktur Repository

```
pengembangan-aplikasi-website/
│
├──  modulXX/                    # Ganti XX dengan nomor modul
│   ├── 📄 *.html / *.php / *.js   # File materi & tugas
│   └──  assets/                 # File pendukung (CSS, JS, gambar)
│
├──  tugas/                      # Kumpulan tugas besar
│
├── 📂 proyek-akhir/               # Final project (Laravel)
│
├── 📄 README.md                   # Dokumentasi ini
└──  .gitignore                  # File yang diabaikan Git
```

> 💡 **Catatan:** Struktur folder dapat berubah sesuai kebutuhan setiap modul. Lihat isi masing-masing folder untuk detail lebih lanjut.

---

## ️ Teknologi & Tools

### Bahasa Pemrograman
- **HTML5** — Struktur halaman web
- **CSS3** — Styling & layout
- **JavaScript (ES6+)** — Interaktivitas client-side
- **PHP 8+** — Server-side scripting
- **Blade Template** — Template engine Laravel

### Framework & Library
- **Laravel** — PHP framework (MVC)
- **Bootstrap** — CSS framework untuk UI responsif
- **Font Awesome** — Ikon web

### Database
- **MySQL / MariaDB** — Relational database

### Tools Pengembangan
- **Visual Studio Code** — Code editor
- **XAMPP / Laragon** — Local server (Apache + MySQL + PHP)
- **Git & GitHub** — Version control
- **Composer** — PHP dependency manager
- **Postman** — API testing (opsional)

---

## 🚀 Cara Menjalankan Proyek

### 1️⃣ Clone Repository
```bash
git clone https://github.com/[username]/pengembangan-aplikasi-website.git
cd pengembangan-aplikasi-website
```

### 2️⃣ Untuk Modul HTML / CSS / JavaScript
Buka file `.html` langsung di browser, atau gunakan **Live Server** di VS Code:
1. Install extension **Live Server** (Ritwick Dey)
2. Klik kanan file HTML → **"Open with Live Server"**

### 3️⃣ Untuk Modul PHP
1. Install **XAMPP** atau **Laragon**
2. Salin folder modul ke `htdocs/` (XAMPP) atau `www/` (Laragon)
3. Start **Apache** & **MySQL**
4. Akses via browser: `http://localhost/[nama-folder]/`

### 4️⃣ Untuk Proyek Laravel
```bash
cd proyek-akhir
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
Akses: `http://localhost:8000`

---

## 📝 Pedoman Penamaan File

Agar repository tetap rapi, gunakan konvensi berikut:

| Jenis File | Format | Contoh |
|------------|--------|--------|
| Materi praktikum | `materi_01.html` | `materi_01.html` |
| Tugas | `tugas_01_nama.html` | `tugas_01_kalkulator.html` |
| Laporan | `Laporan_ModulXX_Nama_NIM.pdf` | `Laporan_Modul02_Budi_12345.pdf` |
| CSS eksternal | `style.css` | `assets/style.css` |
| JavaScript | `script.js` | `assets/script.js` |

---

## 📦 Pengumpulan Tugas

### Format Pengumpulan
- 📄 **Laporan Praktikum** → format `.pdf`
- 📦 **Source Code** → format `.zip`

### Isi Laporan
1.  Screenshot kode program
2. 🖥️ Screenshot output di browser
3. 📝 Penjelasan kode program
4. 🌐 URL deployment (jika ada)

### ⏰ Deadline
> **Paling lambat sebelum jadwal praktikum minggu berikutnya**  
> Dikumpulkan melalui **E-Learning**

---

## 👥 Kontributor

| Peran | Nama |
|-------|------|
| **Dosen Pengampu** | Purnama Anaking, S.Kom., M.Kom. |
| **Asisten Praktikum** | [Nama Asisten] |
| **Program Studi** | S1 Sistem Informasi |
| **Institusi** | Telkom University Surabaya |
| **Tahun Ajaran** | 2026 |

---

## 📚 Referensi & Dokumentasi

- [MDN Web Docs](https://developer.mozilla.org/) — Dokumentasi web terlengkap
- [W3Schools](https://www.w3schools.com/) — Tutorial interaktif
- [Laravel Documentation](https://laravel.com/docs) — Dokumentasi resmi Laravel
- [Bootstrap Documentation](https://getbootstrap.com/docs) — Dokumentasi Bootstrap
- [PHP The Right Way](https://phptherightway.com/) — Best practices PHP
- [Git Documentation](https://git-scm.com/doc) — Dokumentasi Git

---

## 📜 Lisensi

Repository ini dibuat untuk keperluan **praktikum akademik** Program Studi S1 Sistem Informasi, Telkom University Surabaya. Kode sumber bersifat **open untuk pembelajaran**, namun dilarang mendistribusikan ulang untuk tujuan komersial tanpa izin.

---

## 🤝 Kontribusi

Jika Anda menemukan kesalahan atau ingin memberikan masukan:
1. **Fork** repository ini
2. Buat **branch** baru (`git checkout -b fitur/penambahan`)
3. **Commit** perubahan (`git commit -m 'Tambah materi X'`)
4. **Push** ke branch (`git push origin fitur/penambahan`)
5. Buat **Pull Request**

---

<div align="center">

**💻 Selamat Belajar & Selamat Berkarya!** 🚀

*Repository ini akan terus diperbarui seiring berjalannya perkuliahan.*

**Sistem Informasi — Telkom University Surabaya © 2026**

</div>