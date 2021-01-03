<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/style.css">
</head>

<body class="container register">
    <div class="bekasan" style="display: flex; justify-content:center; ">
        <a href="<?php echo $data['URLROOT'] ?>"><img class="my-2" src="<?php echo $data['asset'] ?>/img/img5.png" alt="logo" width="200"></a>
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
                            <h5 class="text-center">Daftar Akun Baru</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $data['URLROOT'] ?>/auth/register" method="post" id="regForm">
                                <div class="regis_tab">
                                    <h3 class="py-1">Informasi Akun</h3>
                                    <div class="form-group">
                                        <p>Masukan username :*</p>
                                        <input type="text" name="username" placeholder="Username *" value="<?php echo $data['username'] ?>" required class="form-control <?php echo (isset($data['error']['username'])) ? 'is-invalid' : ''; ?>">
                                    </div>
                                    <?php if (isset($data['error']['username'])) : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error']['username'] ?>
                                        </div>
                                    <?php endif ?>
                                    <div class="form-group">
                                        <p>Masukan email :*</p>
                                        <input type="email" name="email" placeholder="Email *" value="<?php echo $data['email'] ?>" required class="form-control <?php echo (isset($data['error']['email'])) ? 'is-invalid' : ''; ?>">
                                    </div>
                                    <?php if (isset($data['error']['email'])) : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error']['email'] ?>
                                        </div>
                                    <?php endif ?>
                                    <div class="form-group">
                                        <p>Masukan kata sandi :*</p>
                                        <input type="password" name="password" placeholder="Kata Sandi *" required class="form-control <?php echo (isset($data['error']['password'])) ? 'is-invalid' : ''; ?>">
                                        <p class=" minitext">Hanya gunakan angka, huruf, atau simbol (!@_.)</p>
                                    </div>
                                    <?php if (isset($data['error']['password'])) : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error']['password'] ?>
                                        </div>
                                    <?php endif ?>
                                    <div class="form-group">
                                        <p>Masukan konfirmasi kata sandi :*</p>
                                        <input type="password" name="re_password" placeholder="Konfirmasi Kata Sandi *" required class="form-control <?php echo (isset($data['error']['re_password'])) ? 'is-invalid' : ''; ?>">
                                    </div>
                                    <?php if (isset($data['error']['re_password'])) : ?>
                                        <div class="error-feedback">
                                            <?php echo $data['error']['re_password'] ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="regis_tab">
                                    <h3 class="py-1">Informasi Personal</h3>
                                    <div class="form-group">
                                        <p>Masukan nama depan :*</p>
                                        <input type="text" name="first_name" class="form-control <?php echo (isset($data['error']['first_name'])) ? 'is-invalid' : ''; ?>" placeholder="Nama Depan *" value="<?php echo $data['first_name'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <p>Masukan nama belakang :*</p>
                                        <input type="text" name="last_name" class="form-control <?php echo (isset($data['error']['last_name'])) ? 'is-invalid' : ''; ?>" placeholder="Nama Belakang *" value="<?php echo $data['last_name'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <p>Masukan Nomor Telpon :*</p>
                                        <input type="text" name="phone_num" class="form-control <?php echo (isset($data['error']['phone_num'])) ? 'is-invalid' : ''; ?>" placeholder="Nomor Telpon *" value="<?php echo $data['phone_num'] ?>" required>
                                    </div>
                                </div>
                                <div class="regis_tab">
                                    <h3 class="py-1">Informasi Personal</h3>
                                    <div class="form-group">
                                        <p>Provinsi :*</p>
                                        <select name="provinsi" class="form-control <?php echo (isset($data['error']['provinsi'])) ? 'is-invalid' : ''; ?>" placeholder="Provinsi *" value="<?php echo $data['provinsi'] ?>" required>
                                            <option value="DIY">DIY</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <p>Kabupaten :*</p>
                                        <select name="kabupaten" class="form-control <?php echo (isset($data['error']['kabupaten'])) ? 'is-invalid' : ''; ?>" placeholder="Kabupaten *" value="<?php echo $data['kabupaten'] ?>" required>
                                            <option value="Sleman">Sleman</option>
                                            <option value="Kota Yogya">Kota Yogya</option>
                                            <option value="Bantul">Bantul</option>
                                            <option value="Kulon Progo">Kulon Progo</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <p>Masukan Alamat :</p>
                                        <textarea name="address" id="address" cols="42" rows="2" placeholder="Alamat " class="<?php echo (isset($data['error']['address'])) ? 'is-invalid' : ''; ?>"><?php echo $data['address'] ?></textarea>
                                    </div>
                                </div>

                                <div style="overflow:auto;">
                                    <div style="display:flex; justify-content:flex-end;">
                                        <button type="button" class="btn btn-secondary mr-2" id="prevBtn" onclick="regis_nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-primary" id="nextBtn" onclick="regis_nextPrev(1)">Next</button>
                                    </div>
                                </div>
                                <!-- Circles which indicates the steps of the form: -->
                                <div class="mt-1" style="text-align:center;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>
                                <p class="minitext text-center mt-3">Sudah punya akun? <span class="font-weight-bold text-primary"><a href="<?php echo $data['URLROOT'] ?>/auth/login">Masuk di sini!</a></span></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $data['asset'] ?>/js/app.js"></script>
</body>

</html>