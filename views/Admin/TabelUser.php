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
  <link rel="stylesheet" href="<?php echo $data['asset'] ?>/unify/vendor/bootstrap-select/css/bootstrap-select.min.css">
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
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo $data['URLROOT'] ?>/admin/index">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-server"></i>
              </span>
              <span class="media-body align-self-center">Dashboards</span>
            </a>
          </li>
          <!-- End Dashboards -->

          <!-- Tabel User -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item u-side-nav-opened has-active">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-settings"></i>
              </span>
              <span class="media-body align-self-center">Tabel User</span>
            </a>
          </li>
          <!-- End Tabel User -->

          <!-- Tabel Iklan -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo $data['URLROOT'] ?>/admin/iklan">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-layers"></i>
              </span>
              <span class="media-body align-self-center">Tabel Iklan</span>
            </a>
          </li>
          <!-- End Tabel Iklan -->

          <!-- Messages -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo $data['URLROOT'] ?>/admin/message">
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

        <div class="container g-pa-20">
          <div class="row">
            <div class="media d-md-flex align-items-center g-mb-30">
              <div class="d-flex g-mb-15 g-mb-0--md">
                <h3 class="g-font-weight-800 g-font-size-16 g-color-black mb-0">Tabel Daftar User</h3>
              </div>

              <div class="media d-md-flex align-items-center ml-auto">
                <div class="d-flex g-ml-15 g-ml-55--md">
                  <div class="input-group g-pos-rel g-width-320--md">
                    <input id="datatableSearch2" class="form-control g-font-size-default g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-rounded-20 g-pl-20 g-pr-50 g-py-10" type="text" placeholder="Search for name, position">
                    <button class="btn g-pos-abs g-top-0 g-right-0 g-z-index-2 g-width-60 h-100 g-bg-transparent g-font-size-16 g-color-lightred-v2 g-color-lightblue-v3--hover rounded-0" type="submit">
                      <i class="hs-admin-search g-absolute-centered"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="g-mb-40 w-100">
              <div class="table-responsive">
                <table class="js-datatable table table-striped u-table--v3 u-editable-table--v1 g-color-black" data-dt-info="#datatableInfo2" data-dt-search="#datatableSearch2" data-dt-entries="#datatableEntries2" data-dt-pagination="datatablePagination2" data-dt-page-length="5" data-dt-is-responsive="false" data-dt-pagination-classes="list-inline text-right mb-0" data-dt-pagination-items-classes="list-inline-item g-hidden-sm-down" data-dt-pagination-links-classes="u-pagination-v1__item u-pagination-v1-2 g-bg-lightblue-v3--active g-color-white--active g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-brd-lightblue-v3--active g-rounded-4 g-py-8 g-px-15" data-dt-pagination-next-classes="list-inline-item" data-dt-pagination-next-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-next-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-right"></i></span><span class="sr-only">Next</span>' data-dt-pagination-prev-classes="list-inline-item" data-dt-pagination-prev-link-classes="u-pagination-v1__item u-pagination-v1-2 g-brd-gray-light-v7 g-brd-lightblue-v3--hover g-rounded-4 g-py-8 g-px-12" data-dt-pagination-prev-link-markup='<span class="g-line-height-1 g-valign-middle" aria-hidden="true"><i class="hs-admin-angle-left"></i></span><span class="sr-only">Prev</span>'>
                  <thead>
                    <tr>
                      <th class="g-hidden-xs-up"></th>
                      <th class="g-first-child">
                        <div class="media">
                          <div class="d-flex align-self-center">Username</div>
                        </div>
                      </th>
                      <th>
                        <div class="media">
                          <div class="d-flex align-self-center">Category</div>
                        </div>
                      </th>
                      <th>
                        <div class="media">
                          <div class="d-flex align-self-center">Domisili</div>
                        </div>
                      </th>
                      <th>
                        <div class="media">
                          <div class="d-flex align-self-center">Phone</div>
                        </div>
                      </th>
                      <th>
                        <div class="media">
                          <div class="d-flex align-self-center">Email</div>
                        </div>
                      </th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($data['User'] as $key => $value) { ?>
                      <tr>
                        <td class="g-hidden-xs-up">1</td>
                        <td class="g-first-child">
                          <div class="media align-items-center">
                            <div class="d-flex">
                              <img class="g-width-40 g-height-40 rounded-circle g-mr-14" src="<?php if (empty($value['lokasi_foto'])) {
                                                                                                echo $data['asset'] . "/unify/img-temp/100x100/img1.jpg";
                                                                                              } else {
                                                                                                echo $data['asset'] . $value['lokasi_foto'];
                                                                                              } ?>" alt="Image description">
                            </div>
                            <div class="media-body text-left g-ml-15"><?php echo $value['username']; ?></div>
                          </div>
                        </td>
                        <td>
                          <div class="d-inline-block">
                            <span class="d-flex align-items-center justify-content-center u-tags-v1 g-brd-around g-bg-white g-font-size-default g-color-gray-dark-v6 g-brd-white g-rounded-50 g-py-4 g-px-15">
                              <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v3 g-mr-8"></span>
                              <?php echo $value['role']; ?>
                            </span>
                          </div>
                        </td>
                        <td><?php echo $value['provinsi']; ?></td>
                        <td><?php echo $value['phone_num']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td class="text-right">
                          <div class="g-pos-rel g-top-3 d-inline-block">
                            <a id="dropDown2_1Invoker" class="u-link-v5 g-line-height-0 g-font-size-24 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" aria-controls="dropDown2_1" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#dropDown2_1">
                              <i class="hs-admin-more-alt"></i>
                            </a>

                            <div id="dropDown2_1" class="u-shadow-v31 g-pos-abs g-right-0 g-z-index-2 g-bg-white" aria-labelledby="dropDown2_1Invoker">
                              <ul class="list-unstyled g-nowrap mb-0">
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-pencil g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Edit
                                  </a>
                                </li>
                                <li>
                                  <a class="d-flex align-items-center u-link-v5 g-bg-gray-light-v8--hover g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-px-25 g-py-14" href="#!">
                                    <i class="hs-admin-trash g-font-size-18 g-color-gray-light-v6 g-mr-10 g-mr-15--md"></i>
                                    Delete
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="media align-items-center g-mb-45">
              <div id="datatableInfo2" class="media-body g-mr-20"></div>

              <nav id="datatablePagination2" class="d-flex ml-auto" aria-label="Page Navigation"></nav>
            </div>
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

  <script src="<?php echo $data['asset'] ?>/unify/vendor/popper.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="<?php echo $data['asset'] ?>/unify/vendor/cookiejs/jquery.cookie.js"></script>


  <!-- JS Plugins Init. -->
  <script src="<?php echo $data['asset'] ?>/unify/vendor/appear.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/vendor/datatables/media/js/dataTables.select.js"></script>

  <!-- JS Unify -->
  <script src="<?php echo $data['asset'] ?>/unify/js/hs.core.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.side-nav.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/helpers/hs.hamburgers.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.dropdown.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.scrollbar.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/helpers/hs.focus-state.js"></script>
  <script src="<?php echo $data['asset'] ?>/unify/js/components/hs.datatables.js"></script>

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

      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        dropdownHideOnScroll: false,
        dropdownType: 'css-animation',
        dropdownAnimationIn: 'fadeIn',
        dropdownAnimationOut: 'fadeOut'
      });

      // initialization of custom scrollbar
      $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

      // initialization of datatables
      $.HSCore.components.HSDatatables.init('.js-datatable');
    });
  </script>
</body>

</html>