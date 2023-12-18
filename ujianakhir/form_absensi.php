<!-- form_absensi.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Absensi</title>
</head>
<body>
    <h2>Form Absensi</h2>
    <form action="proses.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="hadir">Hadir:</label>
        <input type="checkbox" name="hadir">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
