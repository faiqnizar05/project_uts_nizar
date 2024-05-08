<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard </h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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
  
               

             
<!-- untuk menampilkan data -->
<div class="card">
    <div class="card-header text-white bg-yellow">
        Data Dokter
    </div>
    <div class="card-body">
    <!-- <a href="tambah_data.php" class="btn btn-success">Tambah Data</a> -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Alamat</th>
               
                </tr>
            </thead>
            <tbody>
                <?php
                $urut = 1;
                $sql2 = "SELECT * FROM dokter ORDER BY ID DESC";
                $q2 = mysqli_query($koneksi, $sql2);
                while ($r2 = mysqli_fetch_array($q2)) {
                    $id = $r2['id'];
                    $nama = $r2['nama'];
                    $gender = $r2['gender'];
                    $tmp_lahir = $r2['tmp_lahir'];
                    $tgl_lahir = $r2['tgl_lahir'];
                    $kategori = $r2['kategori'];
                    $telpon = $r2['telpon'];
                    $alamat = $r2['alamat'];
                ?>
                    <tr>
                        <th scope="row"><?php echo $urut++ ?></th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $gender ?></td>
                        <td><?php echo $tmp_lahir ?></td>
                        <td><?php echo $tgl_lahir ?></td>
                        <td><?php echo $kategori ?></td>
                        <td><?php echo $telpon ?></td>
                        <td><?php echo $alamat ?></td>
                        <td>
<!--                             
                        <a href='edit.php?id=<?php echo $id ?>' class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
<a href='delete.php?id=<?php echo $id ?>' class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a> -->

                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


    </div>

    
</body>
</html>

          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>