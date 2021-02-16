<!DOCTYPE html>
<html lang="en">

<head>
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
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/flatpickr/dist/css/flatpickr.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/bootstrap-select/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/chartist-js/chartist.min.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/fancybox/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/css/admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/css/custom.css">
</head>

<body>
  <!-- Header -->
  <header id="js-header" class="u-header u-header--sticky-top">
    <div class="u-header__section u-header__section--admin-dark g-min-height-65">
      <nav class="navbar no-gutters g-pa-0">
        <div class="col-auto d-flex flex-nowrap g-py-12">
          <!-- Logo -->
          <a class="ml-3 d-flex" href="<?php echo $data['URLROOT'] ?>">
            <img src="<?php echo $data['asset'] ?>/img/logo_putih.svg" alt="Logo Bekasan" height="40">
          </a>
          <!-- End Logo -->

          <!-- Sidebar Toggler -->
          <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#!" data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini" data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true" data-hssm-target="#sideNav">
            <i class="hs-admin-align-left"></i>
          </a>
          <!-- End Sidebar Toggler -->
        </div>

        <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
          <!-- Top User -->
          <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
            <div class="g-pos-rel g-px-10--lg">
              <a id="profileMenuInvoker" class="d-block" href="#!" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="g-pos-rel">
                  <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-lightblue-v5 g-mr-5"></span>
                  <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm" src="<?php echo $data['asset'] ?>/unify/img-temp/150x150/img1.jpg" alt="Image description">
                </span>
                <span class="g-pos-rel g-top-2">
                  <span class="g-hidden-sm-down"><?php echo $_SESSION['username'] ?></span>
                  <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                </span>
              </a>

              <!-- Top User Menu -->
              <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">
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
      </nav>
    </div>
  </header>
  <!-- End Header -->


  <main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
      <!-- Sidebar Nav -->
      <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
        <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
          <!-- Dashboards -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item u-side-nav-opened has-active">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo $data['URLROOT'] ?>/admin/index">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-server"></i>
              </span>
              <span class="media-body align-self-center">Dashboards</span>
            </a>
          </li>
          <!-- End Dashboards -->

          <!-- Tabel User -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo $data['URLROOT'] ?>/admin/tabeluser">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-settings"></i>
              </span>
              <span class="media-body align-self-center">Tabel User</span>
            </a>
          </li>
          <!-- End Tabel User -->

          <!-- Tabel Iklan -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo $data['URLROOT'] ?>/admin/tabeliklan">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-layers"></i>
              </span>
              <span class="media-body align-self-center">Tabel Iklan</span>
            </a>
          </li>
          <!-- End Tabel Iklan -->

          <!-- Messages -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo $data['URLROOT'] ?>/admin/messages">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-pencil-alt"></i>
              </span>
              <span class="media-body align-self-center">Messages</span>
            </a>
          </li>
          <!-- End Messages -->
        </ul>
      </div>
      <!-- End Sidebar Nav -->

      <div class="col g-ml-45 g-ml-0--lg">

        <div class="g-pa-20">
          <div class="row">
            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
              <!-- Panel -->
              <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                <div class="card-block g-font-weight-300 g-pa-20">
                  <div class="media">
                    <div class="d-flex g-mr-15">
                      <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightblue-v4 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                        <i class="hs-admin-check-box g-absolute-centered"></i>
                      </div>
                    </div>

                    <div class="media-body align-self-center">
                      <div class="d-flex align-items-center g-mb-5">
                        <span class="g-font-size-24 g-line-height-1 g-color-black"><?php echo $data['totalIklan'] ?></span>
                        <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                        </span>
                      </div>

                      <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Total Iklan</h6>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel -->
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
              <!-- Panel -->
              <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                <div class="card-block g-font-weight-300 g-pa-20">
                  <div class="media">
                    <div class="d-flex g-mr-15">
                      <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-teal-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                        <i class="hs-admin-user g-absolute-centered"></i>
                      </div>
                    </div>

                    <div class="media-body align-self-center">
                      <div class="d-flex align-items-center g-mb-5">
                        <span class="g-font-size-24 g-line-height-1 g-color-black"><?php echo $data['totalUser'] ?></span>
                        <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                        </span>
                      </div>

                      <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Total User</h6>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel -->
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
              <!-- Panel -->
              <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                <div class="card-block g-font-weight-300 g-pa-20">
                  <div class="media">
                    <div class="d-flex g-mr-15">
                      <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-darkblue-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                        <i class="hs-admin-briefcase g-absolute-centered"></i>
                      </div>
                    </div>

                    <div class="media-body align-self-center">
                      <div class="d-flex align-items-center g-mb-5">
                        <span class="g-font-size-24 g-line-height-1 g-color-black">0</span>
                        <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                        </span>
                      </div>

                      <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Pesan Masuk</h6>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel -->
            </div>

            <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
              <!-- Panel -->
              <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                <div class="card-block g-font-weight-300 g-pa-20">
                  <div class="media">
                    <div class="d-flex g-mr-15">
                      <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightred-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                        <i class="hs-admin-wallet g-absolute-centered"></i>
                      </div>
                    </div>

                    <div class="media-body align-self-center">
                      <div class="d-flex align-items-center g-mb-5">
                        <span class="g-font-size-24 g-line-height-1 g-color-black">-</span>
                        <span class="d-flex align-self-center g-font-size-0 g-ml-5 g-ml-10--md">
                        </span>
                      </div>

                      <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Not Used</h6>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel -->
            </div>

            <!-- Chart Barang-->
            <div class="col-xl-6 col-md-12 g-mb-15">
              <div class="card g-brd-gray-light-v7 g-pa-5">
                <div id="chartdiv1"></div>
              </div>
            </div>
            <!-- End Chart Barang -->
            <!-- Chart User-->
            <div class="col-xl-6 col-md-12">
              <div class="card g-brd-gray-light-v7 g-pa-5">
                <div id="chartdiv2"></div>
              </div>
            </div>
            <!-- End Chart User -->
          </div>
        </div>

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
      </div>
    </div>
  </main>

  <!-- JS Global Compulsory -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/popper.js/index.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="<?php echo $data['asset'] ?>/unify/vendor/cookiejs/jquery.cookie.js"></script>


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

  <!-- JS Plugins Init. -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/appear.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/chartist-js/chartist.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS  -->
  <script src="<?php echo $data['asset'] ?>/unify/js/hs.core.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.side-nav.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/helpers/hs.hamburgers.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.range-datepicker.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.datepicker.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.dropdown.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.scrollbar.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.area-chart.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.donut-chart.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.bar-chart.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/helpers/hs.focus-state.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.popup.js"></script>

  <!-- JS Custom -->
  <script src="<?php echo $data['asset'] ?>/unify/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function() {
      // initialization of custom select
      $('.js-select').selectpicker();

      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav');

      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of charts
      $.HSCore.components.HSAreaChart.init('.js-area-chart');
      $.HSCore.components.HSDonutChart.init('.js-donut-chart');
      $.HSCore.components.HSBarChart.init('.js-bar-chart');

      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

      // initialization of datepicker
      $.HSCore.components.HSDatepicker.init('#datepicker', {
        dayNamesMin: [
          'SU',
          'MO',
          'TU',
          'WE',
          'TH',
          'FR',
          'SA'
        ]
      });

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        dropdownHideOnScroll: false
      });

      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox', {
        btnTpl: {
          smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
        }
      });
    });
  </script>
  <script>
    am4core.useTheme(am4themes_animated);
    var chart = am4core.create("chartdiv1", am4charts.PieChart);
    chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

    chart.data = [
      <?php foreach ($data['kategori'] as $key => $value) {
        echo "{";
        echo "category: '" . $value['nama_kategori'] . "',";
        echo "value:" . $value['totalItem'];
        echo "},";
      } ?>
    ];
    chart.fontSize = 11;
    chart.radius = am4core.percent(80);
    chart.innerRadius = am4core.percent(40);
    chart.startAngle = 180;
    chart.endAngle = 360;

    var series = chart.series.push(new am4charts.PieSeries());
    series.dataFields.value = "value";
    series.dataFields.category = "category";
    series.alignLabels = false;
    series.labels.template.bent = false;
    series.labels.template.radius = -3;
    series.labels.template.padding(0, 0, 0, 0);

    series.slices.template.cornerRadius = 5;
    series.slices.template.innerCornerRadius = 5;
    series.slices.template.draggable = false;
    series.slices.template.inert = false;

    series.hiddenState.properties.startAngle = 180;
    series.hiddenState.properties.endAngle = 180;
    chart.legend = new am4charts.Legend();
  </script>
  <script>
    am4core.ready(function() {
      am4core.useTheme(am4themes_animated);
      var chart = am4core.create("chartdiv2", am4charts.PieChart);
      chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

      chart.data = [
        <?php foreach ($data['lokasiUser'] as $key => $value) {
          echo "{";
          echo "category: '" . $value['provinsi'] . "-" . $value['kabupaten'] . "',";
          echo "value:" . $value['total'];
          echo "},";
        } ?>
      ];
      chart.fontSize = 11;
      chart.radius = am4core.percent(80);
      chart.innerRadius = am4core.percent(40);
      chart.startAngle = 180;
      chart.endAngle = 360;

      var series = chart.series.push(new am4charts.PieSeries());
      series.dataFields.value = "value";
      series.dataFields.category = "category";
      series.alignLabels = false;
      series.labels.template.bent = false;
      series.labels.template.radius = -3;
      series.labels.template.padding(0, 0, 0, 0);

      series.slices.template.cornerRadius = 5;
      series.slices.template.innerCornerRadius = 5;
      series.slices.template.draggable = false;
      series.slices.template.inert = false;

      series.hiddenState.properties.startAngle = 180;
      series.hiddenState.properties.endAngle = 180;
      chart.legend = new am4charts.Legend();
    });
  </script>
</body>

</html>