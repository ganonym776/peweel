<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['title'] ?></title>
  <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/style.css">
  <!-- css -->
  <style>

  </style>
</head>

<body class="Penipuan">
  <!-- navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent navbar-fixed-top">
    <div class="container">
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
    </div>
  </nav>
  <!--end navbar -->

  <!-- header -->
  <header>
    <div class="container col-8 col-md-8 col-lg-6">
      <h1 class="text-center">Pusat Bantuan</h1>
    </div>
  </header>
  <!-- end header -->

  <main>
    <div class="container">
      <div class="row">
        <div class="col-9">
          <div class="text-center mb-4">
            <h1>Bagaimana cara mengetahui penipuan ?</h1>
          </div>
          <br>
          <p>
            Berikut ini adalah beberapa ciri/karakteristik dari iklan berbahaya/penjual nakal:
          </p>
          <ol>
            <li>Hindari iklan dari barang/jasa yang terlalu menarik. Misalnya terlalu murah, diskon besar, dan janji-janji yang terlalu muluk.</li>
            <li>Hal-hal yang janggal/aneh pada akan/saat bertransaksi. Misalnya berusaha untuk meminta DP (Down Payment) terlebih dahulu, meminta data pribadi seperti foto/data identitas pribadi, nomor rekening, alamat email Anda, data kartu kredit/debit Anda, dll.</li>
          </ol>
          <br>
          <p>
            Berikut ini adalah beberapa ciri/karakteristik dari Pembeli berbahaya :
          </p>
          <ol>
            <li>Meminta data pribadi seperti foto/data identitas pribadi, nomor rekening, alamat email Anda, data kartu kredit/debit Anda.</li>
            <li>Pembeli mengirimkan bukti transfer palsu.</li>
            <li>Pembeli tidak terlalu menawar produk dan langsung menyetujui harga barang. </li>
          </ol>
        </div>
        <div class="col-3">
          <div class="card">
            <h5 class="text-center mt-3">Isu yang Paling Dicari :</h5>
            <ul>
              <li><a href="<?php echo $data['URLROOT'] ?>/helps/iklan">Bagaimana cara memasang iklan di Bekasan ?</a></li>
              <li><a href="<?php echo $data['URLROOT'] ?>/helps/cari">Bagaimana cara mencari barang di Bekasan ?</a></li>
              <li><a href="<?php echo $data['URLROOT'] ?>/helps/chat">Apa kegunaan fitur chat ?</a></li>
            </ul>
          </div>
        </div>

      </div>
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