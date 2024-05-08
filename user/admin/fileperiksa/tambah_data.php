<?php
require_once 'header.php';
require_once 'sidebar.php';

$tanggal = "";
$berat = "";
$tinggi = "";
$tensi = "";
$keterangan = "";
$pasien_id = "";
$dokter_id = "";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Periksa</h1>
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
                  <label for="tanggal" class="form-label">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Masukkan Tanggal">
                </div>
               </div>
               

            <div class="mb-3">
                <label for="berat" class="form-label">Berat</label>
                <input type="number" name="berat" class="form-control" id="berat" value="<?php echo $berat ?>">
            </div>
            <div class="mb-3">
                <label for="tinggi" class="form-label">Tinggi</label>
                <input type="number" name="tinggi" class="form-control" id="tinggi" value="<?php echo $tinggi ?>">
            </div>
           
            <div class="mb-3">
                <label for="tensi" class="form-label">Tensi</label>
                <input type="text" name="tensi" class="form-control" id="tensi" value="<?php echo $tensi ?>">
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $keterangan ?>">
            </div>
            <div class="mb-3">
                <label for="pasien_id" class="form-label">Pasien Id</label>
                <input type="number" name="pasien_id" class="form-control" id="pasien_id" value="<?php echo $pasien_id ?>">
            </div>

            <div class="mb-3">
                <label for="dokter_id" class="form-label">Dokter Id</label>
                <input type="number" name="dokter_id" class="form-control" id="dokter_id" value="<?php echo $dokter_id ?>">
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


