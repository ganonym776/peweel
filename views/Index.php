<!DOCTYPE html>

<head>
  <!-- Title -->
  <title><?php echo $data['title'] ?></title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/bootstrap/bootstrap.min.css">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/animate.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/hamburgers/hamburgers.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/chosen/chosen.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/themes/base/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/OwlCarousel/dist/assets/owl.theme.default.min.css">

  <!-- CSS Unify Theme -->
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/css/styles.multipage-real-estate.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/css/custom.css">
  <style>
    .bg-menu,
    .bg-menu:link {
      background-color: #5fa2dd;
      border-radius: 100px;
      padding: 0.2rem;
      text-decoration: none;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .bg-menu:hover,
    #profileMenu>li>a {
      text-decoration: none;
      color: whitesmoke;
    }

    #profileMenu {
      list-style-type: none;
      background-color: #5fd2dd;
      border-radius: 20px;
      padding-left: 0;
    }

    #profileMenu>li:hover {
      background-color: #5ec2dd;
    }

    #profileMenu>li>a:link {
      text-decoration: none;
      color: white;
    }
  </style>
</head>

<body>
  <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance" data-header-fix-moment="2000" data-header-fix-effect="slide">
    <div class="u-header__section g-transition-0_5">
      <!-- Topbar -->
      <div class="g-bg-white">
        <div class="container-fluid g-py-15">
          <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-1">
              <!-- Logo -->
              <a class="d-flex" href="<?php echo $data['URLROOT'] ?>">
                <img src="<?php echo $data['asset'] ?>/img/img5.png" alt="Logo Bekasan" height="40">
              </a>
              <!-- End Logo -->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3">
              <div class="d-flex">
                <div class="w-100 align-items-center">
                  <!-- Search Form -->
                  <form class="h-75 g-brd-around g-brd-gray-dark-v2 g-rounded-5 g-pl-10">
                    <span class="g-color-gray-dark-v3 g-pos-abs g-top-5"><i class="fa fa-search"></i></span>
                    <input class="h-100 g-py-12 form-control g-brd-transparent g-color-gray-dark-v4 g-bg-transparent g-font-size-13 g-pl-25" type="text" placeholder="Search by City, Address, ZIP ...">
                  </form>
                  <!-- End Search Form -->
                </div>
              </div>
            </div>
            <div class="d-xl-block d-none col-xl-4 d-xl-flex">
              <div class="w-100 align-items-center">
                <!-- Search Form -->
                <form class="h-75 g-brd-around g-brd-gray-dark-v2 g-rounded-5 g-pl-10">
                  <span class="g-color-gray-dark-v3 g-pos-abs g-pt-5"><i class="fa fa-search"></i></span>
                  <input class="h-100 g-py-12 form-control g-brd-transparent g-color-gray-dark-v4 g-bg-transparent g-font-size-13 g-pl-25" type="text" placeholder="Search by City, Address, ZIP ...">
                </form>
                <!-- End Search Form -->
              </div>
            </div>
            <div class="col-xl-4 col-lg-8 col-md-7 col-sm-8">
              <!-- List -->
              <ul class="list-inline float-right mb-0">
                <?php if (!$_SESSION['username']) { ?>
                  <li class="list-inline-item g-hidden-xs-down g-mx-2">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover g-font-weight-500 g-font-size-12 g-pa-5" href="<?php echo $data['URLROOT'] ?>/pages/about">
                      Tentang Bekasan
                    </a>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down g-mx-2">
                    <span class="g-color-gray-light-v1 g-pos-rel g-top-minus-1">|</span>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down g-mx-2">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover g-font-weight-500 g-font-size-12 g-pa-5" href="<?php echo $data['URLROOT'] ?>/pages/help">
                      Pusat Bantuan
                    </a>
                  </li>
                <?php } ?>
                <li class="list-inline-item">
                  <?php if (!$_SESSION['username']) { ?>
                    <a class="u-link-v5 g-color-main g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10" href="<?php echo $data['URLROOT'] ?>/auth/login">Login</a>
                  <?php } else { ?>
                    <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
                      <!-- Top User -->
                      <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                        <div class="g-pos-rel g-px-10--lg">
                          <a id="profileMenuInvoker" class="bg-menu" href="#!" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                            <span class="g-pos-rel">
                              <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-lightblue-v5 g-mr-5"></span>
                              <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm" src="<?php echo $data['asset'] ?>/unify/img-temp/150x150/img1.jpg" alt="Image description">
                            </span>
                            <span class="g-pos-rel">
                              <span class="g-hidden-sm-down"><?php echo $_SESSION['username'] ?></span>
                              <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                            </span>
                          </a>

                          <!-- Top User Menu -->
                          <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">
                            <li class="mb-0">
                              <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="<?php echo $data['URLROOT'] ?>/user/profil">
                                <span class="d-flex align-self-center g-mr-12">
                                  <i class="hs-admin-shift-right"></i>
                                </span>
                                <span class="media-body align-self-center">Profil</span>
                              </a>
                            </li>
                            <li class="mb-0">
                              <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="<?php echo $data['URLROOT'] ?>/user/signout">
                                <span class="d-flex align-self-center g-mr-12">
                                  <i class="hs-admin-shift-right"></i>
                                </span>
                                <span class="media-body align-self-center">Sign Out</span>
                              </a>
                            </li>
                          </ul>
                          <!-- End Top User Menu -->
                        </div>
                      </div>
                      <!-- End Top User -->
                    </div>
                  <?php } ?>
                </li>
                <li class="list-inline-item">
                  <a class="u-link-v5 g-color-white g-bg-primary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10" href="<?php echo $data['URLROOT'] ?>/user/iklan">Pasang Iklan</a>
                </li>
              </ul>
              <!-- End List -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Topbar -->
  </header>

  <main>
    <?php
    if (isset($data['index'])) {
    ?>
      <div class="container-fluid g-pb-50">
        <!-- Slider owl carousel -->
        <div class="owl-carousel owl-theme">
          <?php foreach ($data['banner'] as $key => $value) { ?>
            <div class="item">
              <img src="<?php echo $value['lokasi_foto'] ?>" alt="<?php echo $value['nama_banner'] ?>">
            </div>
          <?php } ?>
        </div>
        <!-- End Slider owl carousel -->
      </div>

      <!-- New Lands -->
      <div class="container-fluid text-center g-pt-50 g-pb-80">
        <h2 class="h4 g-mb-30">Choose Categories ...</h2>
        <!-- Products - Carousel Image -->
        <div class="js-carousel g-mx-40" data-infinite="true" data-slides-show="3" data-center-mode="true" data-center-padding="60px" data-arrows-classes="u-arrow-v1 g-width-30 g-height-30 g-color-white g-bg-primary g-bg-primary-dark-v1--hover g-absolute-centered--y" data-arrow-left-classes="fa fa-angle-left g-left-minus-40 g-brd-right g-brd-white-opacity-0_1" data-arrow-right-classes="fa fa-angle-right g-right-minus-40" data-responsive='[{
                 "breakpoint": 1800,
                 "settings": {
                   "slidesToShow": 4
                 }
               }, {
                 "breakpoint": 1200,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 2
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "slidesToShow": 1
                 }
               }, {
                 "breakpoint": 576,
                 "settings": {
                   "slidesToShow": 1
                 }
               }, {
                 "breakpoint": 446,
                 "settings": {
                   "slidesToShow": 1
                 }
               }]'>
          <?php
          foreach ($data['kategori'] as $key => $value) {
          ?>
            <div class="js-slide d-flex flex-column align-items-center">
              <a class="u-block-hover" href="<?php if ($data['index']) {
                                                echo $data['URLROOT'] . "/item/index/" . $value["nama_kategori"];
                                              } else {
                                                echo $data['URLROOT'] . "/item/list/" . $value["nama_kategori"];
                                              } ?>">
                <span class="d-block u-block-hover u-bg-overlay g-bg-primary-opacity-0_3--hover--after g-transition-0_3 mb-3">
                  <img class="img-fluid" src="<?php echo $data['asset']; ?>/img/<?php echo $value['icon']; ?>" alt="<?php echo $value['nama_kategori']; ?>" width="90">
                </span>
              </a>
              <h3 class="h6 mb-0">
                <?php echo $value['nama_kategori']; ?>
              </h3>
            </div>
          <?php
          }
          ?>
        </div>
        <!-- Products - Carousel Image -->
      </div>
      <!-- End New Lands -->
    <?php } ?>
    <!-- About -->
    <section class="container g-pt-100 g-pb-70">
      <div class="row">
        <ul class="list-inline nav nav-tabs col-lg-12 d-flex justify-content-center g-font-weight-700 g-font-size-17 text-uppercase" role="tablist">
          <li class="list-inline-item g-mx-15 active"><a href="#penjual" role="tab" data-toggle="tab"><span class="g-color-gray-dark-v3">PENJUAL</span></a></li>
          <li class="list-inline-item g-mx-15"><a href="#pembeli" role="tab" data-toggle="tab"><span class="g-color-gray-dark-v3">PEMBELI</span></a></li>
        </ul>
      </div>
      <div class="tab-content">
        <div id="penjual" class="masonry-grid tab-pane g-pt-40 active">
          <div class="row">
            <div class="masonry-grid-item col-md-6 g-mb-30">
              <div class="g-px-50--lg g-pt-50--lg u-divider-right">
                <h2 class="h3 g-color-black g-font-weight-600">Langkah 1</h2>
                <p class="g-color-black g-font-weight-600">This is where we sit down, grab a cup of coffee and dial in
                  the
                  details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is
                  really crucial in keeping the project in line to completion.</p>
              </div>
            </div>

            <div class="masonry-grid-item col-sm-6 col-md-5 g-mb-30">
              <img class="img-fluid w-100" src="<?php echo $data['asset']; ?>/unify/img-temp/500x320/img1.jpg" alt="Image description">
            </div>
          </div>
          <div class="row">
            <div class="masonry-grid-item col-sm-6 col-md-5 g-offset-md-1 g-mb-30">
              <img class="img-fluid w-100" src="<?php echo $data['asset']; ?>/unify/img-temp/500x320/img1.jpg" alt="Image description">
            </div>

            <div class="masonry-grid-item col-md-6 g-mb-30">
              <div class="g-px-50--lg g-pt-50--lg">
                <h2 class="h3 g-color-black g-font-weight-600">What We Do</h2>
                <p class="g-color-black g-font-weight-600">This is where we sit down, grab a cup of coffee and dial in
                  the details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is
                  really crucial in keeping the project in line to completion.</p>
              </div>
            </div>
          </div>
        </div>
        <div id="pembeli" class="masonry-grid row tab-pane g-pt-40">
          <div class="row">
            <div class="masonry-grid-item col-md-6 g-mb-30">
              <div class="g-px-50--lg g-pt-50--lg u-divider-right">
                <h2 class="h3 g-color-black g-font-weight-600">Langkah 2</h2>
                <p class="g-color-black g-font-weight-600">This is where we sit down, grab a cup of coffee and dial in
                  the
                  details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is
                  really crucial in keeping the project in line to completion.</p>
              </div>
            </div>

            <div class="masonry-grid-item col-sm-6 col-md-5 g-mb-30">
              <img class="img-fluid w-100" src="<?php echo $data['asset']; ?>/unify/img-temp/500x320/img2.jpg" alt="Image description">
            </div>
          </div>
          <div class="row">
            <div class="masonry-grid-item col-sm-6 col-md-5 g-offset-md-1 g-mb-30">
              <img class="img-fluid w-100" src="<?php echo $data['asset']; ?>/unify/img-temp/500x320/img3.jpg" alt="Image description">
            </div>

            <div class="masonry-grid-item col-md-6 g-mb-30">
              <div class="g-px-50--lg g-pt-50--lg">
                <h2 class="h3 g-color-black g-font-weight-600">What We Do</h2>
                <p class="g-color-black g-font-weight-600">This is where we sit down, grab a cup of coffee and dial in
                  the details. Understanding the task at hand and ironing out the wrinkles is key.</p>
                <p>Now that we've aligned the details, it's time to get things mapped out and organized. This part is
                  really crucial in keeping the project in line to completion.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About -->

    <hr class="g-brd-gray-light-v4">

    <div class="container">
      <div class="mx-auto g-mt-80">
        <h2 class="g-color-black u-divider-left">Rekomendasi</h2>
      </div>
      <hr class="g-brd-gray-light-v4">
      <div id="carouselCus1" class="js-carousel g-pb-100 g-mx-minus-10" data-infinite="true" data-slides-show="4" data-lazy-load="ondemand">
        <?php foreach ($data['item'] as $key => $value) { ?>
          <div class="js-slide">
            <div class="g-px-10">
              <!-- Product -->
              <figure class="g-pos-rel g-mb-20">
                <img class="img-fluid" data-lazy="<?php echo $value['lokasi_foto'] ?>" alt="<?php echo $value['nama_item']; ?>">
              </figure>

              <div class="media">
                <!-- Product Info -->
                <div class="d-flex flex-column">
                  <h4 class="h6 g-color-black mb-1">
                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                      <?php echo $value['nama_item']; ?>
                    </a>
                  </h4>
                  <span class="d-block g-color-black g-font-size-17"><?php echo "Rp " . number_format($value['harga'], 2, ',', '.'); ?></span>
                </div>
                <!-- End Product Info -->
              </div>
              <!-- End Product -->
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="container g-pb-100">
      <div class="mx-auto">
        <h2 class="g-color-black u-divider-left">Barang terbaru</h2>
      </div>
      <hr class="g-brd-gray-light-v4">
      <div id="carouselCus1" class="js-carousel g-pb-100 g-mx-minus-10" data-infinite="true" data-slides-show="4" data-lazy-load="ondemand">

        <?php foreach ($data['item'] as $key => $value) { ?>
          <div class="js-slide">
            <div class="g-px-10">
              <!-- Product -->
              <figure class="g-pos-rel g-mb-20">
                <img class="img-fluid" data-lazy="<?php echo $value['lokasi_foto'] ?>" alt="<?php echo $value['nama_item']; ?>">
              </figure>

              <div class="media">
                <!-- Product Info -->
                <div class="d-flex flex-column">
                  <h4 class="h6 g-color-black mb-1">
                    <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                      <?php echo $value['nama_item']; ?>
                    </a>
                  </h4>
                  <span class="d-block g-color-black g-font-size-17"><?php echo "Rp " . number_format($value['harga'], 2, ',', '.'); ?></span>
                </div>
                <!-- End Product Info -->
              </div>
              <!-- End Product -->
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

  </main>
  <hr>
  <!-- Footer -->
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
  <!-- End Footer -->

  <!-- JS Global Compulsory -->
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/popper.min.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?php echo $data['asset']; ?>/unify/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widget.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widgets/mouse.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widgets/slider.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/chosen/chosen.jquery.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/slick-carousel/slick/slick.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

  <!-- jQuery UI Core -->
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widget.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/version.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/keycode.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/position.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/unique-id.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/safe-active-element.js"></script>

  <!-- jQuery UI Helpers -->
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widgets/mouse.js"></script>

  <!-- jQuery UI Widgets -->
  <script src="<?php echo $data['asset']; ?>/unify/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

  <!-- JS Unify -->
  <script src="<?php echo $data['asset']; ?>/unify/js/hs.core.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.header.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/helpers/hs.hamburgers.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.dropdown.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.slider.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.select.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.carousel.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.popup.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.datepicker.js"></script>
  <script src="<?php echo $data['asset']; ?>/unify/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="<?php echo $data['asset']; ?>/unify/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function() {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
      $(".owl-carousel").owlCarousel({
        slideSpeed: 300,
        items: 1,
        paginationSpeed: 400,
        singleItem: true,
        stagePadding: 50,
        loop: true,
        margin: 10,
        nav: false,
      });
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        afterOpen: function() {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of range slider
      $.HSCore.components.HSSlider.init('#rangeSlider1');

      // initialization of custom select
      $.HSCore.components.HSSelect.init('.js-custom-select');

      // initialization of carousel
      $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox');

      // initialization of datepicker
      $.HSCore.components.HSDatepicker.init('#datepickerFrom');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>

</html>