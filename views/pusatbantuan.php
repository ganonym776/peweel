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

    <!-- css -->
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
            padding: 50px 0px 50px;
            

        }
        img.img-head{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        header h1{
            font-weight: bolder;
        }
        
        /* main */
        main {
            margin-bottom: 50px;
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
    <header >
        <img class="img-head" width="500px" src="images/img11.jpg">
        <div class="container">
            <h1 class="text-center">Butuh bantuan?</h1>
            <div class="row justify-content-center">
                <div class="col-8 col-md-8 col-lg-6">
                    <form>
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Cari isu ..">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-lg btn-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                          <p class="card-text">Kini pasang iklan di OLX sangat mudah dan cepat, berikut ini langkah pasang iklan di OLX yang Anda dapat ikuti:</p>
                          <a href="pusatbantuan-pasangiklan.html" class="btn btn-primary">Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Apa kegunaan fitur chat?</h5>
                          <p class="card-text">Untuk meningkatkan transaksi yang menguntungkan untuk penjual dan pembeli, Bekasan menghadirkan fitur chat.</p>
                          <a href="#" class="btn btn-primary">Selengkapnya</a>
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
                          <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Bagaimana cara mengetahui penipuan?</h5>
                          <p class="card-text">Berikut ini adalah beberapa ciri/karakteristik dari iklan berbahaya/penjual nakal yang perlu dihindari :</p>
                          <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                </div>
            </section>
            <section>
                <h2>Cari Kategori Lainnya ?</h2>
                <div class="row mt-5">
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <a href="#"><img width="200px" src="images/privasi.png"></a>
                          <p class="text-center">Hukum dan Privasi</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card">
                          <div class="card-body">
                            <a href="#"><img width="200px" src="images/akun.png"></a>
                            <p class="text-center">Akun dan Profil</p>
                          </div>
                        </div>
                      </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <a href="#"><img width="200px" src="images/iklan.png"></a>
                          <p class="text-center">Iklan</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card">
                          <div class="card-body">
                            <a href="#"><img width="200px" src="images/chat.png"></a>
                            <p class="text-center">Chat</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <a href="#"><img width="200px" height="150px" src="images/pembelian.png"></a>
                          <p class="text-center">Pembelian</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card">
                          <div class="card-body">
                            <a href="#"><img width="200px" height="150px" src="images/penjualan.png"></a>
                            <p class="text-center">Penjualan</p>
                          </div>
                        </div>
                      </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <a href="#"><img width="200px" height="150px" src="images/keamanan.png"></a>
                          <p class="text-center">Keamanan</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card">
                          <div class="card-body">
                            <a href="#"><img width="200px" height="150px" src="images/tentang.png"></a>
                            <p class="text-center">Tentang Bekasan</p>
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