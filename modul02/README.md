# 🎨 Praktikum Pemrograman Aplikasi Web (PAW)
## Modul 2: Pengenalan CSS (Cascading Style Sheet)

<div align="center">

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Font Awesome](https://img.shields.io/badge/Font_Awesome-528DD7?style=for-the-badge&logo=font-awesome&logoColor=white)
![VS Code](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)
![Responsive](https://img.shields.io/badge/Responsive-✓-green?style=for-the-badge)

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
- [📗 Materi Tingkat Lanjut (Studi Kasus)](#-materi-tingkat-lanjut-studi-kasus)
- [📝 Tugas Praktikum](#-tugas-praktikum)
- [🚀 Cara Menjalankan](#-cara-menjalankan)
- [🌍 Cara Deployment](#-cara-deployment)
- [📦 Pengumpulan Tugas](#-pengumpulan-tugas)
- [👨‍🏫 Penyusun](#-penyusun)

---

## 📖 Deskripsi

Praktikum Modul 2 ini membahas pengenalan **CSS (Cascading Style Sheet)** sebagai teknologi styling utama dalam pengembangan aplikasi web. Mahasiswa akan mempelajari cara mempercantik tampilan halaman HTML menggunakan berbagai properti CSS, mulai dari tingkat dasar hingga implementasi **Responsive Web Design** dalam sebuah studi kasus lengkap.

Praktikum dibagi menjadi **2 bagian utama**:
1. **Pengenalan CSS Tingkat Dasar** — Aturan dasar, selector, cascade, typography, box model, background, dan positioning.
2. **Pengenalan CSS Tingkat Lanjut** — Studi kasus pembuatan website lengkap dengan **Header, Hero, Showcase, Blog, dan Footer Section** yang responsive (desktop, tablet, mobile).

---

## 🎯 Tujuan Pembelajaran

Setelah mengikuti praktikum ini, mahasiswa diharapkan mampu:
- ✅ Memahami aturan dasar penulisan CSS (External, Internal, Inline).
- ✅ Menerapkan berbagai jenis **CSS Selector** (Universal, Element, Class, ID, Attribute, Pseudo Class).
- ✅ Memahami konsep **Cascade & Inheritance** serta prioritas CSS.
- ✅ Mengatur **Typography** (font, warna RGB/RGBA/HSL).
- ✅ Menerapkan **CSS Box Model** (margin, padding, border, box-sizing).
- ✅ Menggunakan **CSS Background** dan **CSS Positioning** (static, relative, absolute, fixed, sticky).
- ✅ Membuat **Horizontal Navigation Bar** dengan CSS.
- ✅ Membangun website lengkap dengan layout modern menggunakan **Flexbox**.
- ✅ Mengimplementasikan **Responsive Design** dengan **Media Queries** (breakpoint tablet & mobile).
- ✅ Menggunakan **Font Awesome** untuk ikon.
- ✅ Meng-online-kan website menggunakan Vercel / Netlify.

---

## 🛠️ Tools yang Digunakan

| Tool | Deskripsi | Link Download |
|------|-----------|---------------|
| 🖥️ **Visual Studio Code** | Code Editor utama | [Download](https://code.visualstudio.com/download) |
| ⚡ **Live Server** (Extension) | Auto-refresh browser saat coding | Install via VS Code Extensions |
| 🎨 **Font Awesome 6.2** | Library ikon web | [cdnjs.com](https://cdnjs.com/libraries/font-awesome) |
| 🖼️ **Placehold.co** | Placeholder gambar | [placehold.co](https://placehold.co) |
| ▲ **Vercel** | Platform deployment modern | [vercel.com](https://vercel.com) |
| 🔷 **Netlify** | Platform deployment alternatif | [netlify.com](https://netlify.com) |

---

## 📁 Struktur Folder

```
modul-2-pengenalan-css/
│
├── 📂 materi-dasar/
│   ├── 📄 aturan_dasar_css.html
│   ├── 📄 external_css.html
│   ├── 📄 internal_css.html
│   ├── 📄 inline_css.html
│   ├── 📄 selector_1.html
│   ├── 📄 selector_2.html
│   ├── 📄 cascade_inheritance.html
│   ├── 📄 typography.html
│   ├── 📄 box_model.html
│   ├── 📄 background.html
│   └── 📄 positioning.html
│
├── 📄 horizontal_nav.html           # Tugas CSS Dasar
├── 📄 index.html                    # Studi Kasus Web Design (Tugas Lanjut)
├── 📄 README.md                     # Dokumentasi repository
│
└── 📂 assets/
    ├── 🎨 style.css                 # External CSS untuk studi kasus
    ├── 📂 images/
    │   ├── 🖼️ logo.png             # Logo website
    │   ├── 🖼️ bg.jpg               # Background Hero Section
    │   └── 🖼️ strawberries.jpg     # Gambar contoh background
    └── 📂 fonts/                    # (Opsional) Custom fonts
```

---

## 📘 Materi Tingkat Dasar

### 1️⃣ Aturan Dasar CSS
Mempelajari sintaks dasar CSS:
- Struktur: `selector { property: value; }`
- **Case-insensitive** (kecuali nilai tertentu)
- **Whitespace diabaikan**
- Komentar: `/* komentar */`

### 2️⃣ External CSS
Menghubungkan file CSS eksternal:
```html
<link rel="stylesheet" href="assets/style.css">
```
✅ **Kelebihan**: Reusable, cacheable, memisahkan struktur & styling

### 3️⃣ Internal CSS
CSS di dalam tag `<style>` pada `<head>`:
```html
<style>
    h1 { color: blueviolet; text-decoration: underline; }
    p { color: brown; font-size: 20px; }
</style>
```

### 4️⃣ Inline CSS
CSS langsung pada elemen HTML:
```html
<h1 style="color: blueviolet; text-decoration: underline;">Heading</h1>
```
⚠️ **Tidak disarankan** untuk proyek besar (sulit maintenance)

### 5️⃣ Selector CSS (1) — Basic Selectors
| Selector | Sintaks | Contoh |
|----------|---------|--------|
| Universal | `*` | `* { color: brown; }` |
| Element | `tag` | `h2 { color: black; }` |
| Class | `.class` | `p.success { color: green; }` |
| ID | `#id` | `p#danger { color: red; }` |
| Attribute | `[attr]` | `a[href] { font-size: 50px; }` |
| Group | `,` | `h1, h2, p { text-transform: uppercase; }` |
| Descendant | ` ` (spasi) | `div p { font-size: x-large; }` |
| Child | `>` | `div > p { color: cornflowerblue; }` |

### 6️⃣ Selector CSS (2) — Pseudo Class
**Dynamic Pseudo Class**:
- `:hover` — Saat mouse di atas elemen
- `:focus` — Saat elemen mendapat fokus

**State Pseudo Class**:
- `:disabled` — Elemen dalam keadaan disabled

**Structural Pseudo Class**:
- `:first-child` — Elemen pertama
- `:last-child` — Elemen terakhir
- `:nth-child(odd/even/n)` — Elemen ke-n

### 7️⃣ Cascade & Inheritance
- **Cascade**: Urutan prioritas CSS (Inline > Internal > External)
- **Inheritance**: Pewarisan properti dari parent ke child
- **`!important`**: Override semua aturan (gunakan dengan hati-hati)

### 8️⃣ Typography
Properti teks dan font:
- `font-family`, `font-size`, `font-weight`, `font-style`
- `text-decoration`, `text-transform`, `text-align`
- `line-height`, `letter-spacing`

**Format Warna**:
| Format | Contoh |
|--------|--------|
| Keyword | `color: blue;` |
| HEX | `color: #fc4912;` |
| RGB | `color: rgb(29, 191, 64);` |
| RGBA | `color: rgba(118, 52, 181, 0.3);` |
| HSL | `color: hsl(60, 80%, 30%);` |

### 9️⃣ CSS Box Model
Komponen kotak elemen:
```
┌──────────── Margin ────────────┐
│  ┌──────── Border ──────────┐  │
│  │  ┌──── Padding ──────┐   │  │
│  │  │                   │   │  │
│  │  │     Content       │   │  │
│  │  │                   │   │  │
│  │  └───────────────────┘   │  │
│  └──────────────────────────┘  │
└────────────────────────────────┘
```

**`box-sizing`**:
- `content-box` (default): Width hanya konten
- `border-box`: Width termasuk padding & border ✅

### 🔟 CSS Background
```css
div {
    background: url('image.jpg') bottom right / 700px 400px no-repeat scroll padding-box content-box red;
}
```

### 1️⃣1️⃣ CSS Positioning
| Value | Deskripsi |
|-------|-----------|
| `static` | Default, mengikuti flow dokumen |
| `relative` | Relatif terhadap posisi normal |
| `absolute` | Relatif terhadap parent positioned |
| `fixed` | Relatif terhadap viewport (tidak bergerak saat scroll) |
| `sticky` | Hybrid relative & fixed |

**`z-index`**: Mengatur urutan tumpukan elemen

### 📝 Tugas CSS Dasar
- ✅ Buat file **`horizontal_nav.html`**
- ✅ Terapkan CSS pada struktur `<nav>` → `<ul>` → `<li>` → `<a>`
- ✅ Buat navigasi horizontal dengan efek hover & active state
- ✅ Dokumentasikan dalam Laporan Praktikum

---

## 📗 Materi Tingkat Lanjut (Studi Kasus)

Studi kasus ini membangun **website lengkap** dengan 5 section utama + responsive design.

### 🎨 CSS Variables (Custom Properties)
```css
:root {
    --main-color: #ffd95c;
    --main-color-hover: #e6c34f;
    --dark-color: #2b2b2b;
    --container-width: 1100px;
}
```

### 📱 Breakpoint Responsive
| Device | Breakpoint |
|--------|-----------|
| 🖥️ Desktop | Default |
| 📱 Tablet | `max-width: 768px` |
| 📲 Handphone | `max-width: 481px` |

### 1️⃣ Persiapan Dokumen
- Setup HTML5 boilerplate
- Link **Font Awesome 6.2.0** via CDN
- Import external CSS
- Definisikan CSS variables & breakpoint

### 2️⃣ Header Section
- **Sticky navigation** dengan `position: sticky`
- **Logo** + **Menu navigasi** dengan Flexbox
- **Hamburger menu** untuk mobile (menggunakan `<input type="checkbox">` + CSS `:checked`)
- Hover effect dengan border bawah

### 3️⃣ Hero Section
- Background image dengan **overlay gradient** (`linear-gradient`)
- `background-attachment: fixed` untuk efek parallax
- `background-size: cover` untuk full coverage
- Tinggi: `70vh` (70% viewport height)

### 4️⃣ Showcase Section
- Layout **2 kolom** dengan Flexbox (`flex-direction: row`)
- Alternating background dengan `:nth-child(even)`
- Responsive: berubah jadi **1 kolom** di tablet/mobile

### 5️⃣ Blog Section
- Layout **3 kolom** dengan `flex-flow: row wrap`
- Card design dengan border & border-radius
- Responsive: 2 kolom (tablet) → 1 kolom (mobile)

### 6️⃣ Footer Section
- **4 kolom** dengan Flexbox
- **Font Awesome icons** untuk kontak (envelope, phone, globe)
- **Social media icons** (Facebook, Twitter, Instagram, GitHub)
- Responsive: 2 kolom (tablet) → 1 kolom (mobile)

---

## 📝 Tugas Praktikum

### 🎯 Tugas 1: CSS Dasar
| No | Item | Keterangan |
|----|------|------------|
| 1 | File | `horizontal_nav.html` |
| 2 | Output | Navigasi horizontal dengan efek hover |
| 3 | Dokumentasi | Screenshot kode, output browser, penjelasan |

### 🎯 Tugas 2: CSS Lanjut (Studi Kasus)
| No | Item | Keterangan |
|----|------|------------|
| 1 | File | `index.html` + `assets/style.css` |
| 2 | Output | **Clone tampilan halaman berita** SI Telkom University Surabaya |
| 3 | Referensi | [bis-sby.telkomuniversity.ac.id](https://bis-sby.telkomuniversity.ac.id/pentingnya-integritas-sebagai-fondasi-karakter-mahasiswa-sistem-informasi/) |
| 4 | Requirement | **Responsive Design** (Desktop, Tablet, Mobile) |
| 5 | Deployment | Online-kan ke **Vercel** atau **Netlify** |
| 6 | Dokumentasi | Screenshot + URL domain deployment |

---

## 🚀 Cara Menjalankan

### Metode 1: Langsung di Browser
```bash
# Buka file HTML dengan double-click
# atau klik kanan → Open with → Browser
```

### Metode 2: Menggunakan Live Server (Recommended) ⚡
1. Buka folder proyek di **VS Code**
2. Install extension **Live Server**
3. Klik **"Go Live"** di status bar kanan bawah
4. Browser akan otomatis terbuka di `http://127.0.0.1:5500/`
5. Setiap perubahan kode akan **auto-refresh** 🔄

### 📱 Testing Responsive Design
1. Buka browser (Chrome/Edge/Firefox)
2. Tekan **F12** atau **Ctrl+Shift+I** untuk buka DevTools
3. Klik ikon **Toggle Device Toolbar** (Ctrl+Shift+M)
4. Pilih device: **iPad** (768px) atau **iPhone** (375px)
5. Test semua breakpoint! 📱💻🖥️

---

## 🌍 Cara Deployment

### Opsi 1: Vercel ▲ (Recommended)
1. Login di [vercel.com](https://vercel.com) dengan GitHub
2. Klik **"Add New Project"**
3. Import repository dari GitHub
4. Framework Preset: **Other**
5. Klik **Deploy**
6. Dapatkan URL otomatis (contoh: `modul2-css.vercel.app`)

### Opsi 2: Netlify 🔷
1. Login di [netlify.com](https://netlify.com)
2. Drag & drop folder proyek ke dashboard, atau
3. Import dari GitHub → Auto deploy
4. Dapatkan URL (contoh: `modul2-css.netlify.app`)

### Opsi 3: GitHub Pages 🐙
1. Push repository ke GitHub
2. Buka **Settings** → **Pages**
3. Pilih branch `main` → **Save**
4. Website tersedia di `https://username.github.io/repository/`

---

## 📦 Pengumpulan Tugas

### Format Pengumpulan
- 📄 **Laporan Praktikum** (`.pdf`)
- 📦 **File HTML + CSS + Tugas** dalam format **`.zip`**

### Isi ZIP File
```
Nama_NIM_Modul2.zip
├── Laporan_Praktikum_Modul2_Nama_NIM.pdf
├── materi-dasar/
│   ├── aturan_dasar_css.html
│   ├── external_css.html
│   ├── ... (semua file materi)
│   └── positioning.html
├── horizontal_nav.html
├── index.html
└── assets/
    ├── style.css
    └── images/
        ├── logo.png
        ├── bg.jpg
        └── strawberries.jpg
```

### 📝 Isi Laporan Praktikum
1. 📸 Screenshot kode program
2. 🖥️ Screenshot output di browser (Desktop, Tablet, Mobile)
3. 📝 Penjelasan kode program yang ditulis
4. 🌐 **URL domain** dari Vercel/Netlify (untuk tugas lanjut)

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

- [MDN Web Docs - CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)
- [W3Schools CSS Tutorial](https://www.w3schools.com/css/)
- [CSS Tricks - Flexbox Guide](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
- [Font Awesome Icons](https://fontawesome.com/icons)
- [Placehold.co - Image Placeholder](https://placehold.co)
- [Responsive Web Design - MDN](https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design)

---

## 💡 Tips & Tricks

### 🎨 Best Practices CSS
1. ✅ Gunakan **CSS Variables** untuk warna & nilai yang sering dipakai
2. ✅ Gunakan **`box-sizing: border-box`** secara global
3. ✅ Reset margin & padding dengan `* { margin: 0; padding: 0; }`
4. ✅ Gunakan **class** daripada ID untuk styling (lebih reusable)
5. ✅ Mobile-first atau Desktop-first? Konsisten di satu pendekatan!

### 📱 Responsive Design Tips
1. ✅ Gunakan **relative units** (`rem`, `em`, `%`, `vh/vw`)
2. ✅ Gunakan **Flexbox** atau **CSS Grid** untuk layout
3. ✅ Test di berbagai breakpoint (768px, 481px)
4. ✅ Gunakan **`max-width`** daripada `width` untuk gambar
5. ✅ Hindari `position: fixed` di mobile (bisa bermasalah)

### 🐛 Debugging CSS
1. Gunakan **Chrome DevTools** (F12) → tab **Elements**
2. Cek **Computed** untuk melihat nilai final properti
3. Gunakan **outline** (bukan border) untuk debug layout tanpa mempengaruhi ukuran
4. Matikan properti satu per satu untuk menemukan masalah

---

## 📜 Lisensi

Repository ini dibuat untuk keperluan **praktikum akademik** Program Studi Sistem Informasi, Telkom University Surabaya.

---

<div align="center">

**💻 Selamat Belajar & Selamat Coding! 🚀**

*Jangan lupa: CSS itu seperti seni — eksperimen sebanyak mungkin!* 🎨✨

*Dibuat dengan ❤️ untuk Praktikum PAW Modul 2 - 2026*

</div>