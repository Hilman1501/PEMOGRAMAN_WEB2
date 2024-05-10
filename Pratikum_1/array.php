<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Nilai Siswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
<h3 class="mb-0 p-3 bg-warning  text-white">Daftar Nilai Siswa</h3>
<table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="bg-secondary">No</th>
                <th scope="col" class="bg-secondary">NIM</th>
                <th scope="col" class="bg-secondary">UTS</th>
                <th scope="col" class="bg-secondary">UAS</th>
                <th scope="col" class="bg-secondary">Tugas</th>
                <th scope="col" class="bg-secondary">Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
    echo '<tr>';
    echo '<td>'.$nomor.'</td>';
    echo '<td>'.$ns['nim'].'</td>';
    echo '<td>'.$ns['uts'].'</td>';
    echo '<td>'.$ns['uas'].'</td>';
    echo '<td>'.$ns['tugas'].'</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
    echo '<td>'.number_format($nilai_akhir, 2, ',', '.').'</td>';
    echo '</tr>';
    $nomor++;
}
?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
