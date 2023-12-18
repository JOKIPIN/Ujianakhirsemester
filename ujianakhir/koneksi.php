<?php
// Koneksi.php
$hostname = "localhost"; // Ganti dengan nama host MySQL Anda
$username = "root"; // Ganti dengan username MySQL Anda (default: root)
$password = ""; // Ganti dengan password MySQL Anda (kosongkan jika tidak ada password)
$database = "ujianakhir"; // Ganti dengan nama database yang telah Anda buat

// Buat koneksi
$koneksi = new mysqli($hostname, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Set karakter set untuk koneksi
$koneksi->set_charset("utf8");
?>
