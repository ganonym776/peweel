<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/style.css">
    <style>

    </style>
</head>

<body>
    <div class="container not-found">
        <img src="<?php echo $data['asset'] ?>/img/img2.png">
        <h1>Oopss!!!</h1>
        <p>Halaman yang kamu cari tidak ditemukan. Silahkan kembali ke <span class="font-weight-bold text-primary"><a link href="<?php echo $data['URLROOT'] ?>">Halaman Utama.</span></p>
        </p>
    </div>
</body>

</html>