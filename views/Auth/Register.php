<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">

    <style>
        .bekasan{
            margin-top: 20px;
        }
        .log{
         margin-top:50px; }
        .minitext{
             font-size: x-small;
         }
    </style>
</head>

<body class="container">
    <!-- <h2>Register</h2> -->
    <!-- <form action="/auth/register" method="post">
        <div class="input-group" style="display:flex; flex-direction:column; padding:1rem 0;">
            <input type="text" name="first_name" id="first_name" placeholder="Nama Depan *" required>
            <input type="text" name="last_name" id="last_name" placeholder="Nama Belakang *" required>
            <input type="email" name="email" id="email" placeholder="Email *" required>
            <input type="password" name="password" id="password" placeholder="Kata Sandi *" required>
            <input type="password" name="re_password" id="re_password" placeholder="Konfirmasi Kata Sandi *" required>
        </div>
        <button class="btn btn-primary" type="submit">Daftar</button>
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
                        <div class="card-header bg-transparent mb-0"><h5 class="text-center">Daftar Akun Baru</h5></div>
                        <div class="card-body">
                            <form name="formPendaftaran" action="" method="post" onsubmit="return validateForm()">
                            <div class="form-group">
                                <p>Masukan nama depan :</p>
                                <input type="text" name="namadepan" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Masukan nama belakang :</p>
                                <input type="text" name="namabelakang" class="form-control">
                            </div>
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
                              <input type="submit" name="" value="Daftar" class="btn btn-primary btn-block">
                            </div>
                            <p  class="minitext text-center">Sudah punya akun? <span class="font-weight-bold text-primary"><a link href="login.html">Masuk di sini!</span></p>
                          </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </dev>
    <script>
        function validateForm() {
            if (document.forms["formPendaftaran"]["namadepan"].value == "") {
                alert("Isi nama depannya ya !");
                document.forms["formPendaftaran"]["namadepan"].focus();
                return false;
            }
            if (document.forms["formPendaftaran"]["namabelakang"].value == "") {
                alert("Isi nama belakangnya dong !");
                document.forms["formPendaftaran"]["namabelakang"].focus();
                return false;
            }
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
</body>

</html>