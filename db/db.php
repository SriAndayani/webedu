<?php
// Konfigurasi database
$host = 'localhost';
$dbname = 'db_webedu';
$username = 'postgres';
$password = 'adminsri';

try {
    // Membuat koneksi PDO ke PostgreSQL
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    // Mengatur mode error PDO ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi ke database PostgreSQL berhasil.";
} catch (PDOException $e) {
    // Menangani kesalahan koneksi
    die("Koneksi ke database gagal: " . $e->getMessage());
}
?>
