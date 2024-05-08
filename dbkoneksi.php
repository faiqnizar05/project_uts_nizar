<?php
// Konfigurasi database
$host = 'localhost'; // Ganti sesuai dengan host Anda
$dbname = 'dbpuskesmas1'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan nama pengguna database Anda
$pass = ''; // Ganti dengan kata sandi database Anda
// Ganti dengan port yang Anda inginkan

$dsn = "mysql:host=$host;dbname=$dbname";

// Buat koneksi Database
$dbh = new PDO($dsn, $user, $pass );
