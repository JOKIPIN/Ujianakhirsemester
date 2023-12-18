<!-- tampilkan_absensi.php -->
<?php
include "koneksi.php";

$query = "SELECT * FROM absensi";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Absensi</title>
</head>
<body>
    <div class="tampilkan-absensi-container">
        <h2>Data Absensi</h2>
        <table class="centered">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Hadir</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['tanggal']}</td>
                    <td>{$row['hadir']}</td>
                </tr>";
            }
            ?>

        </table>
        <br>
        <a class="back-link" href="index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>

<?php
mysqli_close($koneksi);
?>
