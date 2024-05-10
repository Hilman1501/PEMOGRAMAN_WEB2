<?php
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['Matkul'];
$Nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai uts : '.$Nilai_uts;
    echo '<br/>nilai uas : '.$nilai_uas;
    echo '<br/>Nilai Tugas Pratikum : '.$nilai_tugas;
?>
