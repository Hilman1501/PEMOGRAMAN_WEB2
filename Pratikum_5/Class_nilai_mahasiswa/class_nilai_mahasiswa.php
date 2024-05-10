

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <h2>Form Nilai Mahasiswa</h2>
    <form method="POST">
        <label for="nama">Nama Mahasiswa:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="matkul">Mata Kuliah:</label><br>
        <input type="text" id="matkul" name="matkul"><br><br>
        
        <label for="nilai">Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" min="0" max="100"><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <br>
    <hr>
    <br>
    <?php
class NilaiMahasiswa
{
    var $nama, $matkul, $nilai;

    // Konstruktor
    function __construct($nama, $matkul, $nilai)
    {
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    function kelulusan()
    {
        return $this->nilai < 5 ? "TIDAK LULUS" : "LULUS";
    }
   
    function hasil()
    {
        if ($this->nilai > 0 && $this->nilai < 35) {
            return "E";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "D";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "C";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "B";
        } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        } else {
            return "Nilai tidak valid";
        }
    }
}

// Proses Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];

    // Buat objek NilaiMahasiswa
    $mahasiswa = new NilaiMahasiswa($nama, $matkul, $nilai);

    // Tampilkan hasil
    echo "Data Nilai Mahasiswa:\n";
    echo "Nama: " . $mahasiswa->nama . ", Mata Kuliah: " . $mahasiswa->matkul . ", Nilai: " . $mahasiswa->nilai . ", Kelulusan: " . $mahasiswa->kelulusan() . ", Hasil: " . $mahasiswa->hasil() . "\n";
}
?>
</body>
</html>
