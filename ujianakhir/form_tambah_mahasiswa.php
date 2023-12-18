<!-- form_tambah_mahasiswa.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>
    <form action="proses_tambah_mahasiswa.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" required>

        <button type="submit">Tambah Mahasiswa</button>
    </form>
    <br>
    <a href="daftar_mahasiswa.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>
