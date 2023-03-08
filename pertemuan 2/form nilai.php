<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="m">
        <h2>Form Nilai Siswa</h2>
        <hr>

        <form method="GET" action="proses_nilai.php">
<form>
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama lengkap</label> 
    <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama lengakap" type="text" class="form-control">
    </div>
    </div>
    <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata kuliah</label> 
    <div class="col-8">
        <select id="select" name="matkul" class="custom-select">
        <option value="DDP">Dasar-dasar pemrograman</option>
        <option value="BDI">Basis data</option>
        <option value="WEB1">Pemrograman web</option>
        </select>
    </div>
    </div>
    <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
        <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
    </div>
    <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
        <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
    </div>
    <div class="form-group row">
    <label for="praktikum" class="col-4 col-form-label">NIlai praktikum</label> 
    <div class="col-8">
        <input id="praktikum" name="praktikum" placeholder="Nilai praktikum" type="text"
        class="form-control">
    </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>
    </div>
</body>
</html>