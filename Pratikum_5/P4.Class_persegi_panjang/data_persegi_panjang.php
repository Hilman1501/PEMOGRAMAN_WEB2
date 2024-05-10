<?php
require_once './class_persegipanjang.php';

$persegi1 = new PersegiPanjang(7, 9);
$persegi2 = new PersegiPanjang(8, 12);

echo "Luas Persegi Panjang 1 : ".$persegi1->getLuas();
echo "<br>Luas Persegi Panjang 2 : ".$persegi2->getLuas();

echo "<br>Keliling Persegi Panjang 1 : ".$persegi1->getKeliling();
echo "<br>Keliling Persegi Panjang 2 : ".$persegi2->getKeliling();
?>