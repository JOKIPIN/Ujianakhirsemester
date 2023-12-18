<!-- daftar_mahasiswa.php -->
<?php
include "koneksi.php";

$query_mahasiswa = "SELECT * FROM mahasiswa";
$result_mahasiswa = mysqli_query($koneksi, $query_mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>

        <?php
        while ($row_mahasiswa = mysqli_fetch_assoc($result_mahasiswa)) {
            echo "<tr>
                <td>{$row_mahasiswa['nim']}</td>
                <td>{$row_mahasiswa['nama']}</td>
                <td>{$row_mahasiswa['prodi']}</td>
            </tr>";
        }
        ?>

    </table>

    <a href="index.php">Kembali ke Halaman Utama</a>

</body>
</html>

<?php
mysqli_close($koneksi);
?>
