<?php
require_once 'header.php';
require_once 'sidebar.php';

$nama = "";
$gender = "";
$tmp_lahir = "";
$tgl_lahir = "";
$kategori = "";
$telpon = "";
$alamat = "";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Pasien</h1>
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
          <div class="card">
            <div class="card-body">
              <form action="proses_tambah_data.php" method="POST">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                </div>

                <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="laki" <?php if($gender == "laki") echo "selected" ?>>Laki-laki</option>
                    <option value="perempuan" <?php if($gender == "perempuan") echo "selected" ?>>Perempuan</option>
                </select>
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
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" id="kategori" value="<?php echo $kategori ?>">
            </div>

            <div class="mb-3">
                <label for="telpon" class="form-label">Telpon</label>
                <input type="text" name="telpon" class="form-control" id="telpon" value="<?php echo $telpon ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $alamat ?>">
            </div>



                <!-- Tambahkan input untuk tempat lahir, tanggal lahir, gender, email, dan alamat sesuai kebutuhan -->

                <div class="col-12">
                  <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


