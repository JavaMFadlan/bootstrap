<?php
session_start();
if (isset($_SESSION['login'])) {
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>





<div class="container-fluid">
<div class="row">
  <div class="col-md-12">
<div class="card ">
  <div class="card-header text-center">
  <h2>Toko Buku</h2>
  </div>
  <div class="card-body">
  <form action="prosesbuku.php" method="get">
        <div class="form-group">
          <label >Nama   </label>
            <input class="form-control" type="text" name="nama" id="">
          </div>

          <div class="form-group">
            <label >Alamat   </label>
            <textarea class="form-control" name="alamat" name="alamat"  id="" cols="10" rows="5"></textarea>
          </div>

          
          <div class="form-group">
          <label>Jenis Kelamin : </label>
            <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" value="Laki-Laki" name="kelamin">Laki-Laki
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" value="Perempuan" name="kelamin">Perempuan
            </label>
            </div>

          <div class="form-group">
          <label >Tanggal Pembelian</label>
            <input class="form-control" type="Date" name="tanggal" id="">
          </div>

          <div class="form-group">
          <label >Jumlah Buku</label>
            <input class="form-control" type="number" name="jumlah" id="">
          </div>

    <input type="submit" value="Simpan" class="btn btn-primary" name="simpan">
  </div>
</div>
</div>
</div>
</div>
</form>



          <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php }else{
   
   header("location:login.php");
 }?>