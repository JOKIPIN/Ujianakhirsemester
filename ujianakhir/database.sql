CREATE TABLE absensi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(50),
    tanggal DATE,
    hadir BOOLEAN
);
CREATE TABLE mahasiswa (
    nim VARCHAR(15) PRIMARY KEY,
    nama VARCHAR(50),
    prodi VARCHAR(50)
);
