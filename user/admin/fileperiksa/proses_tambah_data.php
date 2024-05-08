<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbpuskesmas";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Tidak bisa terkoneksi di database: " . mysqli_connect_error());
} 

$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];
$keterangan = $_POST['keterangan'];
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id']; // Perbaikan: Menggunakan $_POST

$sql = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES ('$tanggal', '$berat', '$tinggi', '$tensi', '$keterangan', '$pasien_id', '$dokter_id')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data.";
}

mysqli_close($koneksi);
?>
