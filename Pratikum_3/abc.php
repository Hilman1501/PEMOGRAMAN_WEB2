<?php
   $ar_prodi = [
      "Sistem Informasi" => "Sistem Informasi",
      "Teknik Informatika" => "Teknik Informatika", 
      "Bisnis Digital" => "Bisnis Digital"
   ];

   $ar_skill = [
      "HTML" => 10, 
      "CSS" => 10,
      "JavaScript" => 20,
      "RWD Bootstrap" => 20,
      "PHP" => 30,
      "Python" => 30,
      "Java" => 50
   ]; 

   $ar_domisili = [
      "Jakarta",
      "Bogor", 
      "Depok", 
      "Tangerang", 
      "Bekasi", 
      "Lainnya"
   ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <fieldset class="row mb-5 mt-3 mb-5 p-4 bg-dark-subtle">
        <legend>Form Registrasi IT Club Data Science</legend>
        <form action="proses.php" method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div> 
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="NIM" class="col-4 col-form-label">Nim</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                        </div> 
                        <input id="NIM" name="NIM" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis kelamin</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin" type="radio" class="custom-control-input" value="Perempuan"> 
                        <label for="jenis_kelamin" class="custom-control-label">Perempuan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jenis_kelamin" id="jenis_kelamin" type="radio" class="custom-control-input" value="Laki-Laki"> 
                        <label for="jenis_kelamin" class="custom-control-label">Laki-Laki</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                    <select id="prodi" name="prodi" class="form-select">
                        <?php foreach ($ar_prodi as $k => $v) : ?>
                            <option value="<?= $k ?>"><?= $v ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label> 
                <div class="col-8">
                    <?php foreach ($ar_skill as $k => $v) : ?>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skills[]" id="<?= $k ?>" type="checkbox" class="custom-control-input" value="<?= $k ?>"> 
                            <label for="<?= $k ?>" class="custom-control-label"><?= $k ?></label>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
                <div class="col-8">
                    <select id="domisili" name="domisili" class="form-select">
                        <?php foreach ($ar_domisili as $domisili) : ?>
                            <option value="<?= $domisili ?>"><?= $domisili ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div> 
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </fieldset> 
    <?php
    if (isset($_POST['submit'])) {
        $nim = $_POST['NIM'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $prodi = $_POST['prodi'];
        $skill = implode(', ', $_POST['skills']);
        $domisili = $_POST['domisili'];
        $email = $_POST['email'];

        echo "NIM: $nim <br>";
        echo "Nama Lengkap: $nama <br>";
        echo "Jenis Kelamin: $jk <br>";
        echo "Program Studi: $prodi <br>";
        echo "Skill Web & Programming: $skill <br>";
        echo "Tempat Domisili: $domisili <br>";
        echo "Email: $email <br>";
    }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
