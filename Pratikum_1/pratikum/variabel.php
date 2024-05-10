<?php
$nama= ' Hilman';
$umur= 18;
$berat= 53.32;

echo "nama saya <b> $nama </b> , saya berumur ".$umur." an memilki berat ".$berat ."kg";

echo "</br>";
echo "</br>";
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

// definisikan konstansta
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;
echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br/>Kelilingnya : '.$kll;

?>
<hr/>
<?php
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;
?>
