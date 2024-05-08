<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbpuskesmas";

// Membuat koneksi menggunakan mysqli_connect()
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
    die("Tidak bisa terkoneksi di database: " . mysqli_connect_error());
} 

$id = $_GET['id'];

$sql = "SELECT * FROM pasien WHERE id = $id";
$result = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $kode = $row['kode'];
    $nama = $row['nama'];
    $tmp_lahir = $row['tmp_lahir'];
    $tgl_lahir = $row['tgl_lahir'];
    $gender = $row['gender'];
    $email = $row['email'];
    $alamat = $row['alamat'];
} else {
    echo "Data tidak ditemukan.";
    exit;
}

$sukses = "";
$error = "";

if(isset($_POST['simpan'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE pasien SET kode='$kode', nama='$nama', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', gender='$gender', email='$email', alamat='$alamat' WHERE id=$id";

    if (mysqli_query($koneksi, $sql)) {
        $sukses = "Data berhasil diupdate";
        // Mengarahkan pengguna kembali ke halaman utama setelah 2 detik
        header("refresh:2; url=index.php");
    } else {
        $error = "Error updating record: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h2>Edit Data Pasien</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="number" name="kode" class="form-control" id="kode" value="<?php echo $kode ?>">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama ?>">
            </div>
          
            <div class="mb-3">
                <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" value="<?php echo $tmp_lahir ?>">
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?php echo $tgl_lahir ?>">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="laki" <?php if($gender == "laki") echo "selected" ?>>Laki-laki</option>
                    <option value="perempuan" <?php if($gender == "perempuan") echo "selected" ?>>Perempuan</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="telpon" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $alamat ?>">
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
