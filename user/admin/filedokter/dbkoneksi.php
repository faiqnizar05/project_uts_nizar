<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbpuskesmas";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Tidak bisa terkoneksi di database: " . mysqli_connect_error());
} 

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO dokter (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat) VALUES ('$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telpon', '$alamat')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data.";
}

mysqli_close($koneksi);
?>
