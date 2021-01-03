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
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/css/style.css">

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
              <div class="d-flex pt-2">
                <div class="w-100 align-items-center">
                  <!-- Search Form -->
                  <form class="h-75 g-brd-around g-brd-gray-dark-v2 g-rounded-5 g-pl-10 g-pos-rel">
                    <span class="g-color-gray-dark-v3 g-pos-abs g-top-5"><i class="fa fa-search"></i></span>
                    <input class="h-100 g-py-12 form-control g-brd-transparent g-color-gray-dark-v4 g-bg-transparent g-font-size-13 g-pl-25" type="text" placeholder="Search by City, Address, ZIP ...">
                  </form>
                  <!-- End Search Form -->
                </div>
              </div>
            </div>
            <div class="d-xl-block d-none col-xl-4 d-xl-flex">
              <div class="w-100 align-items-center pt-2">
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

                <li class="list-inline-item">
                  <a class="u-link-v5 g-color-main g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10" href="<?php echo $data['URLROOT'] ?>/auth/login">Login</a>
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

  <!-- Slider main container -->
  <main>
    <div class="swiper-container">

      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">

        <!-- Slides -->
        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $data['asset'] ?>/unify/img-temp/1920x500/img1.jpg" alt="Image Description"></div>
        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $data['asset'] ?>/unify/img-temp/1920x500/img1.jpg" alt="Image Description"></div>
        <div class="swiper-slide"> <img class="img-fluid" src="<?php echo $data['asset'] ?>/unify/img-temp/1920x500/img1.jpg" alt="Image Description"></div>

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


  <script src="https://kit.fontawesome.com/9bb2823da9.js" crossorigin="anonymous"></script>
  <script src="<?php echo $data['asset'] ?>/js/jquery-3.5.1.slim.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- JS Unify -->
  <script src="<?php echo $data['asset'] ?>/unify/js/hs.core.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.header.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/helpers/hs.hamburgers.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.dropdown.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.slider.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.select.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.carousel.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.popup.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.datepicker.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.go-to.js"></script>

  <script>
    var mySwiper = new Swiper('.swiper-container', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 10,
      slidesPerView: 1,
      autoplay: {
        delay: 3600,
        disableOnInteraction: false,
      },
      // Responsive breakpoints
      breakpoints: {
        '@0.75': {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        '@1.00': {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        '@1.50': {
          slidesPerView: 1,
          spaceBetween: 50,
        },
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
    });
    $(document).on('ready', function() {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
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