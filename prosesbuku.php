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
  <h2></h2>
  </div>
  <div class="card-body">
  <!-- form buka -->
  <form action="prosesbeli1.php" method="post">
    <?php   
    if (isset($_GET['simpan'])) {
        $nama=$_GET['nama'];
        $alamat=$_GET['alamat'];
        $kelamin=$_GET['kelamin'];
        $jumlah=$_GET['jumlah'];
        $tanggal=$_GET['tanggal'];
    for ($i=1; $i <= $jumlah ; $i++) { 
    ?>
        <div class="form-group">
          <label >Judul Buku</label>
            <input class="form-control" type="text" name="judul[]" id="">
          </div>

          <div class="form-group">
            <label>Kode Buku</label>
            <input class="form-control" type="text" name="kode[]" >
          </div>
          
          <div class="form-group">
            <label>Pengarang</label>
            <input class="form-control" type="text" name="pengarang[]" >
          </div>

          <div class="form-group">
          <select class="form-control" name="jenis[]">
            <option value="Novel">Novel</option>
            <option value="Fiksi">Fiksi</option>
            <option value="Horror">Horror</option>
            <option value="Cergam">Cergam</option>
            <option value="Komik">Komik</option>
          </select> 
          </div>

          <div class="form-group">
          <label >Harga Buku</label>
            <input class="form-control" type="number" name="harga[]" id="">
          </div>

          <br><br><br><br><br><br>
    <!-- form tutup -->
    
  
<?php } ?>
<input type="hidden" name="nama" value="<?php echo "$nama";?>">
<input type="hidden" name="alamat" value="<?php echo "$alamat";?>">
<input type="hidden" name="kelamin" value="<?php echo "$kelamin";?>">
<input type="hidden" name="tanggal" value="<?php echo "$tanggal";?>">
<input type="hidden" name="jumlah" value="<?php echo "$jumlah";?>">
<input type="submit" value="Simpan" class="btn btn-primary" name="simpan">
</div>
</div>
</div>
</div>
</div>
</form>
<?php
}
?> 

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }else{
   
   header("location:login.php");
 }?>