<!DOCTYPE html>
<html>
  <head>
        <title>SIGN UP PETUGAS</title>
        <link href="ASSETS/RANDOM/LOGO.png" rel="shortcut icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="style_login.css" rel="stylesheet">
        <style>
            .login{
                height: 139.8vh;
                width: 100vw;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
<body>
<div class="login">
            <form action="proses_login_toko.php" method="post" class="form" enctype="multipart/form-data">
                <img src="ASSETS/RANDOM/LOGO.png" alt="">
                <h2><b>WELCOME</b></h2>
                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                Login As : 
            <select name="level" class="form-control"><br>
            <option></option>
            <option value="petugas">Admin</option>
            <option value="pelanggan">Customer</option>
            <!-- <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center> -->
            </select>
                <br>
                <center><input type="submit" value="LOGIN" class="submit"></center> <br>
                <center><p>Don't have an Account ? <a href="tambah_petugas.php">Sign Up</a></p></center>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>