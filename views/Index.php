<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Cache-control" content="no-cache">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $data['title'] ?></title>
  <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <style>
    .swiper-button-prev {
      padding-left: 5rem;
    }

    .swiper-button-next {
      padding-right: 5rem;
    }

    .swiper-container {
      width: 100vw;
      height: 350px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .category {
      margin: 0 0.2rem;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .category-img {
      background-color: tomato;
      width: 9rem;
      height: 9rem;
    }
  </style>
</head>

<body class="home">
  <!-- navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent navbar-fixed-top">
    <nav class="container">
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

  <div class="p-3 d-flex align-items-center justify-content-center">
    <a class="navbar-brand align-self-center" href="<?php echo $data['URLROOT'] ?>">
      <img src="<?php echo $data['asset'] ?>/img/img5.png" alt="Logo Bekasan">
    </a>
    <p class="px-3 mb-0">Semua Kategori</p>
    <div class="col-md-3 input-group">
      <input type="text" class="form-control" placeholder="Cari Lokasi">
      <div class="input-group-append">
        <span class="input-group-text bg-light"><i class="fa fa-search text-black-50"></i></span>
      </div>
    </div>
    <div class="col-md-4 input-group">
      <input type="text" class="form-control" placeholder="Iphone 2">
      <div class="input-group-append">
        <span class="input-group-text bg-light"><i class="fa fa-search text-black-50"></i></span>
      </div>
    </div>
    <div class="line"></div>
    <div class="navbar navbar-expand-md navbar-light px-0">
      <div class="navbar-nav nav-pills">
        <div class="nav-item">
          <a class="nav-link m-0" href="<?php echo $data['URLROOT'] ?>/auth/login">Login</a>
        </div>
        <div class="nav-item active">
          <a class="nav-link m-0" href="#">Jual</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slider main container -->
  <div class="swiper-container">

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

      <!-- Slides -->
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>

    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>

  <div class="container mt-5">
    <h4 class="">Kategori</h4>
    <div class="row my-2">
      <div class="col category">
        <div class="category-img"></div>
        <p>1 of 6</p>
      </div>
      <div class="col category">
        <div class="category-img"></div>
        <p>2 of 6</p>
      </div>
      <div class="col category">
        <div class="category-img"></div>
        <p>3 of 6</p>
      </div>
      <div class="col category">
        <div class="category-img"></div>
        <p>4 of 6</p>
      </div>
      <div class="col category">
        <div class="category-img"></div>
        <p>5 of 6</p>
      </div>
      <div class="col category">
        <div class="category-img"></div>
        <p>6 of 6</p>
      </div>
    </div>
  </div>

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


  <script src="https://kit.fontawesome.com/9bb2823da9.js" crossorigin="anonymous"></script>
  <script src="<?php echo $data['asset'] ?>/js/jquery-3.5.1.slim.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var mySwiper = new Swiper('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 30,
      slidesPerView: 3,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    })
  </script>
</body>

</html>