<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: #ffffff;
            font-family: 'Nunito', sans-serif;
        }
        /* navbar */
        .navbar{
            background-color: #ffffff;
        }
        .navbar-brand img{
            max-height: 40px;
        }
        .btn-navbar-right{
            margin-top: -10px !important;
            margin-bottom: -8px !important;
            margin-right: -18px !important;

            height: 70px;
            border-radius: 0;
        }
        /* header */
        header{
            padding: 180px 0px 165px;
            background-image: url('images/img8.jpg');
            background-size: cover;
            background-position: center;
            margin-bottom: 100px;

        }
        main section{
            margin-bottom: 100px;
            margin-top: 200px;
        }
        

        
    </style>
</head>
<body>
    <!-- navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent navbar-fixed-top">
            <nav class="container">
                <a class="navbar-brand align-self-center" href="#">
                    <img src="images/img5.png" alt="Logo Bekasan">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.html">Tentang Kami <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pusatbantuan.html">Pusat Bantuan</a>
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
                <img width="400px" src="images/img5.png" alt="bekasan">
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
                      <img width="200px" src="images/img10.png">
                    </div>
                    <div class="col-12 col-lg-3">
                      <h5>BEKASAN</h5>
                      <ul class="list-unstyled">
                        <li><a href="#">Tentang Bekasan</a></li>
                        <li><a href="#">Pusat Bantuan</a></li>
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
    
    
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/retina.min.js"></script>
</body>
</html>