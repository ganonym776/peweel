<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $data['title'] ?></title>
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
</head>

<body>
  <nav class="p-1 bg-light justify-content-end">
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link text-dark" href="./about">Tentang Bekasan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="./about/help">Pusat Bantuan</a>
      </li>
    </ul>
  </nav>
  <div class="p-3 d-flex align-items-center">
    <h4><b>bekasan</b></h4>
    <p class="px-3">Semua Kategori</p>
    <div class="col-md-3 input-group">
      <input type="text" class="form-control" placeholder="Cari Lokasi">
      <div class="input-group-append">
        <span class="input-group-text bg-light"><i class="fa fa-search"></i></span>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>Ini View Dashboard</h2>
  </div>





  <script src="https://kit.fontawesome.com/9bb2823da9.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
</body>

</html>