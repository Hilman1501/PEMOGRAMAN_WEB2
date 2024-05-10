<?php

require 'db_koneksi.php';
$search = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT * FROM pasien";
if (!empty($search)) {
    $sql .= " WHERE nama LIKE '%$search%' OR kode LIKE '%$search%' OR email LIKE '%$search%'";
}
$getPasien = $dbh->query($sql);

include_once './layouts/top.php';
include_once './layouts/navbar.php';
include_once './layouts/sidebar.php';
?>
<div class="content-wrapper mt-3">


    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($getPasien as $key => $pasien) : ?>
                                <tr>
                                    <td><?= ++$key ?></td>
                                    <td><?= $pasien['kode'] ?></td>
                                    <td><?= $pasien['nama'] ?></td>
                                    <td><?= $pasien['alamat'] ?></td>
                                    <td><?= $pasien['email'] ?></td>
                                    <td>
                                        <form method="POST" action="proses_pasien.php" style="display: inline;">
                                            <input type="hidden" name="id" value="<?= $pasien['id'] ?>">
                                            <input type="hidden" name="proses" value="edit">
                                            <button type="submit" class="btn btn-sm btn-warning" name="edit">Edit</button>
                                        </form>
                                        <form method="POST" action="proses_pasien.php" style="display: inline;">
                                            <input type="hidden" name="id" value="<?= $pasien['id'] ?>">
                                            <input type="hidden" name="proses" value="hapus">
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data pasien ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include_once './layouts/bottom.php';
?>
