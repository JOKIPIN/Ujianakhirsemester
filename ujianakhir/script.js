// script.js
document.addEventListener('DOMContentLoaded', function () {
    // Event untuk menangani submit form
    document.getElementById('dataForm').addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault(); // Mencegah form submit jika validasi gagal
        }
    });

    // Event untuk menangani perubahan pada checkbox "Hadir"
    document.getElementById('hadir').addEventListener('change', function () {
        updateTable(); // Memperbarui tabel saat checkbox berubah
    });

    // Event untuk menangani perubahan pada radio button "Jenis Kelamin"
    var radioButtons = document.querySelectorAll('input[name="jenisKelamin"]');
    radioButtons.forEach(function (radioButton) {
        radioButton.addEventListener('change', function () {
            updateTable(); // Memperbarui tabel saat radio button berubah
        });
    });
});

function validateForm() {
    var nama = document.getElementById('nama').value;
    var email = document.getElementById('email').value;

    if (nama === '' || email === '') {
        alert('Nama dan Email harus diisi!');
        return false;
    }

    return true;
}

function updateTable() {
    var nama = document.getElementById('nama').value;
    var email = document.getElementById('email').value;
    var jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked') ? document.querySelector('input[name="jenisKelamin"]:checked').value : '';
    var hadir = document.getElementById('hadir').checked ? 'Ya' : 'Tidak';

    var table = document.getElementById('dataTable');
    var newRow = table.insertRow(-1);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);

    cell1.innerHTML = nama;
    cell2.innerHTML = email;
    cell3.innerHTML = jenisKelamin;
    cell4.innerHTML = hadir;
}
