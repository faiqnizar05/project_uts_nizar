
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
$tanggal = "";
$berat = "";
$tinggi = "";
$tensi = "";
$keterangan = "";
$pasien_id = "";
$dokter_id = "";


if(isset($_POST['simpan'])){
    $tanggal = $_POST['tanggal'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $tensi = $_POST['tensi'];
    $keterangan = $_POST['keterangan'];
    $pasien_id = $_POST['pasien_id'];
    $dokter_id = $_POST['dokter_id'];


    if($tanggal && $berat && $tinggi && $tensi && $keterangan && $pasien_id && $dokter_id){
        $sql1 = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES ('$tanggal', '$berat', '$tinggi', '$tensi', '$keterangan', '$pasien_id', '$dokter_id')";
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
                Periksa
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
                        <label for="tanggal" class="form-label">TANGGAL</label>
                        <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="<?php echo $tanggal ?>">
                    </div>

                   

                    <div class="mb-3">
                        <label for="berat" class="form-label">Berat</label>
                        <input type="number" name="berat" class="form-control" id="berat" placeholder="<?php echo $berat ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tinggi" class="form-label"> TINGGI</label>
                        <input type="number" name="tinggi" class="form-control" id="tinggi" placeholder="<?php echo $tinggi ?>">
                    </div>

                    <div class="mb-3">
                        <label for="tensi" class="form-label">TENSI</label>
                        <input type="number" name="tensi" class="form-control" id="tensi" placeholder="<?php echo $tensi ?>">
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="number" name="keterangan" class="form-control" id="keterangan" placeholder="<?php echo $keterangan ?>">
                    </div>

                    <div class="mb-3">
                        <label for="pasien_id" class="form-label">PASIEN ID</label>
                        <input type="number" name="pasien_id" class="form-control" id="pasien_id" placeholder="<?php echo $pasien_id ?>">
                    </div>

                    <div class="mb-3">
                        <label for="dokter_id" class="form-label">DOKTER ID</label>
                        <input type="number" name="dokter_id" class="form-control" id="dokter_id" placeholder="<?php echo $dokter_id ?>">
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>