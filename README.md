# Lab_7_Web

---
| Komponen | Keterangan |
| :--- | :--- |
| **Mata Kuliah** | Pemrograman Web |
| **Nomor Modul** | 7 |
| **Topik** | Pemrograman server-side dengan PHP |
| **Cakupan** | Sintaks PHP, variabel, function, form processing, dan pengolahan data |
| **Nama / NIM** | [Muhammad Zabbar Maulana] / [312510406] |
| **Kelas** | [I251D] |
---

# Praktikum 7 – Pemrograman Server-Side dengan PHP

## Tujuan Praktikum
1. Memahami perbedaan pemrosesan client-side dan server-side.
2. Mengenal sintaks dasar PHP.
3. Memahami penggunaan variabel dan tipe data.
4. Menggunakan operator, percabangan, dan perulangan.
5. Membuat dan menggunakan function.
6. Memproses data form menggunakan GET dan POST.
7. Memahami validasi dan sanitasi input pengguna.
8. Membuat aplikasi sederhana menggunakan PHP.

## Perangkat yang Digunakan
- Laptop atau PC.
- Visual Studio Code.
- XAMPP.
- PHP.
- Web Browser (Google Chrome).

## Struktur Repository

````text
Lab7Web_PHP/
│
├──index.php
├── miniproject.php
├── eksperimen_mandiri.php
└── README.md
````


## Langkah Kerja Praktikum

### Latihan 1 – Menjalankan PHP
Membuat file PHP sederhana untuk menampilkan teks menggunakan `echo` dan menampilkan waktu server menggunakan fungsi `date()`.

### Latihan 2 – Variabel, Operator, dan Percabangan
Membuat program perhitungan nilai akhir mahasiswa berdasarkan nilai tugas, UTS, dan UAS.

Bobot penilaian:
- Tugas: 30%
- UTS: 30%
- UAS: 40%

Program menggunakan percabangan `if`, `elseif`, dan `else` untuk menentukan predikat nilai.

### Latihan 3 – Perulangan dan Array
Membuat array yang berisi daftar nama mahasiswa dan menampilkan seluruh data menggunakan perulangan `foreach`.

### Latihan 4 – Membuat Function
Membuat function untuk menghitung harga setelah mendapatkan diskon berdasarkan harga awal dan persentase diskon.

### Latihan 5 – Memproses Form dengan GET
Membuat form pencarian menggunakan metode GET untuk menerima kata kunci dari pengguna.

### Latihan 6 – Memproses Form dengan POST
Membuat form untuk memasukkan nama dan program studi mahasiswa menggunakan metode POST.

Program melakukan pemeriksaan terhadap input kosong dan menampilkan data yang sudah diterima.

### Latihan 7 – Pengolahan Data Sederhana
Membuat program pengolahan data barang yang menerima nama barang, harga, dan jumlah.

Program menghitung subtotal berdasarkan harga dikalikan jumlah barang serta melakukan validasi input.

<img width="1279" height="601" alt="Screenshot 2026-11-12 110359" src="https://github.com/user-attachments/assets/14447b24-ab4a-4e10-99da-6b59376bd8f8" />
<img width="1279" height="122" alt="Screenshot 2026-11-12 110514" src="https://github.com/user-attachments/assets/9b25f650-9c61-4dfd-8ec9-8284f96dfa6c" />

## Mini Project F – Aplikasi Formulir Data Mahasiswa

Membuat aplikasi formulir data mahasiswa menggunakan PHP dengan metode POST.

Data yang dimasukkan:
- Nama mahasiswa.
- NIM.
- Program studi.
- Semester.
- Email.

Program dilengkapi validasi server-side untuk memastikan data yang dimasukkan sesuai ketentuan. Data yang valid akan ditampilkan kembali menggunakan `htmlspecialchars()`.

<img width="1279" height="667" alt="Screenshot 2026-11-12 112453" src="https://github.com/user-attachments/assets/bead3a41-ca5d-4afc-9575-9feb4fbe8614" />
<img width="1274" height="669" alt="Screenshot 2026-11-12 112521" src="https://github.com/user-attachments/assets/fb9273ae-b11f-4762-a238-720cd189b4b1" />
<img width="1279" height="667" alt="Screenshot 2026-11-12 112203" src="https://github.com/user-attachments/assets/b632e113-fcbb-4e78-9dc9-813610bf914d" />
<img width="1279" height="667" alt="Screenshot 2026-11-12 112134" src="https://github.com/user-attachments/assets/496789b9-e0a7-4d10-a2d0-920130db0f53" />


## Eksperimen Mandiri G

Eksperimen mandiri dilakukan untuk mengembangkan pemahaman mengenai pemrograman PHP.

Kegiatan yang dilakukan:
1. Menambahkan perhitungan nilai rata-rata dari tiga komponen nilai.
2. Mengembangkan pencarian nama menggunakan metode GET dan array.
3. Membuat function untuk mengubah format harga menjadi Rupiah.
4. Menambahkan validasi NIM agar hanya berisi angka dengan panjang sesuai ketentuan.
5. Menambahkan tombol reset pada form.

**<img width="1279" height="667" alt="Screenshot 2026-11-12 182426" src="https://github.com/user-attachments/assets/beea5cf3-53ee-47d4-881a-5e30c94a9706" />
** Program dikembangkan dengan menambahkan fitur perhitungan, pencarian data, format Rupiah, validasi NIM, dan reset form.

## Cara Menjalankan Program

1. Pastikan XAMPP sudah terinstal.
2. Jalankan Apache melalui XAMPP Control Panel.
3. Salin folder `Lab7Web_PHP` ke dalam direktori `htdocs`.
4. Buka Visual Studio Code dan buka folder proyek.
5. Buka browser Google Chrome.
6. Masukkan alamat berikut:

```text
http://localhost/Lab7Web_PHP/index.php
```

7. Untuk menjalankan setiap latihan, buka folder masing-masing melalui URL localhost.

Contoh:

```text
http://localhost/Lab7Web_PHP/index.php/
http://localhost/Lab7Web_PHP/Mini_Projek.php/
```

## Pengujian Program

Pengujian dilakukan menggunakan beberapa kondisi input.

**Input Valid:**
1. Mengisi form dengan nama dan data mahasiswa secara lengkap.
2. Memasukkan harga barang dan jumlah barang dengan nilai yang sesuai.

**Input Tidak Valid:**
1. Mengosongkan kolom yang wajib diisi.
2. Memasukkan semester di luar rentang 1–14 atau NIM yang mengandung karakter selain angka.

## Kesimpulan

Berdasarkan praktikum yang telah dilakukan, saya dapat memahami dasar pemrograman server-side menggunakan PHP. Saya juga mempelajari cara mengolah data, menggunakan function, perulangan, percabangan, serta memproses form menggunakan metode GET dan POST.

Melalui praktikum ini, saya memperoleh pemahaman mengenai validasi dan sanitasi input sebagai bagian penting dalam pembuatan aplikasi web.

---
