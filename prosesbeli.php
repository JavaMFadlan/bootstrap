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
      </li>
      <li>
      <a href="toko.php"><input class="btn btn-danger" type="submit" name="login" value="Toko"></a><br>
      </li>
      <li>
      <a href="logout.php"><input class="btn btn-danger" type="submit" name="login" value="logout"></a><br>
      </li>
    </ul>
  </div>
</nav>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php }else{
   
   header("location:login.php");
 }?>