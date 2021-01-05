<!DOCTYPE html>

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $data['title'] ?></title>
  <link rel="shortcut icon" href="<?php echo $data['asset'] ?>/img/favico.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/hs-admin-icons/hs-admin-icons.css">
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

<body>
  <main>
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
                    <?php if (!$_SESSION['username']) { ?>
                      <a class="u-link-v5 g-color-main g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10" href="<?php echo $data['URLROOT'] ?>/auth/login">Login</a>
                    <?php } else { ?>
                      <a class="u-link-v5 g-color-main g-color-white--hover g-bg-secondary g-bg-primary-dark-v1--hover g-font-weight-500 g-px-15 g-py-10" href="<?php echo $data['URLROOT'] ?>/user/logout">Logout</a>
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

    <!-- Product Description -->
    <div class="container g-pb-100">
      <div class="row">
        <div class="col-lg-7">
          <!-- Carousel -->
          <div id="carouselCus1" class="js-carousel g-mb-10" data-infinite="true" data-fade="true" data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle" data-arrow-left-classes="fa fa-angle-left g-left-40" data-arrow-right-classes="fa fa-angle-right g-right-40" data-nav-for="#carouselCus2">
            <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
              <img class="img-fluid w-100" src="assets/img-temp/650x750/img1.jpg" alt="Image Description">
            </div>
            <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
              <img class="img-fluid w-100" src="assets/img-temp/650x750/img2.jpg" alt="Image Description">
            </div>
            <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
              <img class="img-fluid w-100" src="assets/img-temp/650x750/img3.jpg" alt="Image Description">
            </div>
          </div>

          <div id="carouselCus2" class="js-carousel text-center u-carousel-v3 g-mx-minus-5" data-infinite="true" data-center-mode="true" data-slides-show="3" data-is-thumbs="true" data-nav-for="#carouselCus1">
            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="assets/img-temp/250x170/img1.jpg" alt="Image Description">
            </div>

            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="assets/img-temp/250x170/img2.jpg" alt="Image Description">
            </div>

            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="assets/img-temp/250x170/img3.jpg" alt="Image Description">
            </div>

            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="assets/img-temp/250x170/img1.jpg" alt="Image Description">
            </div>

            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="assets/img-temp/250x170/img2.jpg" alt="Image Description">
            </div>

            <div class="js-slide g-cursor-pointer g-px-5">
              <img class="img-fluid" src="assets/img-temp/250x170/img3.jpg" alt="Image Description">
            </div>
          </div>
          <!-- End Carousel -->
        </div>

        <div class="col-lg-5">
          <div class="g-px-40--lg g-pt-70">
            <!-- Product Info -->
            <div class="g-mb-30">
              <h1 class="g-font-weight-300 mb-4">Men's Water<br>Resistant Jacket</h1>
              <p>Dress is the "rain mac" version of our beloved essential the Unify Parka. Crafted from a water
                resistant fluid memory fabric to create an elegant draped effect when thrown on, this lightweight shell
                will take you from season to season and protect you from that unexpected shower.</p>
            </div>
            <!-- End Product Info -->

            <!-- Price -->
            <div class="g-mb-30">
              <h2 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-12 text-uppercase mb-2">Price</h2>
              <span class="g-color-black g-font-weight-500 g-font-size-30 mr-2">$99.00</span>
              <s class="g-color-gray-dark-v4 g-font-weight-500 g-font-size-16">$101.00</s>
            </div>
            <!-- End Price -->

            <!-- Accordion -->
            <div id="accordion-01" role="tablist" aria-multiselectable="true">
              <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">
                <h5 class="g-font-weight-400 g-font-size-default mb-0">
                  <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Details
                    <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span></a>
                </h5>
              </div>
              <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01">
                <div class="g-py-10">
                  <p class="g-font-size-12 mb-2">SHELL: 100% POLYESTER</p>
                  <p class="g-font-size-12 mb-2">Always check the care label instructions.</p>
                  <p class="g-font-size-12 mb-2">Professional dry clean only. Remove all detachable parts before
                    cleaning. Do not iron.</p>
                  <p class="g-font-size-12 mb-2">(Navy: Avoid contact with light coloured fabrics and upholstery
                    especially whilst damp.)</p>
                </div>
              </div>
            </div>
            <!-- End Accordion -->

            <!-- Colour -->
            <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
              <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Colour</h5>

              <!-- Checkbox -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-mx-10">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                      <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-primary rounded-circle"></i>
                    </span>
                  </label>
                </li>
                <li class="list-inline-item g-mx-10">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                      <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-beige rounded-circle"></i>
                    </span>
                  </label>
                </li>
                <li class="list-inline-item g-mx-10">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                      <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-black rounded-circle"></i>
                    </span>
                  </label>
                </li>
                <li class="list-inline-item g-ml-10 g-mr-20">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline1_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-transparent g-brd-gray-dark-v4--checked rounded-circle g-absolute-centered--y g-left-0 g-mt-3">
                      <i class="d-block g-absolute-centered g-width-12 g-height-12 g-bg-gray-dark-v4 rounded-circle"></i>
                    </span>
                  </label>
                </li>
              </ul>
              <!-- End Checkbox -->
            </div>
            <!-- End Colour -->

            <!-- Size -->
            <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3" role="tab">
              <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Size</h5>

              <!-- Checkbox -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-mx-15">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                      S
                    </span>
                  </label>
                </li>
                <li class="list-inline-item g-mx-15">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                      M
                    </span>
                  </label>
                </li>
                <li class="list-inline-item g-mx-15">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                      L
                    </span>
                  </label>
                </li>
                <li class="list-inline-item g-mx-15">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                      XL
                    </span>
                  </label>
                </li>
                <li class="list-inline-item g-ml-15 g-mr-20">
                  <label class="form-check-inline u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="radInline2_1" type="radio">
                    <span class="d-block u-check-icon-checkbox-v4 g-brd-none g-absolute-centered--y g-left-0">
                      XXL
                    </span>
                  </label>
                </li>
              </ul>
              <!-- End Checkbox -->
            </div>
            <!-- End Size -->

            <!-- Quantity -->
            <div class="d-flex justify-content-between align-items-center g-brd-bottom g-brd-gray-light-v3 py-3 g-mb-30" role="tab">
              <h5 class="g-color-gray-dark-v5 g-font-weight-400 g-font-size-default mb-0">Quantity</h5>

              <div class="js-quantity input-group u-quantity-v1 g-width-80 g-brd-primary--focus">
                <input class="js-result form-control text-center g-font-size-13 rounded-0" type="text" value="1" readonly>

                <div class="input-group-addon d-flex align-items-center g-width-30 g-brd-gray-light-v2 g-bg-white g-font-size-13 rounded-0 g-pa-5">
                  <i class="js-plus g-color-gray g-color-primary--hover fa fa-angle-up"></i>
                  <i class="js-minus g-color-gray g-color-primary--hover fa fa-angle-down"></i>
                </div>
              </div>
            </div>
            <!-- End Quantity -->

            <!-- Buttons -->
            <div class="row g-mx-minus-5 g-mb-20">
              <div class="col g-px-5 g-mb-10">
                <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                  Add to Cart <i class="align-middle ml-2 icon-finance-100 u-line-icon-pro"></i>
                </button>
              </div>
              <div class="col g-px-5 g-mb-10">
                <button class="btn btn-block u-btn-outline-black g-brd-gray-dark-v5 g-brd-black--hover g-color-gray-dark-v4 g-color-white--hover g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                  Add to Wishlist <i class="align-middle ml-2 icon-medical-022 u-line-icon-pro"></i>
                </button>
              </div>
            </div>
            <!-- End Buttons -->

            <!-- Nav Tabs -->
            <ul class="nav d-flex justify-content-between g-font-size-12 text-uppercase" role="tablist" data-target="nav-1-1-default-hor-left">
              <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                <a class="nav-link active g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--3" role="tab">Returns</a>
              </li>
              <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--1" role="tab">View Size Guide</a>
              </li>
              <li class="nav-item g-brd-bottom g-brd-gray-dark-v4">
                <a class="nav-link g-color-primary--parent-active g-pa-0 g-pb-1" data-toggle="tab" href="#nav-1-1-default-hor-left--2" role="tab">Delivery</a>
              </li>
            </ul>
            <!-- End Nav Tabs -->

            <!-- Tab Panes -->
            <div id="nav-1-1-default-hor-left" class="tab-content">
              <div class="tab-pane fade show active g-pt-30" id="nav-1-1-default-hor-left--3" role="tabpanel">
                <p class="g-color-gray-dark-v4 g-font-size-13 mb-0">You can return/exchange your orders in Unify
                  E-commerce. For more information, read our
                  <a href="page-help-1.html">Help</a>.
                </p>
              </div>

              <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--1" role="tabpanel">
                <h4 class="g-font-size-15 mb-3">General Clothing Size Guide</h4>

                <!-- Size -->
                <table>
                  <tbody>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-width-150 g-py-5">Unify Size (UK)</td>
                      <td class="align-top g-width-50 g-py-5">S</td>
                      <td class="align-top g-width-50 g-py-5">M</td>
                      <td class="align-top g-width-50 g-py-5">L</td>
                      <td class="align-top g-width-50 g-py-5">XL</td>
                      <td class="align-top g-width-50 g-py-5">XXL</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-width-150 g-py-5">UK</td>
                      <td class="align-top g-width-50 g-py-5">6</td>
                      <td class="align-top g-width-50 g-py-5">8</td>
                      <td class="align-top g-width-50 g-py-5">10</td>
                      <td class="align-top g-width-50 g-py-5">12</td>
                      <td class="align-top g-width-50 g-py-5">14</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-width-150 g-py-5">Europe</td>
                      <td class="align-top g-width-50 g-py-5">32</td>
                      <td class="align-top g-width-50 g-py-5">34</td>
                      <td class="align-top g-width-50 g-py-5">36</td>
                      <td class="align-top g-width-50 g-py-5">38</td>
                      <td class="align-top g-width-50 g-py-5">40</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-width-150 g-py-5">US</td>
                      <td class="align-top g-width-50 g-py-5">2</td>
                      <td class="align-top g-width-50 g-py-5">4</td>
                      <td class="align-top g-width-50 g-py-5">6</td>
                      <td class="align-top g-width-50 g-py-5">8</td>
                      <td class="align-top g-width-50 g-py-5">10</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-width-150 g-py-5">Australia</td>
                      <td class="align-top g-width-50 g-py-5">6</td>
                      <td class="align-top g-width-50 g-py-5">8</td>
                      <td class="align-top g-width-50 g-py-5">10</td>
                      <td class="align-top g-width-50 g-py-5">12</td>
                      <td class="align-top g-width-50 g-py-5">14</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-width-150 g-py-5">Japan</td>
                      <td class="align-top g-width-50 g-py-5">7</td>
                      <td class="align-top g-width-50 g-py-5">9</td>
                      <td class="align-top g-width-50 g-py-5">11</td>
                      <td class="align-top g-width-50 g-py-5">13</td>
                      <td class="align-top g-width-50 g-py-5">15</td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Size -->
              </div>

              <div class="tab-pane fade g-pt-30" id="nav-1-1-default-hor-left--2" role="tabpanel">
                <!-- Shipping Mehtod -->
                <table>
                  <thead class="h6 g-brd-bottom g-brd-gray-light-v3 g-color-gray-dark-v3 g-font-size-13">
                    <tr>
                      <th class="g-width-100 g-font-weight-500 g-pa-0 g-pb-10">Destination</th>
                      <th class="g-width-140 g-font-weight-500 g-pa-0 g-pb-10">Delivery type</th>
                      <th class="g-width-150 g-font-weight-500 g-pa-0 g-pb-10">Delivery time</th>
                      <th class="g-font-weight-500 text-right g-pa-0 g-pb-10">Cost</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-py-10">UK</td>
                      <td class="align-top g-py-10">Standard delivery</td>
                      <td class="align-top g-font-size-11 g-py-10">2-3 Working days</td>
                      <td class="align-top text-right g-py-10">$5.5</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-py-10"></td>
                      <td class="align-top g-py-10">Next day</td>
                      <td class="align-top g-font-size-11 g-py-10">Order before 12pm monday - thursday and receive it
                        the next day</td>
                      <td class="align-top text-right g-py-10">$9.5</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-py-10"></td>
                      <td class="align-top g-py-10">Saturday delivery</td>
                      <td class="align-top g-font-size-11 g-py-10">Saturday delivery for orders placed before 12pm on
                        friday</td>
                      <td class="align-top text-right g-py-10">$12.00</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-py-10">Europe</td>
                      <td class="align-top g-py-10">Standard delivery</td>
                      <td class="align-top g-font-size-11 g-py-10">3-9 Working days</td>
                      <td class="align-top text-right g-py-10">$20.00</td>
                    </tr>
                    <tr class="g-color-gray-dark-v4 g-font-size-12">
                      <td class="align-top g-py-10">America</td>
                      <td class="align-top g-py-10">Standard delivery</td>
                      <td class="align-top g-font-size-11 g-py-10">3-9 Working days</td>
                      <td class="align-top text-right g-py-10">$25.00</td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Shipping Mehtod -->
              </div>
            </div>
            <!-- End Tab Panes -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Product Description -->

    <!-- Description -->
    <div class="container">
      <div class="g-brd-y g-brd-gray-light-v4 g-pt-100 g-pb-70">
        <h2 class="h4 mb-3">Description</h2>

        <div class="row">
          <div class="col-md-4 g-mb-30">
            <p>The streak started in late October. Canelas 2010, an unheralded amateur soccer team, suddenly could not
              stop winning.</p>
            <p>It went 10 straight matches without dropping a point, without so much as conceding a goal, a surge that
              brought the prospect of promotion out of its local league and into the comparative big time of the
              national third division.</p>
          </div>

          <div class="col-md-4 g-mb-0 g-mb-30--md">
            <!-- List -->
            <ul class="list-unstyled g-color-text">
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Brand Name:</span>
                <span class="float-right g-color-black">Lacoste</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Sleeve Length:</span>
                <span class="float-right g-color-black">Full</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Sleeve Style:</span>
                <span class="float-right g-color-black">Regular</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Pattern Type:</span>
                <span class="float-right g-color-black">PAID</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Style:</span>
                <span class="float-right g-color-black">Casual</span>
              </li>
            </ul>
            <!-- End List -->
          </div>

          <div class="col-md-4 g-mb-30">
            <!-- List -->
            <ul class="list-unstyled g-color-text">
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Material:</span>
                <span class="float-right g-color-black">Cotton, Nylon</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Item Type:</span>
                <span class="float-right g-color-black">Pullovers</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Thickness:</span>
                <span class="float-right g-color-black">Thin</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Model Number:</span>
                <span class="float-right g-color-black">TM-11013</span>
              </li>
              <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                <span>Material:</span>
                <span class="float-right g-color-black">80% COTTON</span>
              </li>
            </ul>
            <!-- End List -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Description -->

    <!-- Review -->
    <div class="container">
      <div class="g-brd-y g-brd-gray-light-v4 g-py-100">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2 class="h4 mb-5">Review</h2>

            <!-- Review -->
            <div class="g-brd-bottom g-brd-gray-light-v4 g-pb-30 g-mb-50">
              <!-- Media -->
              <div class="media g-mb-30">
                <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-20" src="assets/img-temp/100x100/img1.jpg" alt="Image Description">
                <div class="media-body">
                  <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
                    <div class="d-block">
                      <h5 class="h6">James Coolman</h5>

                      <!-- Rating -->
                      <ul class="js-rating u-rating-v1 g-font-size-13 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                      </ul>
                      <!-- End Rating -->

                      <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
                    </div>
                    <div class="ml-auto">
                      <a class="u-link-v5 g-color-black g-color-primary--hover g-font-size-12 text-uppercase" href="#!">Reply</a>
                    </div>
                  </div>

                  <p>The time has come to bring those ideas and plans to life. This is where we really begin to
                    visualize your napkin sketches and make them into beautiful pixels. Whether through commerce or just
                    an experience to tell your brand's story, the time has come to start using development languages
                    that fit your projects needs.</p>

                  <ul class="list-inline my-0">
                    <li class="list-inline-item g-mr-20">
                      <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                        <i class="icon-medical-022 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 5
                      </a>
                    </li>
                    <li class="list-inline-item g-mr-20">
                      <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 1
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End Media -->

              <!-- Media -->
              <div class="media g-brd-top g-brd-gray-light-v4 g-pt-30 g-ml-40 g-mb-30">
                <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-15" src="assets/img-temp/100x100/img2.jpg" alt="Image Description">
                <div class="media-body">
                  <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
                    <div class="d-block">
                      <h5 class="h6">Alberta Watson</h5>

                      <!-- Rating -->
                      <ul class="js-rating u-rating-v1 g-font-size-13 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                      </ul>
                      <!-- End Rating -->

                      <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
                    </div>
                    <div class="ml-auto">
                      <a class="u-link-v5 g-color-black g-color-primary--hover g-font-size-12 text-uppercase" href="#!">Reply</a>
                    </div>
                  </div>

                  <p>Now that your brand is all dressed up and ready to party, it's time to release it to the world. By
                    the way, let's celebrate already.</p>

                  <ul class="list-inline my-0">
                    <li class="list-inline-item g-mr-20">
                      <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                        <i class="icon-medical-022 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 2
                      </a>
                    </li>
                    <li class="list-inline-item g-mr-20">
                      <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End Media -->

              <!-- Media -->
              <div class="media g-brd-top g-brd-gray-light-v4 g-pt-30 g-mb-30">
                <img class="d-flex g-width-60 g-height-60 rounded-circle g-mt-3 g-mr-15" src="assets/img-temp/100x100/img3.jpg" alt="Image Description">
                <div class="media-body">
                  <div class="d-flex align-items-start g-mb-15 g-mb-10--sm">
                    <div class="d-block">
                      <h5 class="h6">Maria Lee</h5>

                      <!-- Rating -->
                      <ul class="js-rating u-rating-v1 g-font-size-13 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                        <li class="g-color-primary g-line-height-1_4">
                          <i class="fa fa-star"></i>
                        </li>
                      </ul>
                      <!-- End Rating -->

                      <span class="d-block g-color-gray-dark-v5 g-font-size-11">June 7, 2017</span>
                    </div>
                    <div class="ml-auto">
                      <a class="u-link-v5 g-color-black g-color-primary--hover g-font-size-12 text-uppercase" href="#!">Reply</a>
                    </div>
                  </div>

                  <p>We get it, you're busy and it's important that someone keeps up with marketing and driving people
                    to your brand. We've got you covered.</p>

                  <ul class="list-inline my-0">
                    <li class="list-inline-item g-mr-20">
                      <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                        <i class="icon-medical-022 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                      </a>
                    </li>
                    <li class="list-inline-item g-mr-20">
                      <a class="g-color-gray-dark-v5 g-text-underline--none--hover" href="#!">
                        <i class="icon-finance-206 u-line-icon-pro g-pos-rel g-top-1 g-mr-3"></i> 0
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End Media -->
            </div>
            <!-- End Review -->

            <h2 class="h4 mb-5">Add Review</h2>

            <!-- Comment Form -->
            <form>
              <div class="row">
                <div class="col-md-6 form-group g-mb-30">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" placeholder="First name">
                </div>

                <div class="col-md-6 form-group g-mb-30">
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email" placeholder="Email">
                </div>
              </div>
            </form>
            <!-- End Comment Form -->

            <div class="g-mb-30">
              <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="12" placeholder="Your message"></textarea>
            </div>

            <div class="row align-items-center">
              <div class="col-5 col-sm-4 col-md-3">
                <button class="btn u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="submit" role="button">Add Comment</button>
              </div>

              <!-- Rating -->
              <div class="col-5 col-sm-4 col-md-3">
                <h3 class="h6 mb-1">Rate:</h3>

                <ul class="js-rating u-rating-v1 g-font-size-20 g-color-gray-light-v3 mb-0" data-hover-classes="g-color-primary">
                  <li class="g-color-primary g-line-height-1_4 click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary g-line-height-1_4 click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary g-line-height-1_4 click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-color-primary g-line-height-1_4 click">
                    <i class="fa fa-star"></i>
                  </li>
                  <li class="g-line-height-1_4">
                    <i class="fa fa-star"></i>
                  </li>
                </ul>
                <!-- End Rating -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Review -->

    <!-- Products -->
    <div class="container g-pt-100 g-pb-70">
      <div class="text-center mx-auto g-max-width-600 g-mb-20">
        <h2 class="g-color-black mb-4 align-left">Other Products from this </h2>
        <!-- <p class="lead">We want to create a range of beautiful, practical and modern outerwear that doesn't cost the
          earth – but let's you still live life in style.</p> -->
      </div>

      <!-- Products -->
      <div class="row">
        <div class="col-6 col-lg-3 g-mb-30">
          <!-- Product -->
          <figure class="g-pos-rel g-mb-20">
            <img class="img-fluid" src="assets/img-temp/480x700/img1.jpg" alt="Image Description">

            <figcaption class="w-100 g-bg-primary g-bg-black--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
              <a class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" href="#!">New Arrival</a>
            </figcaption>
          </figure>

          <div class="media">
            <!-- Product Info -->
            <div class="d-flex flex-column">
              <h4 class="h6 g-color-black mb-1">
                <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                  Summer shorts
                </a>
              </h4>
              <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
              <span class="d-block g-color-black g-font-size-17">$52.00</span>
            </div>
            <!-- End Product Info -->

            <!-- Products Icons -->
            <ul class="list-inline media-body text-right">
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="icon-finance-100 u-line-icon-pro"></i>
                </a>
              </li>
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="icon-medical-022 u-line-icon-pro"></i>
                </a>
              </li>
            </ul>
            <!-- End Products Icons -->
          </div>
          <!-- End Product -->
        </div>

        <div class="col-6 col-lg-3 g-mb-30">
          <!-- Product -->
          <figure class="g-pos-rel g-mb-20">
            <img class="img-fluid" src="assets/img-temp/480x700/img2.jpg" alt="Image Description">

            <span class="u-ribbon-v1 g-width-40 g-height-40 g-color-white g-bg-primary g-font-size-13 text-center text-uppercase g-rounded-50x g-top-10 g-right-minus-10 g-px-2 g-py-10">-40%</span>
          </figure>

          <div class="media">
            <!-- Product Info -->
            <div class="d-flex flex-column">
              <h4 class="h6 g-color-black mb-1">
                <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                  Stylish shirt
                </a>
              </h4>
              <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
              <span class="d-block g-color-black g-font-size-17">$99.00</span>
            </div>
            <!-- End Product Info -->

            <!-- Products Icons -->
            <ul class="list-inline media-body text-right">
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="icon-finance-100 u-line-icon-pro"></i>
                </a>
              </li>
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="icon-medical-022 u-line-icon-pro"></i>
                </a>
              </li>
            </ul>
            <!-- End Products Icons -->
          </div>
          <!-- End Product -->
        </div>

        <div class="col-6 col-lg-3 g-mb-30">
          <!-- Product -->
          <figure class="g-pos-rel g-mb-20">
            <img class="img-fluid" src="assets/img-temp/480x700/img3.jpg" alt="Image Description">

            <figcaption class="w-100 g-bg-lightred text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
              <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1">Sold Out</a>
            </figcaption>
          </figure>

          <div class="media">
            <!-- Product Info -->
            <div class="d-flex flex-column">
              <h4 class="h6 g-color-black mb-1">
                <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                  Classic jacket
                </a>
              </h4>
              <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Man</a>
              <span class="d-block g-color-black g-font-size-17">$49.99</span>
            </div>
            <!-- End Product Info -->

            <!-- Products Icons -->
            <ul class="list-inline media-body text-right">
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="icon-finance-100 u-line-icon-pro"></i>
                </a>
              </li>
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="icon-medical-022 u-line-icon-pro"></i>
                </a>
              </li>
            </ul>
            <!-- End Products Icons -->
          </div>
          <!-- End Product -->
        </div>

        <div class="col-6 col-lg-3 g-mb-30">
          <!-- Product -->
          <figure class="g-pos-rel g-mb-20">
            <img class="img-fluid" src="assets/img-temp/480x700/img4.jpg" alt="Image Description">
          </figure>

          <div class="media">
            <!-- Product Info -->
            <div class="d-flex flex-column">
              <h4 class="h6 g-color-black mb-1">
                <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">
                  Wool lined parka
                </a>
              </h4>
              <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="#!">Woman</a>
              <span class="d-block g-color-black g-font-size-17">$82.37</span>
            </div>
            <!-- End Product Info -->

            <!-- Products Icons -->
            <ul class="list-inline media-body text-right">
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="icon-finance-100 u-line-icon-pro"></i>
                </a>
              </li>
              <li class="list-inline-item align-middle mx-0">
                <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="icon-medical-022 u-line-icon-pro"></i>
                </a>
              </li>
            </ul>
            <!-- End Products Icons -->
          </div>
          <!-- End Product -->
        </div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Products -->
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


    <a class="js-go-to u-go-to-v2" href="#!" data-type="fixed" data-position='{
           "bottom": 15,
           "right": 15
         }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>
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
      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu plugin
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

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');

      // initialization of HSScrollBar component
      $.HSCore.components.HSScrollBar.init($('.js-scrollbar'));

      // initialization of quantity counter
      $.HSCore.components.HSCountQty.init('.js-quantity');

      // initialization of tabs
      $.HSCore.components.HSTabs.init('[role="tablist"]');

      // initialization of rating
      $.HSCore.helpers.HSRating.init();
    });

    $(window).on('resize', function() {
      setTimeout(function() {
        $.HSCore.components.HSTabs.init('[role="tablist"]');
      }, 200);
    });
  </script>
</body>

</html>