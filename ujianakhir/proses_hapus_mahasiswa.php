<!-- proses_hapus_mahasiswa.php -->
<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];

    $query_hapus_mahasiswa = "DELETE FROM mahasiswa WHERE nim='$nim'";

    if (mysqli_query($koneksi, $query_hapus_mahasiswa)) {
        echo "Mahasiswa berhasil dihapus.";
    } else {
        echo "Error: " . $query_hapus_mahasiswa . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>
