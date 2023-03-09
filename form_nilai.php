<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <h3 style ="text-align: center;">FOrm Nilai Mahasiswa</h3>
    <hr/>
    </div>
    <form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="textname" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="textname" name="textname" placeholder="Masukkan Nama Anda " type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar - Dasar Pemrograman</option>
        <option value="WEB">Pemrograman Web 2</option>
        <option value="BASDAT">Basis data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai uas" class="col-4 col-form-label">UAS</label> 
    <div class="col-8">
      <input id="nilai uas" name="nilai uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai uts " class="col-4 col-form-label">UTS</label> 
    <div class="col-8">
      <input id="nilai uts " name="nilai uts " placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai tugas" class="col-4 col-form-label">Tugas</label> 
    <div class="col-8">
      <input id="nilai tugas" name="nilai tugas" placeholder="Masukkan Nilai Tugas " type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    <?php
    // ambil data yang di inputkan/dikirimkan ole user 
    // $name = $_GET['name'];
    // $mata_kuliah = $_GET['matkul'];
    // $uts = $_GET['nilai_uts'];
    // $uas = $_GET['nilai_uas'];
    // $nilai_tugas = $_Get['nilai_tugas'];


    // mencetak nilai variable
    // echo "Nama Mahasiswa : $name";
    // echo "<br/>Mata Kuliah : $mata_kuliah";
    // echo "<br/>Nilai UTS : $nilai_uts";
    // echo "<br/>Nilai UAS : $nilai_uas";
    // echo "Nilai Tugas : $nilai_tugas";
    
    ?>
    </div>
</form>
</body>
</html>