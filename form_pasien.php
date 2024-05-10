<?php
require_once 'db_koneksi.php';

$data_kelurahan = $dbh -> query("SELECT * FROM kelurahan ORDER BY nama ASC");

if (isset($GET['id']) && $_GET['id'] != ''){
    $findPasienSQL ="SELECT * FROM pasien WHERE id = $_GET";
}
include_once './layouts/top.php';
include_once './layouts/navbar.php';
include_once './layouts/sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card mt-3">
        <div class="card-header">
          <h3 class="card-title">Form pasien</h3>
        </div>
            <div class="card-body">
                <form method="POST" action="proses_pasien.php">
                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Kode</label> 
                    <div class="col-8">
                        <input id="kode" name="kode" type="text" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                    <div class="col-8">
                        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                    <div class="col-8">
                        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                        <label for="gender_0" class="custom-control-label">Laki - Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                       <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                       <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label> 
                    <div class="col-8">
                       <select id="kelurahan" name="kelurahan" class="custom-select">
                            <option value="" disable selected>...pilih kelurahan....</option>
                            <?php foreach ($data_kelurahan as $key => $kelurahan) : ?>
                            <option value="<?= $kelurahan['id'] ?>"><?= $kelurahan['nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label> 
                    <div class="col-8">
                        <input id="email" name="email" type="email" class="form-control">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                    <div class="col-8">
                        <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control"></textarea>
                    </div>
                    </div> 
                    <div class="form-group row">
                    <div class="offset-4 col-8">
                        <input type="submit" name="proses" id="proses" clas="btn btn-primary" value="simpan">
                       <!--<button name="submit" type="submit" class="btn btn-primary">Tambah Pasien</button>-->
                    </div>
                    </div>
                </form>
            </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<?php

include_once './layouts/bottom.php';

?>