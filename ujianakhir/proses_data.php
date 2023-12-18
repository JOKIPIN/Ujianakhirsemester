<?php
// proses_data.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenisKelamin = isset($_POST['jenisKelamin']) ? $_POST['jenisKelamin'] : '';
    $hadir = isset($_POST['hadir']) ? 'Ya' : 'Tidak';

    // Lakukan sesuatu dengan data yang diterima dari form
    // Di sini Anda dapat menyimpan data ke database atau melakukan tindakan lainnya.

    // Misalnya, kita hanya mencetak data sebagai respons:
    echo "Data yang diterima:\n";
    echo "Nama: $nama\n";
    echo "Email: $email\n";
    echo "Jenis Kelamin: $jenisKelamin\n";
    echo "Hadir: $hadir\n";
} else {
    echo "Metode request tidak valid!";
}
?>
