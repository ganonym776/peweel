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
        <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
          <!-- Logo -->
          <a href="index.html" class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">

            <svg class="u-header-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-78.000000, -19.000000)">
                  <g transform="translate(78.000000, 19.000000)">
                    <path class="g-fill-primary" d="M0,0 L19.2941176,0 L19.2941176,0 C23.7123956,-8.11624501e-16 27.2941176,3.581722 27.2941176,8 L27.2941176,27.2941176 L8,27.2941176 L8,27.2941176 C3.581722,27.2941176 5.41083001e-16,23.7123956 0,19.2941176 L0,0 Z">
                    </path>
                    <path class="g-fill-white" d="M21.036662,24.8752523 L20.5338647,22.6659916 L20.3510293,22.6659916 C19.8533083,23.4481246 19.1448284,24.0626484 18.2255681,24.5095816 C17.3063079,24.9565147 16.2575544,25.1799779 15.0792761,25.1799779 C13.0376043,25.1799779 11.5139914,24.672107 10.5083918,23.6563498 C9.50279224,22.6405927 9,21.1017437 9,19.0397567 L9,8.02392554 L12.6109986,8.02392554 L12.6109986,18.4150692 C12.6109986,19.7050808 12.8750915,20.6725749 13.4032852,21.3175807 C13.9314789,21.9625865 14.7593086,22.2850846 15.886799,22.2850846 C17.3901196,22.2850846 18.4947389,21.8356188 19.2006901,20.9366737 C19.9066413,20.0377286 20.2596117,18.5318912 20.2596117,16.4191164 L20.2596117,8.02392554 L23.855374,8.02392554 L23.855374,24.8752523 L21.036662,24.8752523 Z">
                    </path>
                    <path class="g-fill-white" d="M44.4764678,24.4705882 L40.8807055,24.4705882 L40.8807055,14.1099172 C40.8807055,12.809748 40.6191519,11.8397145 40.096037,11.1997875 C39.5729221,10.5598605 38.7425531,10.2399018 37.6049051,10.2399018 C36.0914269,10.2399018 34.9842682,10.6868282 34.2833958,11.5806945 C33.5825234,12.4745608 33.2320924,13.9727801 33.2320924,16.0753974 L33.2320924,24.4705882 L29.6515664,24.4705882 L29.6515664,7.61926145 L32.4550421,7.61926145 L32.9578394,9.8285222 L33.1406747,9.8285222 C33.6485533,9.02607405 34.3697301,8.40647149 35.3042266,7.96969592 C36.2387232,7.53292034 37.27478,7.31453583 38.412428,7.31453583 C42.4551414,7.31453583 44.4764678,9.3714132 44.4764678,13.4852296 L44.4764678,24.4705882 Z M53.7357283,24.4705882 L50.1552023,24.4705882 L50.1552023,7.61926145 L53.7357283,7.61926145 L53.7357283,24.4705882 Z M49.9418944,3.15503112 C49.9418944,2.51510412 50.1171098,2.0224693 50.467546,1.67711187 C50.8179823,1.33175444 51.3182351,1.15907831 51.9683197,1.15907831 C52.5980892,1.15907831 53.0881846,1.33175444 53.4386208,1.67711187 C53.7890571,2.0224693 53.9642725,2.51510412 53.9642725,3.15503112 C53.9642725,3.76448541 53.7890571,4.24442346 53.4386208,4.59485968 C53.0881846,4.94529589 52.5980892,5.12051137 51.9683197,5.12051137 C51.3182351,5.12051137 50.8179823,4.94529589 50.467546,4.59485968 C50.1171098,4.24442346 49.9418944,3.76448541 49.9418944,3.15503112 Z M68.0077253,10.3313195 L63.8939294,10.3313195 L63.8939294,24.4705882 L60.2981671,24.4705882 L60.2981671,10.3313195 L57.525164,10.3313195 L57.525164,8.65532856 L60.2981671,7.55831633 L60.2981671,6.4613041 C60.2981671,4.47042009 60.7654084,2.99505497 61.699905,2.03516447 C62.6344015,1.07527397 64.0615189,0.595335915 65.9812999,0.595335915 C67.2408388,0.595335915 68.4800439,0.803563007 69.6989525,1.22002344 L68.7543031,3.93208145 C67.8705943,3.64766945 67.0275286,3.50546559 66.2250804,3.50546559 C65.4124747,3.50546559 64.820805,3.75686171 64.4500537,4.25966149 C64.0793023,4.76246128 63.8939294,5.51664965 63.8939294,6.52224922 L63.8939294,7.61926145 L68.0077253,7.61926145 L68.0077253,10.3313195 Z M69.0089215,7.61926145 L72.9094094,7.61926145 L76.3375727,17.1724096 C76.8556088,18.5335242 77.2009611,19.813359 77.3736398,21.0119524 L77.49553,21.0119524 C77.5869482,20.453286 77.7545456,19.7752783 77.9983273,18.9779089 C78.242109,18.1805396 79.5321012,14.3943616 81.8683427,7.61926145 L85.738358,7.61926145 L78.5315971,26.7103215 C77.2212704,30.2146837 75.0374253,31.9668385 71.9799963,31.9668385 C71.1877057,31.9668385 70.4157419,31.8805004 69.6640816,31.7078217 L69.6640816,28.8738734 C70.2024329,28.9957643 70.8169567,29.0567088 71.5076716,29.0567088 C73.2344587,29.0567088 74.4482703,28.056203 75.1491427,26.0551615 L75.7738303,24.4705882 L69.0089215,7.61926145 Z">
                    </path>
                  </g>
                </g>
              </g>
            </svg>
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
                  <span class="g-hidden-sm-down">Charlie Bailey</span>
                  <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                </span>
              </a>

              <!-- Top User Menu -->
              <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">
                <li class="mb-0">
                  <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="#!">
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
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="admin.html">
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
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="admintabeliklan.html">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                <i class="hs-admin-layers"></i>
              </span>
              <span class="media-body align-self-center">Tabel Iklan</span>
            </a>
          </li>
          <!-- End Tabel Iklan -->

          <!-- Messages -->
          <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="adminmessages.html">
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