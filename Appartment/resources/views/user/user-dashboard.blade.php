<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ApartementFacility - Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/cards-advance.css" />
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="user-dashboard.html" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bold">ApartementFacility </span>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active">
              <a href="user-dashboard.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dashboards</div>
                <div class="badge bg-label-primary rounded-pill ms-auto">New</div>
              </a>
            </li>

            <!-- Facility Requests -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Facility Requests</span>
            </li>

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-clipboard-list"></i>
                <div>Requests</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="user-list-request.html" class="menu-link">
                    <div>List Requests</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="user-add-garden-request.html" class="menu-link">
                    <div>Garden Request</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="user-add-pool-request.html" class="menu-link">
                    <div>Pool Request</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="user-add-gym-request.html" class="menu-link">
                    <div>Gym Request</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="user-add-badminton-request.html" class="menu-link">
                    <div>Badminton Field Request</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="user-add-basket-request.html" class="menu-link">
                    <div>Basket Field Request</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Style Switcher -->
                <li class="nav-item me-2 me-xl-0">
                  <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                    <i class="ti ti-md"></i>
                  </a>
                </li>
                <!--/ Style Switcher -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <span class="avatar-initial rounded-circle bg-label-primary">SM</span>
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="user-profile.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <span class="avatar-initial rounded-circle bg-label-primary">SM</span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Sancita Maharani</span>
                            <small class="text-muted">User</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="ti ti-logout me-2 ti-sm"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search..." />
              <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Total Requests -->
                <div class="col-xl-3 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="badge p-2 bg-label-info mb-2 rounded">
                        <i class="ti ti-clipboard-list ti-md"></i>
                      </div>
                      <h5 class="card-title mb-1 pt-2">Total Request</h5>
                      <small class="text-muted">Last week</small>
                      <p class="mb-2 mt-1 fw-bolder">10</p>
                    </div>
                  </div>
                </div>

                <!-- Total Sales -->
                <div class="col-xl-3 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="badge p-2 bg-label-success mb-2 rounded">
                        <i class="ti ti-clipboard-check ti-md"></i>
                      </div>
                      <h5 class="card-title mb-1 pt-2">Total Request Disetujui</h5>
                      <small class="text-muted">Last week</small>
                      <p class="mb-2 mt-1 fw-bolder">3</p>
                    </div>
                  </div>
                </div>

                <!-- Total Profit -->
                <div class="col-xl-3 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="badge p-2 bg-label-warning mb-2 rounded">
                        <i class="ti ti-clock-2 ti-md"></i>
                      </div>
                      <h5 class="card-title mb-1 pt-2">Total Request Pending</h5>
                      <small class="text-muted">Last week</small>
                      <p class="mb-2 mt-1 fw-bolder">5</p>
                    </div>
                  </div>
                </div>

                <!-- Total Sales -->
                <div class="col-xl-3 col-md-3 col-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="badge p-2 bg-label-danger mb-2 rounded">
                        <i class="ti ti-clipboard-off ti-md"></i>
                      </div>
                      <h5 class="card-title mb-1 pt-2">Total Request Tertolak</h5>
                      <small class="text-muted">Last week</small>
                      <p class="mb-2 mt-1 fw-bolder">2</p>
                    </div>
                  </div>
                </div>

                <!-- Projects table -->
                <div class="col-12 col-xl-12 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
                  <div class="card">
                    <div class="card-datatable table-responsive">
                      <table class="datatables-request table border-top">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Nama Pengaju</th>
                            <th>Bentuk Request</th>
                            <th>Judul Request</th>
                            <th>Status</th>
                            <th class="cell-fit">Progres</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
                <!--/ Projects table -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="#" target="_blank" class="fw-semibold">Kelompok 8 KSI</a>
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
    <script src="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/jszip/jszip.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/app-request-list-user.js"></script>
  </body>
</html>
