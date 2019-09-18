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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Formulir</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li>
      <!-- Button trigger modal -->
      <div class="col-md-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Buka Formulir
        </button>
        </div>
      </li>
      <li>
      <a href="logout.php"><input class="btn btn-danger" type="submit" name="login" value="logout"></a><br>
      </li>
    </ul>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="" method="post">
        <div class="form-group">
          <label >Nama   </label>
            <input class="form-control" type="text" name="nama" id="">
          </div>

          <div class="form-group">
            <label >Alamat   </label>
            <textarea class="form-control" name="alamat" name="alamat"  id="" cols="10" rows="5"></textarea>
          </div>
          <label>Jenis Kelamin</label>
          <div class="form-group">
            
            <div class="form-check-inline">
            <label class="form-check-label">
              <input class="form-control" type="radio" class="form-check-input" name="kelamin" value="Laki-Laki">Laki
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input class="form-control" type="radio" class="form-check-input" name="kelamin" value="Perempuan">Perempuan
            </label>
          </div>

          <div class="form-group">
          <label >Asal Sekolah</label>
            <input class="form-control" type="text" name="asal" id="">
          </div>

          <div class="form-group">
          <label >Bahasa Indonesia</label>
            <input class="form-control" type="number" name="indo" id="">
          </div>
          
          <div class="form-group">
          <label>IPA</label>
            <input class="form-control" type="number" name="ipa" id="">
          </div>

          <div class="form-group">
          <label >Bahasa Inggris</label>
            <input class="form-control" type="number" name="inggris" id="">
          </div>

          <div class="form-group">
          <label >Matematika</label>
            <input class="form-control" type="number" name="mtk" id="">
          </div>
        <!-- tutup -->
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
        <!-- <button type="button" name="simpan" >Simpan</button> -->
      </div>
    </div>
  </div>
</div>
</div>
</form>

<!-- proses -->
<?php
if (isset($_POST['Simpan'])) {
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $kelamin=$_POST['kelamin'];
  $indo=$_POST['indo'];
  $ipa=$_POST['ipa'];
  $inggris=$_POST['inggris'];
  $mtk=$_POST['mtk'];
  $asal=$_POST['asal'];
  $rata = ($indo+$ipa+$inggris+$mtk)/4;
  ?>
<table class="table table-responsive-md table-dark">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Bhs.Indo</th>
      <th scope="col">Ipa</th>
      <th scope="col">Inggris</th>
      <th scope="col">Mtk</th>
      <th scope="col">Rata-Rata</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php echo"$nama";?></td>
    <td><?php echo"$alamat";?></td>
    <td><?php echo"$kelamin";?></td>
    <td><?php echo"$asal";?></td>
    <td><?php echo"$indo";?></td>
    <td><?php echo"$ipa";?></td>
    <td><?php echo"$inggris";?></td>
    <td><?php echo"$mtk";?></td>
    <td><?php echo"$rata";?></td>
    </tr>
  </tbody>
</table>
 <?php if ($rata > 65) { ?>
  <div class="alert alert-success" role="alert">
      Lulus
    </div> 
 
 
 
 <?php 
} else if($rata <65){ ?>
  <div class="alert alert-danger" role="alert">
     Tidak Lulus
    </div>
 <?php }?>

<?php }
?>





    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 <?php }else{
   
   header("location:login.php");
 }?>