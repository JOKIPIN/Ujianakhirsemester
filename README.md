# Ujianakhirsemester
**Nasrul Alfin Prassetyo**

**121140001**

**Teknik informatika**

https://universitasnatar.000webhostapp.com/ 

![gambar](https://github.com/JOKIPIN/Ujianakhirsemester/assets/96344530/8929760a-9d2c-43f3-97c5-9468be932896)

**Bagian 1: Client-side Programming (Bobot: 30%)**

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


## Penggunaan:

1. Jalankan halaman HTML (`index.html`) melalui server lokal.
2. Buka halaman tersebut di peramban web.
3. Isi formulir dan kirimkan.
4. Skrip JavaScript meningkatkan pengalaman pengguna dengan memperbarui tabel secara dinamis.
5. Skrip PHP (`proses_tambah.php`) memproses data formulir yang dikirimkan di server.




**2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.**

Panduan:
- Gunakan metode POST atau GET pada formulir.
- Parsing data dari variabel global dan lakukan validasi disisi server
- Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna

2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.

Panduan:
- Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini.
Bagian 3: Database Management (Bobot: 20%)
# README

## Menu "Input Absensi" dan Fungsi Kodenya

### 1. Input Absensi

Menu "Input Absensi" pada aplikasi ini memungkinkan pengguna untuk memasukkan data absensi, seperti Nama, Tanggal, dan Kehadiran, melalui formulir. Berikut adalah penjelasan fitur dan fungsionalitasnya:

- **Formulir Input Absensi:**
  - Terdapat formulir yang meminta informasi seperti Nama, Tanggal, dan Kehadiran.
  - Setelah mengisi formulir, pengguna dapat mengirimkan data absensi.

- **Validasi Input:**
  - Sebuah fungsi JavaScript (`script.js`) digunakan untuk melakukan validasi input sebelum formulir dikirim ke server.
  - Validasi mencakup memastikan bahwa Nama dan Tanggal diisi.

- **Interaksi dengan Server:**
  - Data yang dimasukkan ke dalam formulir akan dikirimkan ke server menggunakan metode POST pada formulir HTML.
  - Server (proses_absensi.php) akan memproses dan menyimpan data absensi.

### 2. Fungsi Kodenya

#### 2.1. `script.js`

File `script.js` mengandung skrip JavaScript yang meningkatkan interaktivitas halaman dan melakukan validasi formulir sebelum pengiriman. Berikut adalah poin utama dari skrip tersebut:

- **Event Listener:**
  - Mendengarkan event `DOMContentLoaded` untuk memastikan bahwa skrip dijalankan setelah HTML sepenuhnya dimuat.
  - Menangani event pengiriman formulir dan memanggil fungsi validasi.

- **Validasi Formulir:**
  - `validateForm()`: Fungsi untuk memeriksa apakah bidang "Nama" dan "Tanggal" diisi sebelum formulir dikirim. Menampilkan peringatan jika tidak.

- **Update Tabel:**
  - `updateTable()`: Fungsi untuk memperbarui tabel secara dinamis dengan data absensi baru setelah formulir dikirim.

#### 2.2. `proses_absensi.php`

File `proses_absensi.php` adalah skrip server-side PHP yang memproses data absensi yang dikirimkan melalui formulir. Poin-poin utama melibatkan:

- **Pengecekan Pengiriman Formulir:**
  - Memastikan bahwa server menerima permintaan POST. Jika tidak, mencetak pesan kesalahan.

- **Pengambilan Data:**
  - Mengambil data dari permintaan POST yang sesuai dengan bidang "Nama," "Tanggal," dan "Hadir."

- **Pemrosesan atau Penyimpanan:**
  - Pada tahap ini, Anda dapat melakukan berbagai tindakan, seperti menyimpan data ke database atau melakukan tindakan lainnya.

## Cara Penggunaan:

1. Jalankan halaman HTML (`index.html`) melalui server lokal.
2. Buka halaman tersebut di peramban web.
3. Pilih menu "Input Absensi."
4. Isi formulir absensi dan kirimkan.
5. Skrip JavaScript meningkatkan pengalaman pengguna dengan memperbarui tabel secara dinamis.
6. Skrip PHP (`proses_absensi.php`) memproses dan menyimpan data absensi yang dikirimkan di server.
   ![gambar](https://github.com/JOKIPIN/Ujianakhirsemester/assets/96344530/b4fc138f-8797-4734-badd-74af33cf1eb1)

   # Sistem Informasi Absensi Mahasiswa

Proyek ini adalah sistem informasi sederhana untuk mengelola absensi mahasiswa. Dengan menggunakan PHP dan MySQL, proyek ini memberikan fungsionalitas untuk memasukkan data absensi, melihat data absensi, menambahkan dan menghapus data mahasiswa.

## Daftar Menu

### 1. **Input Absensi**

   - **Deskripsi:** Formulir untuk memasukkan data absensi mahasiswa.
   - **URL:** `form_absensi.php`
   - **Cara Menggunakan:**
     1. Buka `form_absensi.php`.
     2. Isi formulir dengan nama dan status hadir.
     3. Tekan tombol "Submit" untuk menyimpan data absensi.

### 2. **Tampilkan Data Absensi**

   - **Deskripsi:** Menampilkan daftar data absensi mahasiswa.
   - **URL:** `tampilkan_absensi.php`
   - **Cara Menggunakan:**
     1. Buka `tampilkan_absensi.php`.
     2. Lihat daftar data absensi yang telah dimasukkan sebelumnya.

### 3. **Daftar Mahasiswa**

   - **Deskripsi:** Menampilkan daftar mahasiswa yang terdaftar.
   - **URL:** `daftar_mahasiswa.php`
   - **Cara Menggunakan:**
     1. Buka `daftar_mahasiswa.php`.
     2. Lihat daftar mahasiswa beserta NIM dan program studi.

### 4. **Tambah Mahasiswa**

   - **Deskripsi:** Formulir untuk menambahkan mahasiswa ke dalam database.
   - **URL:** `form_tambah_mahasiswa.php`
   - **Cara Menggunakan:**
     1. Buka `form_tambah_mahasiswa.php`.
     2. Isi formulir dengan NIM, nama, dan program studi.
     3. Tekan tombol "Tambah Mahasiswa" untuk menyimpan data mahasiswa.

### 5. **Hapus Mahasiswa**

   - **Deskripsi:** Formulir untuk menghapus mahasiswa dari database.
   - **URL:** `form_hapus_mahasiswa.php`
   - **Cara Menggunakan:**
     1. Buka `form_hapus_mahasiswa.php`.
     2. Isi formulir dengan NIM mahasiswa yang ingin dihapus.
     3. Tekan tombol "Hapus Mahasiswa" untuk menghapus data mahasiswa.



3.1 (5%) Buatlah sebuah tabel pada database MySQL

Panduan:
- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata
-- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata

-- Buat database baru (ganti 'nama_database' sesuai kebutuhan)
CREATE DATABASE nama_database;

-- Pilih database yang baru dibuat
USE nama_database;

-- Buat tabel 'absensi' untuk menyimpan data absensi mahasiswa
CREATE TABLE absensi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    tanggal DATE NOT NULL,
    hadir BOOLEAN NOT NULL
);

-- Buat tabel 'mahasiswa' untuk menyimpan data mahasiswa
CREATE TABLE mahasiswa (
    nim VARCHAR(15) PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    prodi VARCHAR(50) NOT NULL
);

3.2 (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.
![gambar](https://github.com/JOKIPIN/Ujianakhirsemester/assets/96344530/d45033c3-8643-4962-a0d3-c3e4f1a3df2a)
Panduan:
- Gunakan konstanta atau variabel untuk menyimpan informasi koneksi (host, username, password, nama database).
<?php
// Konstanta atau variabel untuk menyimpan informasi koneksi
$hostname = "localhost"; // Ganti dengan nama host MySQL Anda
$username = "nama_pengguna_mysql"; // Ganti dengan username MySQL Anda
$password = "password_mysql"; // Ganti dengan password MySQL Anda
$database = "nama_database"; // Ganti dengan nama database yang telah Anda buat

// Membuat koneksi ke database
$koneksi = mysqli_connect($hostname, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.
<?php
include "koneksi.php";
$query_tambah_absensi = "INSERT INTO absensi (nama, tanggal, hadir) VALUES ('Nama Mahasiswa', '2023-01-01', 1)";

// Menjalankan query
if (mysqli_query($koneksi, $query_tambah_absensi)) {
    echo "Data absensi berhasil ditambahkan.";
} else {
    echo "Error: " . $query_tambah_absensi . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
<?php
include "koneksi.php";
$query_tambah_absensi = "INSERT INTO absensi (nama, tanggal, hadir) VALUES ('Nama Mahasiswa', '2023-01-01', 1)";

// Menjalankan query
if (mysqli_query($koneksi, $query_tambah_absensi)) {
    echo "Data absensi berhasil ditambahkan.";
} else {
    echo "Error: " . $query_tambah_absensi . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
![gambar](https://github.com/JOKIPIN/Ujianakhirsemester/assets/96344530/5a6da058-46af-423d-892d-b01655076584)
![gambar](https://github.com/JOKIPIN/Ujianakhirsemester/assets/96344530/a458399b-8675-41b0-83c9-b8627d590953)
Panduan:
- Gunakan query SQL yang sesuai dengan skenario yang diberikan.
Bagian 4: State Management (Bobot: 20%)

4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.

Panduan:
- Gunakan `session_start()` untuk memulai session.
- Simpan informasi pengguna ke dalam session.
<?php
session_start();
// ...
?>

4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.
<?php
session_start();
$_SESSION['user_id'] = 123;
$_SESSION['username'] = 'user123';
// ...
?>
<?php
session_start();
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
// ...
?>
Panduan:
- Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.
- Gunakan browser storage untuk menyimpan informasi secara lokal.


Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)
Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:

    (5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
    # Hosting Website di 000webhost

## Langkah 1: Membuat Akun di 000webhost

1. Buka [https://www.000webhost.com/](https://www.000webhost.com/) di browser.
2. Klik tombol "Daftar Gratis" untuk membuat akun baru.
3. Isi formulir pendaftaran dengan informasi yang diperlukan.
4. Klik tombol "Buat Akun" untuk menyelesaikan proses pendaftaran.

## Langkah 2: Login ke Akun 000webhost

1. Masuk ke [https://www.000webhost.com/](https://www.000webhost.com/).
2. Gunakan kredensial yang Anda daftarkan untuk login.

## Langkah 3: Buat Website Baru

1. Di dasbor 000webhost, klik tombol "Buat Situs" atau "Tambah Situs" (tergantung pada antarmuka pengguna baru atau lama).
2. Pilih nama domain yang diinginkan atau dapatkan subdomain gratis dari 000webhost.
3. Tentukan kata sandi untuk website Anda.
4. Klik tombol "Buat" atau "Tambah Situs" untuk melanjutkan.

## Langkah 4: Pilih Platform Website

1. Setelah membuat website, Anda akan diberi pilihan untuk memilih platform.
2. Pilih "Website Builder" atau "Upload your Own Website" tergantung pada apakah Anda akan menggunakan pembuat situs web bawaan atau mengunggah situs web Anda sendiri.

## Langkah 5: Upload atau Buat Website

### Upload Website Anda Sendiri:

1. Jika Anda memilih "Upload your Own Website," Anda akan diberikan FTP credentials.
2. Gunakan kredensial FTP ini untuk mengunggah file situs web Anda menggunakan klien FTP seperti FileZilla.

### Gunakan Website Builder:

1. Jika Anda memilih "Website Builder," ikuti langkah-langkah pada alat pembuat situs web yang disediakan.

## Langkah 6: Kelola Domain dan DNS

1. Jika Anda memiliki domain pendaftaran eksternal, Anda perlu mengarahkannya ke server DNS 000webhost.
2. Di 000webhost, buka bagian "Pengaturan Website."
3. Temukan informasi DNS 000webhost dan tambahkan rekaman DNS yang diperlukan di pengaturan domain Anda.

## Langkah 7: Selesai

Setelah langkah-langkah di atas, website Anda seharusnya aktif dan dapat diakses melalui domain yang Anda pilih. Selamat, Anda telah berhasil meng-hosting website Anda di 000webhost!

    (5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
    ## Kelebihan:

1. **Gratis:** 000webhosting menyediakan layanan hosting secara gratis tanpa biaya bulanan atau tahunan, membuatnya cocok untuk proyek-proyek kecil dan pemula.

2. **Pilihan Domain Gratis:** Anda dapat memilih domain gratis dari 000webhosting, yang membuatnya lebih mudah untuk membuat dan mengelola situs web Anda.

3. **Antarmuka Pengguna Sederhana:** Antarmuka pengguna 000webhosting cukup sederhana dan ramah pengguna, membuatnya mudah digunakan oleh pemula tanpa pengalaman teknis yang mendalam.

4. **Website Builder Inklusif:** 000webhost menyediakan alat pembuat situs web bawaan yang memudahkan pembuatan situs web tanpa memerlukan pengetahuan pengkodean yang mendalam.

5. **Dukungan PHP dan MySQL:** Platform ini mendukung PHP dan MySQL, memungkinkan Anda menghosting berbagai jenis situs web, termasuk yang memerlukan basis data.

6. **Dukungan FTP:** 000webhost menyediakan akses FTP, memudahkan pengguna untuk mengelola dan mengunggah file situs web mereka.

    (5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
   Otorisasi dengan Bijak:
Gunakan kontrol akses yang tepat untuk memastikan bahwa setiap pengguna hanya memiliki akses yang diperlukan
    (5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
    Domain Management:
        Menambahkan atau mengelola domain dan subdomain.
        Mengarahkan domain ke folder tertentu di server.
        Mengonfigurasi DNS untuk domain.

    File Management:
        Mengunggah dan mengelola file melalui antarmuka web atau FTP.
        Menyunting file konfigurasi seperti .htaccess jika diizinkan.

    Database Management:
        Membuat dan mengelola database MySQL.
        Memberikan akses pengguna dan mengelola izin akses database.

    Pembaruan Aplikasi atau Stack:
        Memperbarui versi PHP atau versi server web.
        Menambahkan atau menghapus modul atau ekstensi PHP.

    Keamanan:
        Mengaktifkan atau menonaktifkan fitur keamanan seperti HTTPS.
        Konfigurasi firewall atau aturan keamanan lainnya jika disediakan.

    Monitoring dan Log:
        Menyediakan informasi pemantauan kinerja server dan penggunaan sumber daya.
        Mengakses log akses atau log server.

    Pengaturan PHP:
        Mengonfigurasi opsi PHP seperti batas waktu eksekusi skrip, batas ukuran file, dll.
![gambar](https://github.com/JOKIPIN/Ujianakhirsemester/assets/96344530/05b20c69-4a8a-4d6b-9cce-58f3ff2b3487)

