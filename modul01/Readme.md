# 🌐 Praktikum Pemrograman Aplikasi Web (PAW)
## Modul 1: Pengenalan HTML (Hyper Text Markup Language)

<div align="center">

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![VS Code](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)
![Live Server](https://img.shields.io/badge/Live_Server-✓-green?style=for-the-badge)
![GitHub Pages](https://img.shields.io/badge/GitHub_Pages-✓-black?style=for-the-badge)

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
- [📘 Materi Tingkat Dasar](#-materi-tingkat-dasar)
- [📗 Materi Tingkat Lanjut](#-materi-tingkat-lanjut)
- [📝 Tugas Praktikum](#-tugas-praktikum)
- [🚀 Cara Menjalankan](#-cara-menjalankan)
- [🌍 Cara Deployment](#-cara-deployment)
- [📦 Pengumpulan Tugas](#-pengumpulan-tugas)
- [👨‍🏫 Penyusun](#-penyusun)

---

## 📖 Deskripsi

Praktikum Modul 1 ini membahas pengenalan **HTML (Hyper Text Markup Language)** sebagai fondasi utama dalam pengembangan aplikasi web. Mahasiswa akan mempelajari struktur dasar dokumen HTML serta berbagai elemen-elemen HTML yang digunakan untuk membangun halaman web, mulai dari tingkat dasar hingga tingkat lanjut.

Praktikum dibagi menjadi **2 bagian utama**:
1. **Pengenalan HTML Tingkat Dasar** — Struktur dasar, elemen-elemen fundamental HTML.
2. **Pengenalan HTML Tingkat Lanjut** — Form, Embed, Object, Iframe, Semantic HTML5, dan Deployment.

---

## 🎯 Tujuan Pembelajaran

Setelah mengikuti praktikum ini, mahasiswa diharapkan mampu:
- ✅ Memahami struktur dasar dokumen HTML.
- ✅ Menerapkan berbagai elemen HTML untuk membangun halaman web.
- ✅ Menggunakan elemen multimedia (image, audio, video).
- ✅ Membuat tabel, nested table, dan form interaktif.
- ✅ Mengimplementasikan Semantic HTML5.
- ✅ Meng-online-kan halaman web menggunakan GitHub Pages, Vercel, atau Netlify.

---

## 🛠️ Tools yang Digunakan

| Tool | Deskripsi | Link Download |
|------|-----------|---------------|
| 🖥️ **Visual Studio Code** | Code Editor utama | [Download](https://code.visualstudio.com/download) |
| ⚡ **Live Server** (Extension) | Auto-refresh browser saat coding | Install via VS Code Extensions |
| 🌐 **GitHub Pages** | Hosting statis gratis | [github.com](https://github.com) |
| ▲ **Vercel** | Platform deployment modern | [vercel.com](https://vercel.com) |
| 🔷 **Netlify** | Platform deployment alternatif | [netlify.com](https://netlify.com) |

---

## 📁 Struktur Folder

```
modul-1-pengenalan-html/
│
├── 📄 index.html                 # File utama praktikum dasar
├── 📄 semantic.html              # Tugas HTML Lanjut (Semantic)
├── 📄 form.html                  # Tugas HTML Lanjut (Form)
├── 📄 tugas.html                 # Tugas HTML Dasar
├── 📄 README.md                  # Dokumentasi repository
│
└── 📂 assets/
    ├── 🖼️ star.png               # Gambar lokal (relative path)
    ├── 🎵 horse.ogg              # Audio file
    ├── 🎵 horse.mp3              # Audio file (fallback)
    ├── 🎬 movie.mp4              # Video file
    ├── 🎬 movie.ogg              # Video file (fallback)
    ├── 📄 file.pdf               # File PDF untuk Embed/Object
    ├── 🎨 style.css              # External CSS
    ├── 📜 script.js              # External JavaScript
    └── 🔖 favicon.ico            # Favicon website
```

---

## 📘 Materi Tingkat Dasar

### 1️⃣ Install dan Jalankan Visual Studio Code
- Download VS Code dari [code.visualstudio.com](https://code.visualstudio.com/download)
- Jalankan dan buka folder proyek

### 2️⃣ Struktur Dasar HTML
Mempelajari struktur fundamental dokumen HTML:
- `<!DOCTYPE html>` — Deklarasi tipe dokumen
- `<html>` — Root element
- `<head>` — Metadata dokumen
- `<body>` — Konten yang ditampilkan

### 3️⃣ Elemen `<head>`
Mempelajari berbagai metadata dalam head:
- `<meta charset="UTF-8">` — Encoding karakter
- `<meta name="viewport">` — Responsivitas mobile
- `<meta name="author">`, `keyword`, `description`, `robots`
- `<meta http-equiv="refresh">` — Auto refresh halaman
- `<link rel="stylesheet">` — External CSS
- `<link rel="shortcut icon">` — Favicon
- `<script>` — Internal & External JavaScript
- `<style>` — Internal CSS

### 4️⃣ Elemen Level
- **Block Level Element**: `<div>`, `<h1>`-`<h6>`, `<p>`, `<hr>` — Memulai baris baru
- **Inline Level Element**: `<strong>`, `<em>`, `<span>` — Dalam satu baris

### 5️⃣ Elemen Text Formatting
- **Heading**: `<h1>` s/d `<h6>`
- **Paragraph**: `<p>`
- **Link**: `<a href="..." target="_blank">`
- **Formatting**: `<b>`, `<strong>`, `<i>`, `<em>`, `<mark>`, `<small>`, `<del>`, `<ins>`, `<sub>`, `<sup>`
- **Line Break**: `<br>`

### 6️⃣ Elemen List
- **Ordered List** (`<ol>`) — Daftar bernomor
- **Unordered List** (`<ul>`) — Daftar dengan bullet
- **Description List** (`<dl>`, `<dt>`, `<dd>`) — Daftar deskripsi

### 7️⃣ Elemen Image
- `<img src="..." width="..." height="..." alt="..." title="...">`
- **Relative Path**: `assets/star.png`
- **Absolute Path**: `https://...`
- **Image sebagai Link**: `<a><img></a>`

### 8️⃣ Elemen Audio
```html
<audio controls>
  <source src="assets/horse.ogg" type="audio/ogg">
  <source src="assets/horse.mp3" type="audio/mpeg">
</audio>
```

### 9️⃣ Elemen Video
```html
<video width="320" height="240" controls>
  <source src="assets/movie.mp4" type="video/mp4">
  <source src="assets/movie.ogg" type="video/ogg">
</video>
```

### 🔟 Elemen Table
- Struktur: `<table>`, `<thead>`, `<tbody>`, `<tfoot>`, `<tr>`, `<th>`, `<td>`
- Atribut: `colspan`, `rowspan`, `style="text-align: center;"`
- **Nested Table** — Tabel di dalam tabel

### 📝 Tugas HTML Dasar
- ✅ Buat file `tugas.html` sesuai output yang ditentukan
- ✅ Dokumentasikan dalam Laporan Praktikum (.pdf)

---

## 📗 Materi Tingkat Lanjut

### 1️⃣ Elemen Form
Berbagai jenis input dalam form:
- **Text**: `<input type="text">`, `placeholder`, `readonly`, `disabled`, `required`
- **Email**: `<input type="email">`
- **Password**: `<input type="password">`
- **File**: `<input type="file">`
- **Hidden**: `<input type="hidden">`
- **Textarea**: `<textarea cols="30" rows="5">`
- **Select**: `<select>` dengan `<option>` dan `selected`
- **Radio**: `<input type="radio">` dengan `<label for="...">`
- **Checkbox**: `<input type="checkbox">`
- **Button**: `<input type="reset">`, `<input type="submit">`, `<input type="button">`

### 2️⃣ Elemen Embed
Menyematkan konten eksternal (PDF, dll):
```html
<embed src="assets/file.pdf" width="800" height="1000" type="application/pdf">
```

### 3️⃣ Elemen Object
Alternatif embed dengan fallback:
```html
<object data="assets/file.pdf" width="800" height="1000" type="application/pdf"></object>
```

### 4️⃣ Elemen Iframe
Menyematkan halaman/web eksternal (contoh: YouTube):
```html
<iframe width="560" height="315" src="https://www.youtube.com/embed/..." 
        title="YouTube video player" frameborder="0" allowfullscreen></iframe>
```

### 5️⃣ Tag Semantic HTML5
Elemen semantik untuk struktur yang bermakna:
- `<header>` — Bagian kepala halaman
- `<main>` — Konten utama
- `<section>` — Seksi konten
- `<aside>` — Konten sampingan
- `<nav>` — Navigasi
- `<footer>` — Bagian kaki halaman

### 6️⃣ Visual Studio Code Plugin: Live Server
Cara penggunaan:
1. Buka menu **Extensions** (Ctrl+Shift+X)
2. Cari **"Live Server"** oleh **Ritwick Dey**
3. Klik **Install**
4. Klik **"Go Live"** di status bar kanan bawah, atau
5. **Klik kanan** file → **"Open with Live Server"**

### 📝 Tugas HTML Lanjut
- ✅ Buat file `semantic.html` — Implementasi Semantic HTML5
- ✅ Buat file `form.html` — Implementasi Form
- ✅ **Online-kan** ke GitHub Pages / Vercel / Netlify
- ✅ Dokumentasikan dalam Laporan Praktikum (.pdf)

---

## 📝 Tugas Praktikum

### 🎯 Tugas 1: HTML Dasar
| No | Item | Keterangan |
|----|------|------------|
| 1 | File | `tugas.html` |
| 2 | Output | Sesuai gambar yang ditentukan |
| 3 | Dokumentasi | Screenshot kode, output browser, penjelasan |

### 🎯 Tugas 2: HTML Lanjut
| No | Item | Keterangan |
|----|------|------------|
| 1 | File | `semantic.html` & `form.html` |
| 2 | Output | Sesuai gambar yang ditentukan |
| 3 | Deployment | GitHub Pages / Vercel / Netlify |
| 4 | Dokumentasi | Screenshot + URL domain |

---

## 🚀 Cara Menjalankan

### Metode 1: Langsung di Browser
```bash
# Buka file HTML langsung dengan double-click
# atau klik kanan → Open with → Browser
```

### Metode 2: Menggunakan Live Server (Recommended) ⚡
1. Buka folder proyek di **VS Code**
2. Install extension **Live Server**
3. Klik **"Go Live"** di status bar kanan bawah
4. Browser akan otomatis terbuka di `http://127.0.0.1:5500/`
5. Setiap perubahan kode akan **auto-refresh** 🔄

---

## 🌍 Cara Deployment

### Opsi 1: GitHub Pages 🐙
1. Push repository ke GitHub
2. Buka **Settings** → **Pages**
3. Pilih branch `main` / `master` → **Save**
4. Website tersedia di `https://username.github.io/repository/`

### Opsi 2: Vercel ▲
1. Login di [vercel.com](https://vercel.com)
2. Import repository dari GitHub
3. Klik **Deploy**
4. Dapatkan URL otomatis (contoh: `project.vercel.app`)

### Opsi 3: Netlify 🔷
1. Login di [netlify.com](https://netlify.com)
2. Drag & drop folder proyek, atau import dari GitHub
3. Build otomatis
4. Dapatkan URL (contoh: `project.netlify.app`)

---

## 📦 Pengumpulan Tugas

### Format Pengumpulan
- 📄 **Laporan Praktikum** (`.pdf`)
- 📦 **File HTML + Tugas** dalam format **`.zip`**

### Isi ZIP File
```
Nama_NIM_Modul1.zip
├── Laporan_Praktikum_Modul1_Nama_NIM.pdf
├── index.html
├── tugas.html
├── semantic.html
├── form.html
└── assets/
    ├── star.png
    ├── horse.mp3
    ├── movie.mp4
    └── ...
```

### ⏰ Deadline
> **Paling lambat sebelum jadwal praktikum minggu depan**  
> Dikumpulkan via **E-Learning**

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

- [MDN Web Docs - HTML](https://developer.mozilla.org/en-US/docs/Web/HTML)
- [W3Schools HTML Tutorial](https://www.w3schools.com/html/)
- [HTML5 Semantic Elements](https://www.w3schools.com/html/html5_semantic_elements.asp)

---

## 📜 Lisensi

Repository ini dibuat untuk keperluan **praktikum akademik** Program Studi Sistem Informasi, Telkom University Surabaya.

---

<div align="center">

**💻 Selamat Belajar & Selamat Coding! 🚀**

*Dibuat dengan ❤️ untuk Praktikum PAW Modul 1 - 2026*

</div>