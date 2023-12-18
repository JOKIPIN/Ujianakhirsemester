<!-- proses_absensi.php -->
<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal = date('Y-m-d');
    $hadir = isset($_POST['hadir']) ? 1 : 0;

    $query = "INSERT INTO absensi (nama, tanggal, hadir) VALUES ('$nama', '$tanggal', $hadir)";

    if (mysqli_query($koneksi, $query)) {
        echo "Data absensi berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>
