<!-- proses_tambah_mahasiswa.php -->
<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query_tambah_mahasiswa = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";

    if (mysqli_query($koneksi, $query_tambah_mahasiswa)) {
        echo "Mahasiswa berhasil ditambahkan.";
    } else {
        echo "Error: " . $query_tambah_mahasiswa . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>
