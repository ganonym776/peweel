<!DOCTYPE html>

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $data['title'] ?></title>
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
</head>

<body class="list">
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

  <main>
    <?php
    if (isset($data['index'])) {
    ?>
      <div class="container-fluid g-pb-50">
        <!-- Slider owl carousel -->
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="<?php echo $data['asset'] ?>/unify/img-temp/1920x500/img1.jpg" alt="Image Description">
          </div>
          <div class="item">
            <img src="<?php echo $data['asset'] ?>/unify/img-temp/1920x500/img1.jpg" alt="Image Description">
          </div>
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
              <a class="u-block-hover" href="#">
                <span class="d-block u-block-hover u-bg-overlay g-bg-primary-opacity-0_3--hover--after g-transition-0_3 mb-3">
                  <img class="img-fluid" src="<?php echo $data['asset'] ?>/img/<?php echo $value['icon'] ?>" alt="<?php echo $value['nama_kategori'] ?>" width="90">
                </span>
              </a>
              <h3 class="h6 mb-0"><?php echo $value['nama_kategori'] ?></h3>
            </div>
          <?php
          }
          ?>
        </div>
        <!-- Products - Carousel Image -->
      </div>
      <!-- End New Lands -->
    <?php
    }
    ?>
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-md-9 order-md-2">
          <div class="g-pl-15--lg">
            <!-- Filters -->
            <div class="d-flex justify-content-end align-items-center g-brd-bottom g-brd-gray-light-v4 g-pt-40 g-pb-20">
              <!-- Sort By -->
              <div class="g-mr-60">
                <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Sort
                  by:</h2>

                <!-- Secondary Button -->
                <div class="d-inline-block btn-group g-line-height-1_2">
                  <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bestseller
                  </button>
                  <div class="dropdown-menu rounded-0">
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Name</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Trending</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Price low to high</a>
                    <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">price high to low</a>
                  </div>
                </div>
                <!-- End Secondary Button -->
              </div>
              <!-- End Sort By -->

              <!-- Sort By -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--xs g-brd-gray-light-v3 g-brd-black--hover g-color-gray-dark-v5 g-color-black--hover" href="page-list-filter-left-sidebar-1.html">
                    <i class="icon-list"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="u-icon-v2 u-icon-size--xs g-brd-primary g-color-primary" href="page-grid-filter-left-sidebar-1.html">
                    <i class="icon-grid"></i>
                  </a>
                </li>
              </ul>
              <!-- End Sort By -->
            </div>
            <!-- End Filters -->

            <!-- Products -->
            <div class="row g-pt-30 g-mb-50">
              <?php
              foreach ($data['item'] as $key => $value) {
                if (is_array($value)) {
              ?>
                  <div class="col-6 col-lg-4 g-mb-30">
                    <!-- Product -->
                    <figure class="g-pos-rel g-mb-20">
                      <img class="img-fluid" src="<?php echo $value['lokasi_foto'] ?>" alt="Image Description">
                    </figure>

                    <div class="media">
                      <!-- Product Info -->
                      <div class="d-flex flex-column">
                        <h4 class="h6 g-color-black mb-1">
                          <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                            <?php echo $value['nama_item']
                            ?>
                          </a>
                        </h4>
                        <span class="d-block g-color-black g-font-size-17"><?php echo $value['harga'] ?></span>
                      </div>
                      <!-- End Product Info -->
                    </div>
                    <!-- End Product -->
                  </div>
              <?php
                }
              }
              ?>
            </div>
            <!-- End Products -->

            <hr class="g-mb-60">

            <!-- Pagination -->
            <nav class="g-mb-100" aria-label="Page Navigation">
              <ul class="list-inline mb-0">
                <?php for ($i = 0; $i < $data['item']['total']; $i++) { ?>
                  <?php if ($i == $data['item']['current']) { ?>
                    <li class="list-inline-item hidden-down">
                      <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded-circle g-pa-5" href="<?php if($data['index']){echo $data['URLROOT']."/item/index/". $i + 1}else{echo $data['URLROOT']."/item/list/". $i + 1} ?>"><?php echo $i + 1 ?></a>
                    </li>
                  <?php } else { ?>
                    <li class="list-inline-item hidden-down">
                      <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="<?php if($data['index']){echo $data['URLROOT']."/item/index/". $i + 1}else{echo $data['URLROOT']."/item/list/". $i + 1} ?>"><?php echo $i + 1 ?></a>
                    </li>
                  <?php } ?>
                <?php } ?>

                <li class="list-inline-item">
                  <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5 g-ml-15" href="#!" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
                <li class="list-inline-item float-right">
                  <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page <?php echo $data['item']['current'] + 1 ?> of
                    <?php echo $data['item']['total'] ?></span>
                </li>
              </ul>
            </nav>
            <!-- End Pagination -->
          </div>
        </div>
        <!-- End Content -->

        <!-- Filters -->
        <div class="col-md-3 order-md-1 g-brd-right--lg g-brd-gray-light-v4 g-pt-40">
          <div class="g-pr-15--lg g-pt-60">
            <!-- Categories -->
            <div class="g-mb-30">
              <h3 class="h5 mb-3">Categories</h3>

              <ul class="list-unstyled">
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Clothes
                    <span class="float-right g-font-size-12">202</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">T-shirts
                    <span class="float-right g-font-size-12">44</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Shirts
                    <span class="float-right g-font-size-12">398</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Shorts
                    <span class="float-right g-font-size-12">56</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Jackets
                    <span class="float-right g-font-size-12">71</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Shoes
                    <span class="float-right g-font-size-12">943</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Glasses
                    <span class="float-right g-font-size-12">109</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Classic
                    <span class="float-right g-font-size-12">88</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Trending
                    <span class="float-right g-font-size-12">111</span></a>
                </li>
                <li class="my-3">
                  <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Accessories
                    <span class="float-right g-font-size-12">5</span></a>
                </li>
              </ul>
            </div>
            <!-- End Categories -->

            <hr>

            <!-- Pricing -->
            <div class="g-mb-30">
              <h3 class="h5 mb-3">Pricing</h3>

              <div class="text-center">
                <span class="d-block g-color-primary mb-4">$(<span id="rangeSliderAmount3">0</span>)</span>
                <div id="rangeSlider1" class="u-slider-v1-3" data-result-container="rangeSliderAmount3" data-range="true" data-default="180, 320" data-min="0" data-max="500"></div>
              </div>
            </div>
            <!-- End Pricing -->

            <hr>

            <!-- Brand -->
            <div class="g-mb-30">
              <h3 class="h5 mb-3">Brand</h3>

              <ul class="list-unstyled">
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Mango <span class="float-right g-font-size-13">24</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Gucci <span class="float-right g-font-size-13">334</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Adidas <span class="float-right g-font-size-13">18</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Nike <span class="float-right g-font-size-13">6</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Puma <span class="float-right g-font-size-13">71</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    Zara <span class="float-right g-font-size-13">9</span>
                  </label>
                </li>
              </ul>
            </div>
            <!-- End Brand -->

            <hr>

            <!-- Size -->
            <div class="g-mb-30">
              <h3 class="h5 mb-3">Size</h3>

              <ul class="list-unstyled">
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    S <span class="float-right g-font-size-13">24</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" checked>
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    M <span class="float-right g-font-size-13">334</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    L <span class="float-right g-font-size-13">18</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    XL <span class="float-right g-font-size-13">6</span>
                  </label>
                </li>
                <li class="my-2">
                  <label class="form-check-inline u-check d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover g-pl-30">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <span class="d-block u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    XXL <span class="float-right g-font-size-13">71</span>
                  </label>
                </li>
              </ul>
            </div>
            <!-- End Size -->

            <hr>

            <!-- Rating -->
            <div class="g-mb-30">
              <h3 class="h5 mb-3">Rating</h3>

              <ul class="js-rating u-rating-v1 g-font-size-20 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                <li class="g-color-primary click">
                  <i class="fa fa-star"></i>
                </li>
                <li class="g-color-primary click">
                  <i class="fa fa-star"></i>
                </li>
                <li class="g-color-primary click">
                  <i class="fa fa-star"></i>
                </li>
                <li class="g-color-primary click">
                  <i class="fa fa-star"></i>
                </li>
                <li>
                  <i class="fa fa-star"></i>
                </li>
              </ul>
            </div>
            <!-- End Rating -->

            <hr>

            <button class="btn btn-block u-btn-black g-font-size-12 text-uppercase g-py-12 g-px-25" type="button">Reset</button>
          </div>
        </div>
        <!-- End Filters -->
      </div>
    </div>
    <!-- End Filters -->

    <hr class="g-brd-gray-light-v4">

    <!-- Call to Action -->
    <div class="g-bg-primary">
      <div class="container g-py-20">
        <div class="row justify-content-center">
          <div class="col-md-4 mx-auto g-py-20">
            <!-- Media -->
            <div class="media g-px-50--lg">
              <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-048 u-line-icon-pro"></i>
              <div class="media-body">
                <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Shipping</span>
                <span class="d-block g-color-white-opacity-0_8">In 2-3 Days</span>
              </div>
            </div>
            <!-- End Media -->
          </div>

          <div class="col-md-4 mx-auto g-brd-x--md g-brd-white-opacity-0_3 g-py-20">
            <!-- Media -->
            <div class="media g-px-50--lg">
              <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-real-estate-040 u-line-icon-pro"></i>
              <div class="media-body">
                <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free Returns</span>
                <span class="d-block g-color-white-opacity-0_8">No Questions Asked</span>
              </div>
            </div>
            <!-- End Media -->
          </div>

          <div class="col-md-4 mx-auto g-py-20">
            <!-- Media -->
            <div class="media g-px-50--lg">
              <i class="d-flex g-color-white g-font-size-40 g-pos-rel g-top-3 mr-4 icon-hotel-restaurant-062 u-line-icon-pro"></i>
              <div class="media-body text-left">
                <span class="d-block g-color-white g-font-weight-500 g-font-size-17 text-uppercase">Free 24</span>
                <span class="d-block g-color-white-opacity-0_8">Days Storage</span>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Call to Action -->
  </main>

  <!-- Footer -->
  <footer class="g-bg-darkbrown g-bg-main-dark-v1">
    <!-- Content -->
    <div class="g-brd-bottom g-brd-secondary-light-v1">
      <div class="container g-pt-100">
        <div class="row justify-content-start g-mb-3 g-mb-0--md">
          <div class="col-md-5 g-mb-30">
            <h2 class="h5 g-color-gray-light-v3 mb-4">Products</h2>

            <div class="row">
              <div class="col-4 g-mb-20">
                <!-- Links -->
                <ul class="list-unstyled g-font-size-13 mb-0">
                  <li class="g-mb-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">SmartPhone</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Laptop</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Mouse</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Monitor</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Watch</a>
                  </li>
                </ul>
                <!-- End Links -->
              </div>

              <div class="col-4 g-mb-20">
                <!-- Links -->
                <ul class="list-unstyled g-font-size-13 mb-0">
                  <li class="g-mb-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Tablet</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Accessorie</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Mouses Pad</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Handset</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Phablet</a>
                  </li>
                </ul>
                <!-- End Links -->
              </div>

              <div class="col-4 g-mb-20">
                <!-- Links -->
                <ul class="list-unstyled g-font-size-13 mb-0">
                  <li class="g-mb-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Speakers</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Camera</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Play Station</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Xbox</a>
                  </li>
                </ul>
                <!-- End Links -->
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 g-mb-30 g-mb-0--sm">
            <h2 class="h5 g-color-gray-light-v3 mb-4">Brands</h2>

            <div class="row">
              <div class="col-6 g-mb-20">
                <!-- Links -->
                <ul class="list-unstyled g-font-size-13 mb-0">
                  <li class="g-mb-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Logitech</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Samsung</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Microsoft</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Apple</a>
                  </li>
                </ul>
                <!-- End Links -->
              </div>

              <div class="col-6 g-mb-20">
                <!-- Links -->
                <ul class="list-unstyled g-font-size-13 mb-0">
                  <li class="g-mb-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Huawei</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Motorola</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Sony</a>
                  </li>
                  <li class="g-my-10">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#!">Nokia</a>
                  </li>
                </ul>
                <!-- End Links -->
              </div>
            </div>
          </div>

          <div class="col-sm-5 col-md-3 ml-auto g-mb-30 g-mb-0--sm">
            <h2 class="h5 g-color-gray-light-v3 mb-4">Contacts</h2>

            <!-- Links -->
            <ul class="list-unstyled g-color-gray-dark-v5 g-font-size-13">
              <li class="media my-3">
                <i class="d-flex mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
                <div class="media-body">
                  Unit 25 Suite 3, 925 Prospect
                  <br>
                  PI New York Avenue
                </div>
              </li>
              <li class="media my-3">
                <i class="d-flex mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
                <div class="media-body">
                  htmlstream@support.com
                </div>
              </li>
              <li class="media my-3">
                <i class="d-flex mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
                <div class="media-body">
                  +32 333 444 555
                </div>
              </li>
            </ul>
            <!-- End Links -->
          </div>
        </div>

        <!-- Secondary Content -->
        <div class="row">
          <div class="col-md-4 g-mb-50">
            <h2 class="h5 g-color-gray-light-v3 mb-4">Subscribe</h2>

            <!-- Subscribe Form -->
            <form class="g-bg-lightblue-v1 input-group u-shadow-v19 rounded">
              <input class="form-control g-brd-none g-color-gray-dark-v5 g-bg-main-light-v2 g-bg-main-light-v2--focus g-placeholder-gray-dark-v3 rounded g-px-20 g-py-8" type="email" placeholder="Enter your email">
              <span class="input-group-addon u-shadow-v19 g-brd-none g-bg-main-light-v2 g-pa-5">
                <button class="btn u-btn-primary rounded text-uppercase g-py-8 g-px-18" type="submit">
                  <i class="fa fa-angle-right"></i>
                </button>
              </span>
            </form>
            <!-- End Subscribe Form -->
          </div>

          <div class="col-12 col-md-6 ml-auto g-mb-30 float-right">
            <h2 class="h5 g-color-gray-light-v3 mb-4">Follow Us On:</h2>

            <!-- Social Icons -->
            <ul class="list-inline mb-50">
              <li class="list-inline-item g-mr-2">
                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-facebook--hover rounded" href="#!">
                  <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                  <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-2">
                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-twitter--hover rounded" href="#!">
                  <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                  <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-2">
                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-instagram--hover rounded" href="#!">
                  <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-instagram"></i>
                  <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-2">
                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-google-plus--hover rounded" href="#!">
                  <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                  <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item g-mx-2">
                <a class="u-icon-v1 u-icon-slide-up--hover g-color-gray-dark-v4 g-color-white--hover g-bg-linkedin--hover rounded" href="#!">
                  <i class="g-font-size-18 g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                  <i class="g-color-white g-font-size-18 g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
            <!-- End Social Icons -->
          </div>
        </div>
        <!-- End Secondary Content -->
      </div>
    </div>
    <!-- End Content -->
  </footer>
  <!-- End Footer -->

  <!-- JS Global Compulsory -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/popper.js/index.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widget.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widgets/mouse.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widgets/slider.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/chosen/chosen.jquery.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/slick-carousel/slick/slick.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

  <!-- jQuery UI Core -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widget.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/version.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/keycode.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/position.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/unique-id.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/safe-active-element.js"></script>

  <!-- jQuery UI Helpers -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widgets/mouse.js"></script>

  <!-- jQuery UI Widgets -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

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

  <!-- JS Customization -->
  <script src="<?php echo $data['asset'] ?>/unify/js/custom.js"></script>

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