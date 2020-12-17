<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?></title>
    <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
</head>

<body class="container">
    <h2>Register</h2>
    <form action="/auth/register" method="post">
        <div class="input-group" style="display:flex; flex-direction:column; padding:1rem 0;">
            <input type="text" name="first_name" id="first_name" placeholder="Nama Depan *" required>
            <input type="text" name="last_name" id="last_name" placeholder="Nama Belakang *" required>
            <input type="email" name="email" id="email" placeholder="Email *" required>
            <input type="password" name="password" id="password" placeholder="Kata Sandi *" required>
            <input type="password" name="re_password" id="re_password" placeholder="Konfirmasi Kata Sandi *" required>
        </div>
        <button class="btn btn-primary" type="submit">Daftar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
</body>

</html>