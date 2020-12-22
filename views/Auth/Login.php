<?php?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/style.css">
</head>

<body class="container login">
    <div class="bekasan" style="display: flex; justify-content:center; ">
        <img src="<?php echo $data['asset'] ?>/img/logo.svg" alt="logo" width="30">
        <h1 class="mt-1">bekasan</h1>
    </div>
    <div class="content">
        <div class="">
            <div class="row">
                <div class="col-7">
                    <img width="700px" src="<?php echo $data['asset'] ?>/img/img1.png">
                    <p align="center">Punya barang yang udah ga dipakai? Jual aja di BEKASAN !!</p>
                </div>
                <div class="col-5">
                    <div class="card">
                        <div class="card-header bg-transparent mb-0">
                            <h6 class="text-center">Silahkan masuk ke dalam akun kamu</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $data['URLROOT'] ?>/auth/login" method="post">
                                <div class="form-group">
                                    <p>Masukan email :*</p>
                                    <input type="email" name="email" class="form-control <?php if (isset($data['error']['email']) || isset($data['error']) && is_string($data['error'])) : echo 'is-invalid';
                                                                                            endif ?>" placeholder="Email *" value="<?php echo $data['email'] ?>" required>
                                    <?php if (!isset($data['error'])) : ?>
                                        <p class=" minitext">Contoh : hellobekasan@gmail.com</p>
                                    <?php elseif (is_string($data['error'])) : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error'] ?>
                                        </div>
                                    <?php else : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error']['email'] ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <p>Masukan kata sandi :*</p>
                                    <input type="password" name="password" class="form-control <?php if (isset($data['error']['password']) || isset($data['error']) && is_string($data['error'])) : echo 'is-invalid';
                                                                                                endif ?>" placeholder="Kata sandi *" required>
                                    <?php if (isset($data['error']['password'])) : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error']['password'] ?>
                                        </div>
                                    <?php elseif (isset($data['error']) && is_string($data['error'])) : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error'] ?>
                                        </div>
                                    <?php endif ?>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
                                </div>
                                <p class="text-center minitext">Belum punya akun? <span class="font-weight-bold text-primary"><a href="<?php echo $data['URLROOT'] ?>">Daftar di sini!</a></span></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </dev>

        <script>
            // function validateForm() {
            //     if (document.forms["formPendaftaran"]["email"].value == "") {
            //         alert("Isi emailnya dong !");
            //         document.forms["formPendaftaran"]["email"].focus();
            //         return false;
            //     }
            //     if (document.forms["formPendaftaran"]["sandi"].selectedIndex < 1) {
            //         alert("Kata sandi jangan lupa diisi ya..");
            //         document.forms["formPendaftaran"]["sandi"].focus();
            //         return false;
            //     }
            // }
        </script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
</body>

</html>