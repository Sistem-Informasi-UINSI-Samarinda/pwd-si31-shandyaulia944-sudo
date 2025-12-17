<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "pwd_2441919027";

// Membuat koneksi ke MySQL
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>