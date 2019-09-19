<?php
session_start();
if (isset($_SESSION['login'])) {
if (isset($_POST['simpan'])) {
    // data diri
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $kelamin=$_POST['kelamin'];
    $jumlah=$_POST['jumlah'];
    $tanggal=$_POST['tanggal'];


    // buku
    $judul=$_POST['judul'];
    $kode=$_POST['kode'];
    $pengarang=$_POST['pengarang'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];



}


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


<!-- data diri -->
<table class="table table-responsive-md table-dark">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php echo"$nama";?></td>
    <td><?php echo"$alamat";?></td>
    <td><?php echo"$kelamin";?></td>
    <td><?php echo"$jumlah";?></td>
    <td><?php echo"$tanggal";?></td>
    </tr>
  </tbody>
</table>




<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Kode</th>
      <th scope="col">pengarang</th>
      <th scope="col">jenis</th>
      <th scope="col">harga</th>
    </tr>
  </thead>
  <tbody>
    
<?php for ($i=0; $i < count($judul) ; $i++) {?> 
    <tr>
    <td><?php echo"$judul[$i]";?></td>
    <td><?php echo"$kode[$i]";?></td>
    <td><?php echo"$pengarang[$i]";?></td>
    <td><?php echo"$jenis[$i]";?></td>
    <td><?php echo"$harga[$i]";?></td>
    </tr>
    <?php }
    $total1 = array_sum($harga);
    var_dump($total1);
    if($jumlah >= 5){
        $total = ($total1*10)/100;
        
    }
    elseif ($jumlah >=3) {
        $total = ($total1*5)/100;
    }
    elseif ($jumlah < 3) {
        $total = 0;
    }
    $hasil = $total1-$total;
    var_dump($hasil);
    // $total1 = "Rp.".number_format($total1,0,",",".");
    // $total = "Rp.".number_format($total,0,",",".");
    // $hasil = "Rp.".number_format($hasil,0,",",".");
    ?>
    </tbody>
</table>

<div class="container-fluid">
<div class="row">
<div class="card w-100">
  <div class="card-header">
    Pembelian
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Jumlah Total             :       <?php echo $total1;?></li>
    <li class="list-group-item">Jumlah diskon            :       <?php echo $total;?></li>
    <li class="list-group-item">Yang Harus Dibayar       :       <?php echo "$hasil";?></li>
    <li class="list-group-item">
    <form action="" method="POST">
    <div class="form-group">
        <label >Bayar</label>
            <input class="form-control" type="number" name="beli" id="">
            <input type="submit" value="Bayar" class="btn btn-primary" name="bayar">
        </div>
    </form>
    </li>
    <li>
    <?php 
    if (isset($_POST['bayar'])) {
        var_dump($hasil);
        $bayar = $_POST['beli'];
        $hasil1 = $bayar-$hasil;
            ?>

        <div class="alert alert-success" role="alert">
            Terima Kasih, Ini Kembalian : <?php  echo $hasil1?>
        </div>
        <label for="">Ingin Beli Lagi</label>
        <form action="" method="get">
        <input type="submit" value="Simpan" class="btn btn-primary" name="masuk">
        </form>
        
            <?php
        if (isset($_GET['masuk'])) {
                header("location:toko.php");
        }
    } 
    ?>
        </li>
    </ul>
</div>
</div>
</div>



    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }else{
   
   header("location:login.php");
 }?>