<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>sign-in</title>
</head>
<body>
    <form action="" method="post">
    
    
    
    
    </form>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->
<?php
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "pol" && $pass=="123"){
        $_SESSION['login'] = $user;
        header("location:formboot.php");
    }
}else {
    ?>
    <!-- <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
        <h2>Login Here</h2>
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="login" value="login">
        </form>
    </body>
    </html> -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <title>sign-in</title>
    </head>
    <body>
        
        <form action="" method="post">
        <div class="row">
        <div class="container-fluid" style="padding:100px;">
        <div class="col-md-4 m-auto">
        <div class="card border-danger text-center" style="width: 18rem;">
        <h2>Login Here</h2>
        <div class="card-body">
        <div class="form-group">
          <label>User</label>
            <input class="form-control" type="text" name="user" id="">
          </div>
        <div class="form-group">
          <label>Password</label>
            <input class="form-control" type="password" name="pass" id="">
          </div>
          <input type="submit" class="btn btn-primary" name="login" value="login">
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

    <?php }?>