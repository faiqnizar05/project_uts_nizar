
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
$nama = "";
$gender = "";
$tmp_lahir = "";
$tgl_lahir = "";
$kategori = "";
$telpon = "";
$alamat = "";
$sukses = "";
$error = "";

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kategori = $_POST['kategori'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];


    if($nama && $gender && $tmp_lahir && $tgl_lahir && $kategori && $telpon && $alamat){
        $sql1 = "INSERT INTO dokter (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat) VALUES ('$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telpon', '$alamat')";
        $q1 = mysqli_query($koneksi, $sql1); // Perbaikan variabel menjadi $q1
    
        if($q1){ // Mengubah variabel dari $sq1 menjadi $q1
            $sukses = "Berhasil memasukkan data baru";
        }else{
            $error = "Gagal memasukkan data";
        }
    
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .mx-auto {
            width:800px;
        }

        .card {
            margin-top:10px;
        }
    </style>
</head>
<body>
    <div class="mx-auto">
        <!-- untuk menampilkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Dokter
            </div>
            <div class="card">
        </div>
        
        <!-- Create / Edit Data -->
       
    </div>
</body>
</html>


            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if($error){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                    <?php
                }
                ?>

                <?php
                if($sukses){
                    ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                    <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="<?php echo $nama ?>">
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">GENDER</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Pilih Gender</option>
                            <option value="laki" <?php if($gender == "laki") echo "selected" ?>>Laki-laki</option>
                            <option value="perempuan"<?php if($gender == "perempuan") echo "selected" ?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tmp_lahir" class="form-label">TEMPAT LAHIR</label>
                        <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" placeholder="<?php echo $tmp_lahir ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">TANGGAL LAHIR</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="<?php echo $tgl_lahir ?>">
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">KATEGORI</label>
                        <input type="text" name="kategori" class="form-control" id="kategori" placeholder="<?php echo $kategori ?>">
                    </div>

                    <div class="mb-3">
                        <label for="telpon" class="form-label">NO TELEPON</label>
                        <input type="number" name="telpon" class="form-control" id="number" placeholder="<?php echo $telpon ?>">
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">ALAMAT</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="<?php echo $alamat ?>">
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>