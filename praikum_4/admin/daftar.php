<?php
include_once 'top.php';
include_once 'menu.php';
?>
<div>
    <div class="container-fluid px-4">
        <h1>Formulir Pendaftaran Organisasi</h1>
        <form>
            <fieldset class="border p-4">
                <legend class="w-auto">Isi Formulir Pendaftaran</legend>
                <div class="card-body">
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <label for="nim" class="col-sm-3 col-form-label">NIM :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="prodi" class="col-sm-3 col-form-label">Program Studi :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="prodi" name="prodi">
                                        <option selected disabled>Pilih Program Studi</option>
                                        <option>Teknik Informatika</option>
                                        <option>Sistem Informasi</option>
                                        <option>Bisnis Digital</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="organisasi" class="col-sm-3 col-form-label">Organisasi :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="organisasi" name="organisasi">
                                        <option selected disabled>Pilih Organisasi</option>
                                        <option>BEM</option>
                                        <option>HALMAHERA</option>
                                        <option>SENADA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Kolom Kanan (Anda bisa menambahkan lebih banyak kolom di sini jika diperlukan) -->
                        <div class="col-md-6">
                            <!-- Kolom Tambahan -->
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block mt-3">
                        <button class="btn btn-primary" type="submit">Daftar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
include_once 'bottom.php';
?>
