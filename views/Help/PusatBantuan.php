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

<body class="pusat-bantuan">
  <!-- navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent navbar-fixed-top">
    <nav class="container">
      <a class="navbar-brand align-self-center" href="<?php echo $data['URLROOT'] ?>">
        <img src="<?php echo $data['asset'] ?>/img/img5.png" alt="Logo Bekasan">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $data['URLROOT'] ?>/pages/aboutus">Tentang Kami <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $data['URLROOT'] ?>/helps/index">Pusat Bantuan</a>
          </li>
        </ul>
      </div>
    </nav>
  </nav>
  <!--end navbar -->

  <!-- header -->
  <header>
    <img class="img-head" width="500px" src="<?php echo $data['asset'] ?>/img/img11.jpg">
    <div class="container col-8 col-md-8 col-lg-6">
      <h1 class="text-center">Butuh bantuan?</h1>
    </div>
  </header>
  <!-- end header -->

  <main>
    <div class="container">
      <h2>Isu yang paling dicari :</h2>
      <br>
      <section class="mb-5">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bagaimana cara pasang iklan?</h5>
                <p class="card-text">Kini pasang iklan di <b>Bekasan</b> sangat mudah dan cepat, berikut ini langkah pasang iklan di <b>Bekasan</b> yang Anda dapat ikuti:</p>
                <a href="<?php echo $data['URLROOT'] ?>/helps/iklan" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Apa kegunaan fitur chat?</h5>
                <p class="card-text">Untuk meningkatkan transaksi yang menguntungkan untuk penjual dan pembeli, Bekasan menghadirkan fitur chat.</p>
                <a href="<?php echo $data['URLROOT'] ?>/helps/chat" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="row mb-5">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bagaimana cara mencari barang di Bekasan?</h5>
                <p class="card-text"> Bekasan telah mencoba membuat fitur pencarian menjadi lebih sederhana, nyaman & mudah digunakan.</p>
                <a href="<?php echo $data['URLROOT'] ?>/helps/cari" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bagaimana cara mengetahui penipuan?</h5>
                <p class="card-text">Berikut ini adalah beberapa ciri/karakteristik dari iklan berbahaya/penjual nakal yang perlu dihindari :</p>
                <a href="<?php echo $data['URLROOT'] ?>/helps/penipu" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <footer class="mt-5 mb-4 border-top">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-12 col-lg-3">
                  <img width="200px" src="<?php echo $data['asset'] ?>/img/img10.png">
                </div>
                <div class="col-12 col-lg-3">
                  <h5>BEKASAN</h5>
                  <ul class="list-unstyled">
                    <li><a href="<?php echo $data['URLROOT'] ?>/pages/aboutus">Tentang Bekasan</a></li>
                    <li><a href="<?php echo $data['URLROOT'] ?>/helps/index">Pusat Bantuan</a></li>
                  </ul>
                </div>
                <div class="col-12 col-lg-3">
                  <h5>Kontak</h5>
                  <ul class="list-unstyled">
                    <li>Yogyakarta</li>
                    <li>Indonesia</li>
                    <li>0821 - 2222 - 8888</li>
                    <li>support@bekasan.id</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row border-top justify-content-center align-items-center pt-4">
        <div class="col-auto text-gray-500 font-weight-light">
          2020 Copyright Bekasan
        </div>
      </div>
    </div>
  </footer>


  <script src="<?php echo $data['asset'] ?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/bootstrap.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/retina.min.js"></script>
</body>

</html>