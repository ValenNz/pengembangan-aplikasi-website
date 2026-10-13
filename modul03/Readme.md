# ⚡ Praktikum Pemrograman Aplikasi Web (PAW)
## Modul 3: Pengenalan JavaScript

<div align="center">

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![VS Code](https://img.shields.io/badge/VS_Code-007ACC?style=for-the-badge&logo=visual-studio-code&logoColor=white)
![ES6+](https://img.shields.io/badge/ES6+-✓-yellow?style=for-the-badge)

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
- [📦 Pengumpulan Tugas](#-pengumpulan-tugas)
- [👨‍🏫 Penyusun](#-penyusun)

---

## 📖 Deskripsi

Praktikum Modul 3 ini membahas pengenalan **JavaScript** sebagai bahasa pemrograman **client-side scripting** utama dalam pengembangan aplikasi web. Mahasiswa akan mempelajari cara membuat halaman web menjadi **interaktif dan dinamis** menggunakan JavaScript, mulai dari konsep dasar hingga implementasi **AJAX, JSON, API, dan Form Validation**.

Praktikum dibagi menjadi **2 bagian utama**:
1. **Pengenalan JavaScript Tingkat Dasar** — Sintaks dasar, variabel, tipe data, operator, logika, perulangan, dan function.
2. **Pengenalan JavaScript Tingkat Lanjut** — Object, OOP, Built-in Object, Form Validation, AJAX, JSON, API, dan Fetch.

---

## 🎯 Tujuan Pembelajaran

Setelah mengikuti praktikum ini, mahasiswa diharapkan mampu:
- ✅ Memahami cara menjalankan JavaScript (Inline, Internal, External, Defer).
- ✅ Menggunakan tag `<noscript>` untuk fallback.
- ✅ Mendeklarasikan **variabel** (`var`, `let`, `const`) dan memahami **typeless programming**.
- ✅ Menguasai **tipe data** JavaScript (Number, String, Boolean, Null, Array, Object).
- ✅ Menerapkan **operator** (aritmatika, increment/decrement, spread operator).
- ✅ Mengimplementasikan **struktur logika** (if, if-else, switch) dan **perulangan** (for, for-of, for-in).
- ✅ Membuat **function** (normal, const, arrow function) dengan parameter & default value.
- ✅ Memahami konsep **Object** dan **Object Oriented Programming (OOP)** dengan `class`.
- ✅ Menggunakan **Built-in Object** (Number, Math, String, Array).
- ✅ Memahami **Global Property & Function** (NaN, Infinity, parseInt, parseFloat).
- ✅ Membuat **Form Validation** dengan JavaScript.
- ✅ Mengimplementasikan **AJAX** dengan `XMLHttpRequest`.
- ✅ Mengolah data **JSON**, memanggil **API**, dan menggunakan **Fetch API**.
- ✅ Membuat **Aplikasi Kalkulator** sederhana dengan HTML, CSS, dan JavaScript.

---

## 🛠️ Tools yang Digunakan

| Tool | Deskripsi | Link Download |
|------|-----------|---------------|
| 🖥️ **Visual Studio Code** | Code Editor utama | [Download](https://code.visualstudio.com/download) |
| ⚡ **Live Server** (Extension) | Auto-refresh browser saat coding | Install via VS Code Extensions |
| 🔍 **Chrome DevTools** | Debugging JavaScript (Console, Network, Sources) | Built-in di Chrome (F12) |
| 🌐 **ReqRes API** | Dummy API untuk testing Fetch | [reqres.in](https://reqres.in) |
| 📡 **Postman** (Opsional) | Testing API | [postman.com](https://www.postman.com) |

---

## 📁 Struktur Folder

```
modul-3-pengenalan-javascript/
│
├── 📂 materi-dasar/
│   ├── 📄 hello_world.html
│   ├── 📄 inline_js.html
│   ├── 📄 internal_js.html
│   ├── 📄 external_js.html
│   ├── 📄 external_defer.html
│   ├── 📄 no_script.html
│   ├── 📄 variables.html
│   ├── 📄 data_type.html
│   ├── 📄 operator.html
│   ├── 📄 logic.html
│   └── 📄 function.html
│
├── 📂 materi-lanjut/
│   ├── 📄 object_js.html
│   ├── 📄 oop_js.html
│   ├── 📄 built_in_object.html
│   ├── 📄 global_js.html
│   ├── 📄 form.html
│   ├── 📄 ajax.html
│   └── 📄 json_api_fetch.html
│
├── 📂 tugas/
│   └── 📄 kalkulator.html         # Tugas JavaScript Dasar
│
├── 📂 assets/
│   ├── 📜 my_code.js              # External JS
│   ├── 📜 my_code_1.js            # External JS (Defer)
│   ├── 📜 my_code_2.js            # External JS (Defer)
│   └── 📄 salam.txt               # File teks untuk AJAX
│
├── 📄 index.html                  # Halaman utama (opsional)
└── 📄 README.md                   # Dokumentasi repository
```

---

## 📘 Materi Tingkat Dasar

### 1️⃣ Hello World
Menampilkan teks "Hello World" menggunakan JavaScript:
```javascript
document.getElementById("myH1").innerHTML = "Hello World";
```

### 2️⃣ Inline JavaScript
JavaScript langsung pada atribut HTML:
```html
<button onclick="document.getElementById('myH1').innerHTML='Hello World'">
    Click me!
</button>
```

### 3️⃣ Internal JavaScript
JavaScript di dalam tag `<script>` pada HTML:
```html
<script>
    document.getElementById("myButton").addEventListener("click", 
        () => document.getElementById("myH1").innerHTML = "Hello World"
    );
</script>
```

### 4️⃣ External JavaScript
Menghubungkan file JavaScript eksternal:
```html
<script src="assets/my_code.js"></script>
```
✅ **Kelebihan**: Reusable, cacheable, memisahkan struktur & logika

### 5️⃣ External Defer
Atribut `defer` membuat script dijalankan **setelah HTML selesai di-parse**:
```html
<script src="./assets/my_code_1.js" defer></script>
<script src="./assets/my_code_2.js" defer></script>
```
⚡ **Urutan eksekusi dijamin** sesuai urutan tag `<script>`

### 6️⃣ No Script
Fallback untuk browser yang tidak mendukung/mematikan JavaScript:
```html
<noscript>
    <h2>JavaScript tidak aktif, mohon diaktifkan untuk mengakses halaman ini</h2>
</noscript>
```

### 7️⃣ Variables
Deklarasi variabel dengan `var`, `let`, dan `const`:

| Keyword | Scope | Reassign | Redeclare |
|---------|-------|----------|-----------|
| `var` | Function | ✅ | ✅ |
| `let` | Block | ✅ | ❌ |
| `const` | Block | ❌ | ❌ |

```javascript
let angka = 192;
const PI = 3.14;
const SEMANGAT = "Semangat Pagi";
```

💡 JavaScript adalah **Typeless Programming Language** — tipe data ditentukan saat runtime.

### 8️⃣ Data Types
Tipe data primitif & referensi di JavaScript:

| Tipe | Contoh | typeof |
|------|--------|--------|
| **Number** | `100`, `-5000`, `0.66634` | `"number"` |
| **String** | `"Hello World"` | `"string"` |
| **Boolean** | `true`, `false` | `"boolean"` |
| **Null** | `null` | `"object"` (bug historis) |
| **Undefined** | `undefined` | `"undefined"` |
| **Array** | `["Andri", "Joko"]` | `"object"` |
| **Object** | `{nama: "Budi"}` | `"object"` |

**Template String** (ES6):
```javascript
let name = "Purnama";
let hello = `Semangat Pagi ${name}`;
```

**Array Destructuring**:
```javascript
let mahasiswa = ["Andi", "Lisa", "Eko"];
let [a, b, c] = mahasiswa;
```

### 9️⃣ Operator
**Aritmatika**: `+`, `-`, `*`, `/`, `%`, `**` (pangkat)

**Increment & Decrement**:
- `++val` (pre-increment) vs `val++` (post-increment)
- `--val` (pre-decrement) vs `val--` (post-decrement)

**Spread Operator** (`...`):
```javascript
let nilai1 = ["a", "b", "c"];
let nilai3 = [...nilai1, "e", "f"];

let mahasiswa = { nama: "Budi", umur: 19 };
let mahasiswa1 = { ...mahasiswa, umur: 20, tempatLahir: "Surabaya" };
```

### 🔟 Logic
**Conditional Statement**:
- `if`, `if-else`, `switch-case`

**Perulangan**:
- `for` klasik
- `for-of` (untuk Array)
- `for-in` (untuk Object)
- Menggunakan `array.length`

```javascript
for (let i of siswas) { console.log(i); }
for (let prop in mobil) { console.log(mobil[prop]); }
```

### 1️⃣1️⃣ Function
**Normal Function**:
```javascript
function pagi() { return "Semangat Pagi"; }
```

**Function dengan Parameter & Default Value**:
```javascript
function rata2(a = 10, b = 10, c = 10, d = 10) {
    return (a + b + c + d) / 4;
}
```

**Arrow Function** (ES6):
```javascript
const kuadrat = (a) => a * a;
const greeting = () => "Semangat Pagi";
const greeting2 = (kapan, siapa) => `Selamat ${kapan}, ${siapa}`;
```

### 📝 Tugas CSS Dasar
- ✅ Buat file **`kalkulator.html`**
- ✅ Terapkan **HTML + CSS + JavaScript** untuk membuat aplikasi kalkulator
- ✅ Dokumentasikan dalam Laporan Praktikum

---

## 📗 Materi Tingkat Lanjut

### 1️⃣ Tipe Data Object
Object adalah kumpulan **key-value pairs**:
```javascript
let mahasiswa = {
    nama: "Purnama",
    jurusan: "Sistem Informasi",
    ipk: 3.67,
    semester: 4
};

// Akses properti
console.log(mahasiswa.nama);
console.log(mahasiswa["ipk"]);

// Tambah & ubah properti
mahasiswa.ipk = 3.75;
```

**Object Method**:
```javascript
let mobil = {
    nama: "Toyota Avanza",
    hidupkan: function() { return "Mesin dihidupkan"; }
};
```

### 2️⃣ Object Oriented Programming (OOP)
Membuat **class** dengan `constructor` dan **method**:
```javascript
class Mobil {
    constructor(nama, tipe, harga) {
        this.nama = nama;
        this.tipe = tipe;
        this.harga = harga;
    }
    
    hidupkan() { return `Mesin ${this.nama} dihidupkan`; }
    pergi(tempat) { return `Pergi ke ${tempat} dengan ${this.nama}`; }
}

let mobilAndi = new Mobil("Daihatsu Xenia", "MPV", 220000000);
```

### 3️⃣ Built-in Object
**Number**:
```javascript
Number.MAX_VALUE
Number.isInteger(12) // true
```

**Math**:
```javascript
Math.PI, Math.E
Math.floor(12.5)  // 12
Math.ceil(12.5)   // 13
Math.round(12.5)  // 13
Math.random()     // 0-1
Math.pow(5, 2)    // 25
```

**String**:
```javascript
text.length
text.toLowerCase()
text.toUpperCase()
```

**Array**:
```javascript
Array.isArray(arr)
arr.length
arr.forEach(element => console.log(element));
```

### 4️⃣ Global Property dan Function
**Global Property**:
- `NaN`, `Infinity`, `undefined`, `null`

**Global Function**:
```javascript
parseInt("1234.567")  // 1234
parseFloat("1234")    // 1234
```

### 5️⃣ Form Validation
Validasi form menggunakan JavaScript:
- **Username**: tidak kosong, alfanumerik, minimal 6 karakter
- **Password**: tidak kosong, minimal 6 karakter
- **Konfirmasi Password**: harus sama dengan password
- **Checkbox**: harus dicentang

```javascript
if (usernameNode.value.trim() === "") {
    usernameError = "Username harus diisi";
} else if (/\W/.test(usernameNode.value.trim())) {
    usernameError = "Hanya bisa diisi karakter alfanumerik";
}

// Cegah submit dengan e.preventDefault()
formKuNode.addEventListener("submit", diProses);
```

### 6️⃣ Asynchronous Javascript and XML (AJAX)
Mengambil data dari file/server tanpa reload halaman:
```javascript
const getAJAX = () => {
    let request = new XMLHttpRequest();
    request.open("GET", "./assets/salam.txt", false);
    request.send();
    hasilNode.innerHTML = request.responseText;
};
```

### 7️⃣ JSON, API, Fetch
**JSON Parse** (String → Object):
```javascript
let mahasiswa = JSON.parse(mahasiswaJSON);
```

**JSON Stringify** (Object → String):
```javascript
let mahasiswa2JSON = JSON.stringify(mahasiswa2);
```

**Fetch API** (Modern AJAX):
```javascript
fetch("https://reqres.in/api/users/1")
    .then(response => response.json())
    .then(data => {
        let user = data.data;
        console.log("Nama:", user.first_name);
    });
```

### 📝 Tugas JavaScript Lanjut
- ✅ Praktekkan seluruh materi tingkat lanjut
- ✅ Dokumentasikan dalam Laporan Praktikum

---

## 📝 Tugas Praktikum

### 🎯 Tugas 1: JavaScript Dasar
| No | Item | Keterangan |
|----|------|------------|
| 1 | File | `kalkulator.html` |
| 2 | Output | Aplikasi **Kalkulator** sederhana |
| 3 | Tech Stack | HTML + CSS + JavaScript |
| 4 | Dokumentasi | Screenshot kode, output browser, penjelasan |

### 🎯 Tugas 2: JavaScript Lanjut
| No | Item | Keterangan |
|----|------|------------|
| 1 | File | Semua file materi lanjut (`object_js.html`, `oop_js.html`, dll) |
| 2 | Output | Sesuai materi praktikum |
| 3 | Dokumentasi | Screenshot kode, output browser, penjelasan |

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

### 🔍 Debugging JavaScript dengan DevTools
1. Buka browser (Chrome/Edge/Firefox)
2. Tekan **F12** atau **Ctrl+Shift+I** untuk buka DevTools
3. Pilih tab:
   - 📋 **Console** — Lihat output `console.log()` & error
   - 🌐 **Network** — Monitor request AJAX/Fetch
   - 📜 **Sources** — Debug dengan breakpoint
   - 💾 **Application** — Lihat localStorage, sessionStorage

### 💡 Tips Console
```javascript
console.log("Log biasa");
console.warn("Peringatan");
console.error("Error!");
console.table(array);       // Tampilkan array sebagai tabel
console.time("timer");      // Mulai timer
console.timeEnd("timer");   // Akhiri timer
```

---

## 📦 Pengumpulan Tugas

### Format Pengumpulan
- 📄 **Laporan Praktikum** (`.pdf`)
- 📦 **File HTML + JS + Tugas** dalam format **`.zip`**

### Isi ZIP File
```
Nama_NIM_Modul3.zip
├── Laporan_Praktikum_Modul3_Nama_NIM.pdf
├── materi-dasar/
│   ├── hello_world.html
│   ├── inline_js.html
│   ├── ... (semua file materi dasar)
│   └── function.html
├── materi-lanjut/
│   ├── object_js.html
│   ├── ... (semua file materi lanjut)
│   └── json_api_fetch.html
├── tugas/
│   └── kalkulator.html
└── assets/
    ├── my_code.js
    ├── my_code_1.js
    ├── my_code_2.js
    └── salam.txt
```

### 📝 Isi Laporan Praktikum
1. 📸 Screenshot kode program
2. 🖥️ Screenshot output di browser (termasuk Console)
3. 📝 Penjelasan kode program yang ditulis
4. 🐛 **Screenshot error** (jika ada) dan cara memperbaikinya

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

- [MDN Web Docs - JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
- [W3Schools JavaScript Tutorial](https://www.w3schools.com/js/)
- [JavaScript.info - The Modern JavaScript Tutorial](https://javascript.info)
- [ES6 Features](https://es6-features.org)
- [ReqRes - Dummy REST API](https://reqres.in)
- [JSON Formatter & Validator](https://jsonformatter.curiousconcept.com)

---

## 💡 Tips & Tricks

### 🎨 Best Practices JavaScript
1. ✅ Gunakan `let` dan `const` daripada `var` (ES6+)
2. ✅ Gunakan **Template Literal** (`` ` ``) daripada concatenation `+`
3. ✅ Gunakan **Arrow Function** untuk callback singkat
4. ✅ Gunakan **Spread Operator** untuk copy/merge array & object
5. ✅ Selalu gunakan `===` (strict equality) daripada `==`
6. ✅ Gunakan `const` untuk nilai yang tidak berubah

### 🐛 Debugging JavaScript
1. Gunakan **`console.log()`** untuk tracking nilai variabel
2. Gunakan **Chrome DevTools** → tab **Sources** untuk breakpoint
3. Cek tab **Console** untuk melihat error & warning
4. Cek tab **Network** untuk monitoring AJAX/Fetch request
5. Gunakan **`debugger;`** statement untuk pause eksekusi

### ⚠️ Common Mistakes
1. ❌ Lupa `let`/`const` saat deklarasi variabel
2. ❌ Menggunakan `=` (assignment) bukan `===` (comparison) di `if`
3. ❌ Lupa `()` saat memanggil function
4. ❌ Lupa `return` di function yang harus mengembalikan nilai
5. ❌ Menggunakan `==` yang melakukan type coercion
6. ❌ Lupa `e.preventDefault()` di form validation
7. ❌ Tidak handle error di Fetch API

### 🌐 Fetch API Best Practices
```javascript
fetch(url)
    .then(response => {
        if (!response.ok) throw new Error("Network error");
        return response.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error("Error:", error));
```

### 🎯 Async/Await (Modern Alternative)
```javascript
async function getData() {
    try {
        const response = await fetch(url);
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error("Error:", error);
    }
}
```

---

## 📜 Lisensi

Repository ini dibuat untuk keperluan **praktikum akademik** Program Studi Sistem Informasi, Telkom University Surabaya.

---

<div align="center">

**💻 Selamat Belajar & Selamat Coding! 🚀**

*JavaScript makes the web alive! Let's make it interactive!* ⚡✨

*Dibuat dengan ❤️ untuk Praktikum PAW Modul 3 - 2026*

</div>