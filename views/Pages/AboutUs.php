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

<body class="aboutus">
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
            <a class="nav-link" href="<?php echo $data['URLROOT'] ?>/pages/help">Pusat Bantuan</a>
          </li>
        </ul>
      </div>
    </nav>
  </nav>
  <!--end navbar -->

  <!-- header -->
  <header>

  </header>
  <!-- end header -->

  <main>
    <div class="container">
      <section class="mt-5">
        <div class="row">
          <div class="col align-self-center mb-5">
            <h1>Tentang Kami</h1>
            <p>Bekasan dalam hal ini menyediakan Platform perdagangan elektronik (e-commerce) di mana Pengguna dapat melakukan transaksi jual-beli barang bekas dan menggunakan berbagai fitur serta layanan yang tersedia.
              Setiap pihak yang berada di wilayah Negara Kesatuan Republik Indonesia dapat mengakses Platform Bekasan untuk kemudian mengiklankan barang bekas, membeli barang bekas, menggunakan fitur/layanan, atau hanya sekadar mengakses/mengunjungi Platform Bekasan.</p>
          </div>
          <div class="col align-self-center mb-4">
            <img width="400px" src="<?php echo $data['asset'] ?>/img/img5.png" alt="bekasan">
          </div>
        </div>
      </section>
      <section class="mt-5 text-center">
        <h3 class="mb-5 font-weight-bold">Mengapa Berjualan di Bekasan ?</h3>
        <div class="row">
          <div class="col col-md-4">
            <h5 class="font-weight-bold">Menjangkau Seluruh Indonesia</h5>
            <p>Kalian dapat menjual dan membeli barang bekas dari seluruh Indonesia hanya dengan membuka Bekasan.</p>
          </div>
          <div class="col col-md-4">
            <h5 class="font-weight-bold">Mempunyai Fitur yang Banyak</h5>
            <p>Terdapat berbagai fitur yang memudahkan penjual dan pembeli.</p>
          </div>
          <div class="col col-md-4">
            <h5 class="font-weight-bold">Gratis</h5>
            <p>Tidak ada biaya tambahan untuk setiap traksaksi penjualan dan pembalian yang dilakukan di Bekasan.</p>
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
                    <li><a href="<?php echo $data['URLROOT'] ?>/pages/about">Tentang Bekasan</a></li>
                    <li><a href="<?php echo $data['URLROOT'] ?>/pages/help">Pusat Bantuan</a></li>
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

  <script src="<?php echo $data['asset'] ?>/js/jquery-3.5.1.slim.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/retina.min.js"></script>
</body>

</html>