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
            padding: 200px 0px 50px;
            background-image: url('images/img8.jpg');
            background-size: cover;
            background-position: center;
            margin-bottom: 100px;
        }
        header h1{
          color: #ffffff;
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
      <div class="container col-8 col-md-8 col-lg-6">
        <h1 class="text-center">Pusat Bantuan</h1>
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
    </header>
    <!-- end header -->

    <main>
        <div class="container">
          <div class="row">
            <div class="col-9">
                <div class="text-center mb-4">
                  <h1>Bagaimana cara mencari barang di Bekasan ?</h1>
                </div>
                <p>Ada beberapa cara untuk mencari barang di Bekasan</p>
                <ol>
                  <li>Buka halaman utama Bekasan lalu klik filter.</li>
                  <li>Mencari pada tombol search di header</li>
                </ol>
            </div>
            <div class="col-3">
              <div class="card">
                <h5 class="text-center mt-3">Isu yang Paling Dicari :</h5>
                <ul>
                  <li><a href="pusatbantuan-pasangiklan.html">Bagaimana cara memasang iklan di Bekasan ?</a></li>
                  <li><a href="pusatbantuan-chat">Apa kegunaan fitur chat ?</a></li>
                  <li><a href="pusatbantuan-penipuan">Bagaimana cara mengetahui penipuan ?</a></li>
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