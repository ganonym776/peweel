<?php

use Configs\Env;

$env = new Env();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['title'] ?></title>
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">

    <style>
        .bekasan{
            margin-top: 20px;
        }
        .log{
         margin-top:100px; }
        .minitext{
             font-size: x-small;
         }
    </style>
</head>

<body>
  <!-- <form action="<?php echo $env::$URLROOT ?>/auth/login" method="POST">
    <input type="text" name="username" id="username" placeholder="username *">
    <input type="password" name="password" id="password" placeholder="password *">
    <button type="submit">Submit</button>
  </form> -->
  <h1 class="bekasan" align="center">bekasan</h1>
    <div class="log">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img width="700px" src="<?php echo $data['asset'] ?>/images/img1.png"> 
                    <p align="center">Punya barang yang udah ga dipakai? Jual aja di BEKASAN !!</p>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-transparent mb-0"><h6 class="text-center">Silahkan masuk ke dalam akun kamu</h6></div>
                        <div class="card-body">
                          <form name="formPendaftaran" action="" method="post" onsubmit="return validateForm()">
                            <div class="form-group">
                                <p>Masukan email :</p>
                                <input type="text" name="email" class="form-control">
                                <p class=" minitext">Contoh : hellobekasan@gmail.com</p>
                            </div>
                            <div class="form-group">
                                <p>Masukan kata sandi :</p>
                                <input type="text" name="sandi" class="form-control">
                                <p class=" minitext">Hanya gunakan angka, huruf, atau simbol (!@_.)</p>
                            </div>
                            <div class="form-group">
                              <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
                            </div>
                            <p class="text-center minitext">Belum punya akun? <span class="font-weight-bold text-primary"><a link href="Registrasi.html">Daftar di sini!</span></p>
                          </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </dev>

    <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["email"].value == "") {
                alert("Isi emailnya dong !");
                document.forms["formPendaftaran"]["email"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["sandi"].selectedIndex < 1) {
                alert("Kata sandi jangan lupa diisi ya..");
                document.forms["formPendaftaran"]["sandi"].focus();
                return false;
            }
        }
    </script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
</body>

</html>