<?php
require_once 'header.php';
require_once 'sidebar.php';

$kode = "";
$nama = "";
$tmp_lahir = "";
$tgl_lahir = "";
$gender = "";
$email = "";
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
                  <label for="kode" class="form-label">Kode</label>
                  <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan kode">
                </div>

                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama">
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


