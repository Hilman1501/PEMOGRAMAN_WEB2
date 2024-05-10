<?php
// Memanggil file koneksi database
require_once 'db_koneksi.php';

// Menangkap data yang dikirimkan melalui form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$kelurahan_id = $_POST['kelurahan'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$data = [$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $kelurahan_id, $email, $alamat];
$_proses = $_POST['proses'];

if ($_POST['proses'] == 'simpan') {
    // Menggunakan kolom kelurahan_id dalam query
    $insertPasienSQL = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, kelurahan_id, email, alamat) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($insertPasienSQL);
    $stmt->execute($data);
} elseif ($_POST['proses'] == 'hapus') {
    // Menghapus data pasien berdasarkan id yang diterima dari formulir
    $id = $_POST['id'];
    $deletePasienSQL = "DELETE FROM pasien WHERE id = ?";
    $stmt = $dbh->prepare($deletePasienSQL);
    $stmt->execute([$id]);
}

// Redirect kembali ke halaman data_pasien.php setelah operasi berhasil
header("Location: ./data_pasien.php");
?>
