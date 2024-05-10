<?php
function skor_skill($ar_skill)
{
    return count($ar_skill);
}
$ar_prodi = [
    'Teknik Informatika' => 'Teknik Informatika',
    'Sistem Informasi' => 'Sistem Informasi',
    'Bisnis Digital' => 'Bisnis Digital'
];

$ar_skill = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50
];

$ar_domisili = [
    'Jakarta' => 'Jakarta',
    'Bogor' => 'Bogor',
    'Depok' => 'Depok',
    'sulawesi' => 'sulawesi',
    'bima' => 'bima',
    'Lainnya' => 'Lainnya'
]

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  form {
    background-color: beige;
  }
</style>
  </head>

<body>
    <div class="container">
        <fieldset class="m-5">
            <legend>Form Registrasi IT Club Data Science</legend>
            <form method="POST" action="" class="p-5">
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" checked>
                            <label class="form-check-label" for="laki-laki"> Laki-Laki </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                            <label class="form-check-label" for="perempuan"> Perempuan </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="prodi" name="prodi">
                            <?php foreach ($ar_prodi as $key => $value) : ?>
                                <option value="<?= $value ?>"><?= $key ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Skill Web & Programming</legend>
                    <div class="col-sm-10">
                        <?php foreach ($ar_skill as $tech => $nilai) : ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="<?= $tech ?>" name="skills[]" value="<?= $tech ?>">
                                <label class="form-check-label" for="<?= $tech ?>"><?= $tech ?></label>
                            </div>
                        <?php endforeach ?>
                    </div>
                </fieldset>

                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Tempat Domisili</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="domisili" name="domisili">
                            <?php foreach ($ar_domisili as $key => $value) : ?>
                                <option value="<?= $value ?>"><?= $key ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mail" class="col-sm-2 col-form-label">E-Mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="mail" name="mail">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </fieldset>
        <hr>

        <?php
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $program_studi = $_POST['prodi'];
            $skills = isset($_POST['skills']) ? $_POST['skills'] : array();
            $tempat = $_POST['domisili'];
            $email = $_POST['mail'];

            echo '<div style="border: 1px solid black; padding: 10px;">';
            echo '<h4>Data yang Anda Masukkan:</h4>';
            echo '<table class="table">';
            echo '<tr><th>NIM</th><td>' . $nim . '</td></tr>';
            echo '<tr><th>Nama</th><td>' . $nama . '</td></tr>';
            echo '<tr><th>Jenis Kelamin</th><td>' . $jenis_kelamin . '</td></tr>';
            echo '<tr><th>Program Studi</th><td>' . $program_studi . '</td></tr>';
            echo '<tr><th>Skill Web & Pemrograman</th><td>' . implode(', ', $skills) . '</td></tr>';
            echo '<tr><th>Tempat Domisili</th><td>' . $tempat . '</td></tr>';
            echo '<tr><th>E-Mail</th><td>' . $email . '</td></tr>';
            echo '</table>';
            echo '</div>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
