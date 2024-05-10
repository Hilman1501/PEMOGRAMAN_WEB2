<?php
// Konfigurasi database
$host = 'localhost'; // Ganti sesuai dengan host Anda
$database = 'db_puskesmas'; // Ganti dengan nama database Anda
$username = 'root'; // Ganti dengan nama pengguna database Anda
$password = ''; // Ganti dengan kata sandi database Anda
$charset ="utf8mb4";

$dsn = "mysql:host=$host;dbname=$database;charset=$charset";

//konfigurasi options
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Buat koneksi Database
$dbh = new PDO($dsn, $username, $password);