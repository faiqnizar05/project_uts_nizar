<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbpuskesmas";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Tidak bisa terkoneksi di database: " . mysqli_connect_error());
} 

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat) VALUES ('$kode', '$nama', '$tmp_lahir', '$tgl_lahir', '$gender', '$email', '$alamat')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data.";
}

mysqli_close($koneksi);
?>
