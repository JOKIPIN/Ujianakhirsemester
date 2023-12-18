<!-- form_hapus_mahasiswa.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Hapus Mahasiswa</title>
</head>
<body>
    <h2>Form Hapus Mahasiswa</h2>
    <form action="proses_hapus_mahasiswa.php" method="post">
        <label for="nim">NIM Mahasiswa:</label>
        <input type="text" name="nim" required>

        <button type="submit">Hapus Mahasiswa</button>
    </form>
    <br>
    <a href="daftar_mahasiswa.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>
