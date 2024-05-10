<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="GET" action="nilaiform.php">
            <div class="form-group row mt-5">
                <label for="nama" class="col-md-2 col-form-label">Nama :</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="" size="30"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-md-2 col-form-label">Mata Kuliah :</label>
                <div class="col-md-8">
                    <select class="form-control" id="matkul" name="Matkul">
                        <option value=""></option>
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WebI">Pemrograman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-md-2 col-form-label">Nilai UTS :</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nilai_uts" name="nilai_uts" value="" size="6"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-md-2 col-form-label">Nilai UAS :</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nilai_uas" name="nilai_uas" value="" size="6"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-md-2 col-form-label">Nilai Pratikum :</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nilai_tugas" name="nilai_tugas" value="" size="6"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-8 offset-md-2">
                    <input type="submit" class="btn btn-primary" value="Simpan" name="proses"/>
                </div>
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
