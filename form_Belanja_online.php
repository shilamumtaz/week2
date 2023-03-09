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
    <h3 style ="text-align: center;">Form Belanja Online</h3>
    <hr/>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="" name="" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilihan Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="SEPEDA"> 
        <label for="radio_0" class="custom-control-label">SEPEDA</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="MOBIL"> 
        <label for="radio_1" class="custom-control-label">MOBIL</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MOTOR"> 
        <label for="radio_2" class="custom-control-label">MOTOR</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="" name="" placeholder="Jumlah" type="text" class="form-control">
    </div>
    <div class="form-group row">
    <label for="" class="col-4 col-form-label">Total Belanja</label> 
    <div class="col-8">
      <input id="" name="" placeholder="Total Belanja" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

  <?php
    // ambil data yang di inputkan/dikirimkan oleh user 
    // $customer = $_GET['nama_customer'];
    // $pilihan_produk = $_GET['sepeda,mobil,motor'];
    // $jumlah = $_GET['jumlah'];
    // $harga = $_GET['harga'];
    
    // mencetak nilai variable
    // echo "Nama Customer : $name";
    // echo "<br/>Pilihan Produk : $pilihan_produk";
    // echo "<br/>Jumlah : $Jumlah";
    // echo "<br/>Harga : $harga";
    // echo " Harga : $harga";
    
    ?>
</form>
</body>
</html>
