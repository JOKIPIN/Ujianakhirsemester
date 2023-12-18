# Ujianakhirsemester
**Nasrul Alfin Prassetyo**
**121140001**
**Teknik informatika**


Bagian 1: Client-side Programming (Bobot: 30%)
1.1 (15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.
Panduan:
- Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)
- Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`
1.2 (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web
Panduan:
- Tambahkan minimal 3 event yang berbeda untuk menghandle form pada 1.1
- Implementasikan JavaScript untuk validasi setiap input sebelum diproses oleh PHP
Bagian 2: Server-side Programming (Bobot: 30%)
![gambar](https://github.com/JOKIPIN/Ujianakhirsemester/assets/96344530/a016176e-c74b-454b-8c78-e692101cb1af)
# README

## script.js

File `script.js` adalah skrip JavaScript yang meningkatkan fungsionalitas halaman HTML. Berikut adalah penjelasan fitur-fiturnya:

1. **Event Listener:**
   - Mendengarkan event `DOMContentLoaded`, memastikan bahwa skrip dijalankan setelah HTML sepenuhnya dimuat.
   - Menangani event pengiriman formulir:
     - Memanggil fungsi `validateForm()` untuk memeriksa apakah input formulir valid.
     - Mencegah formulir dikirim jika validasi gagal.

2. **Event Checkbox dan Radio Button:**
   - Mendengarkan perubahan pada checkbox "Hadir" dan radio button "Jenis Kelamin".
   - Memanggil fungsi `updateTable()` untuk memperbarui tabel secara dinamis berdasarkan input pengguna.

3. **Fungsi:**
   - `validateForm()`: Memeriksa apakah bidang "Nama" dan "Email" diisi sebelum pengiriman. Menampilkan peringatan jika tidak dan mengembalikan `false`.
   - `updateTable()`: Mengambil nilai dari input formulir dan memperbarui tabel secara dinamis dengan membuat baris baru dan menyisipkan sel.

## proses_tambah.php

Skrip `proses_tambah.php` menangani pemrosesan data formulir yang dikirimkan melalui halaman HTML. Poin-poin utama meliputi:

1. **Pengecekan Pengiriman Formulir:**
   - Memeriksa apakah server menerima permintaan POST. Jika tidak, mencetak pesan kesalahan.

2. **Pengambilan Data:**
   - Mengambil data dari permintaan POST yang sesuai dengan bidang "Nama," "Email," "Jenis Kelamin," dan "Hadir."

3. **Pemrosesan atau Penyimpanan:**
   - Pada tahap ini, Anda dapat melakukan berbagai tindakan, seperti menyimpan data ke database atau memproses lebih lanjut.

4. **Respon:**
   - Dalam contoh ini, skrip mencetak respons sederhana, mencetak data yang diterima.

## Penggunaan:

1. Jalankan halaman HTML (`index.html`) melalui server lokal.
2. Buka halaman tersebut di peramban web.
3. Isi formulir dan kirimkan.
4. Skrip JavaScript meningkatkan pengalaman pengguna dengan memperbarui tabel secara dinamis.
5. Skrip PHP (`proses_tambah.php`) memproses data formulir yang dikirimkan di server.



2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.

Panduan:
- Gunakan metode POST atau GET pada formulir.
- Parsing data dari variabel global dan lakukan validasi disisi server
- Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna

2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.

Panduan:
- Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini.
Bagian 3: Database Management (Bobot: 20%)

3.1 (5%) Buatlah sebuah tabel pada database MySQL

Panduan:
- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata

3.2 (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.

Panduan:
- Gunakan konstanta atau variabel untuk menyimpan informasi koneksi (host, username, password, nama database).

3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.

Panduan:
- Gunakan query SQL yang sesuai dengan skenario yang diberikan.
Bagian 4: State Management (Bobot: 20%)

4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.

Panduan:
- Gunakan `session_start()` untuk memulai session.
- Simpan informasi pengguna ke dalam session.

4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.

Panduan:
- Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.
- Gunakan browser storage untuk menyimpan informasi secara lokal.
Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)

Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:

    (5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
    (5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
    (5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
    (5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.

Catatan:
