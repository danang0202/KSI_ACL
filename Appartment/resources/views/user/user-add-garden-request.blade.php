<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ApartementFacility  - Garden Request</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/pickr/pickr-themes.css" />

    <!-- Page CSS -->

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
                    <li class="menu-item">
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
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
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
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
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
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search..." />
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>
                <!-- / Navbar -->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Requests/</span> Ajukan Garden Requests
                        </h4>
                        <!-- Default -->
                        <div class="row">
                            <div class="col-12">
                                <h5>Form Pengajuan Request</h5>
                            </div>

                            <!-- Default Wizard -->
                            <div class="col-12 mb-4">
                                <div class="bs-stepper wizard-numbered mt-2">
                                    <div class="bs-stepper-header">
                                        <div class="step" data-target="#account-details">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-circle">1</span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Detail Pengaju</span>
                                                    <span class="bs-stepper-subtitle">Berisi Informasi Umum
                                                        Pengaju</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="line">
                                            <i class="ti ti-chevron-right"></i>
                                        </div>
                                        <div class="step" data-target="#personal-info">
                                            <button type="button" class="step-trigger">
                                                <span class="bs-stepper-circle">2</span>
                                                <span class="bs-stepper-label">
                                                    <span class="bs-stepper-title">Detail Request</span>
                                                    <span class="bs-stepper-subtitle">Berisi Informasi Request</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-content">
                                        <form onSubmit="return false">
                                            <!-- Detail Pengaju -->
                                            <div id="account-details" class="content">
                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="namaPengaju">Nama Kepala Rumah Tangga Pengaju</label>
                                                        <input type="text" id="namaPengaju" class="form-control"
                                                            placeholder="Masukan Kepala Rumah Tangga Pengaju" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="asalPengaju" class="form-label">Cluster Unit</label>
                                                        <select id="asalPengaju" class="selectpicker w-100"
                                                            data-style="btn-default">
                                                            <option>Orchid</option>
                                                            <option>Rose</option>
                                                            <option>Jasmine</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6 form-password-toggle">
                                                        <label class="form-label" for="nomorHandphone">Nomer Unit Apartement</label>
                                                        <div class="input-group">
                                                            <input type="text" id="nomorHandphone"
                                                                class="form-control nomorHandphone"
                                                                placeholder="Masukan Nomer Unit Apartement" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button class="btn btn-primary btn-next">
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                            <i class="ti ti-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Detail Request -->
                                            <div id="personal-info" class="content">
                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <label class="form-label" for="judulRequest">Facility Request</label>
                                                        <input type="text" id="first-name" class="form-control" value="Garden" readonly />
                                                    </div>                                                    
                                                    <div class="col-sm-6">
                                                        <label for="bentukRequest" class="form-label">Bentuk
                                                            Request</label>
                                                        <select id="bentukRequest" class="selectpicker w-auto"
                                                            data-style="btn-default">
                                                            <option>Kunjungan Biasa</option>
                                                            <option>Acara Private</option>
                                                            <option>Komersial</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label for="flatpickr-date" class="form-label">Tanggal Keperluan</label>
                                                        <input type="text" class="form-control" placeholder="YYYY-MM-DD"
                                                            id="flatpickr-date" />
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-between">
                                                        <button class="btn btn-label-primary btn-prev">
                                                            <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none">Previous</span>
                                                        </button>
                                                        </button>
                                                        <button class="btn btn-success btn-submit">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /Default Wizard -->
                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl">
                                <div
                                    class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                    <div>
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        , made with ❤️ by <a href="#" target="_blank" class="fw-semibold">Kelompok 8 KSI
                                        </a>
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
        <script src="../../assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
        <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
        <script src="../../assets/vendor/libs/select2/select2.js"></script>
        <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
        <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
        <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
        <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
        <script src="../../assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>

        <!-- Main JS -->
        <script src="../../assets/js/main.js"></script>

        <!-- Page JS -->

        <script src="../../assets/js/form-wizard-numbered.js"></script>
        <script src="../../assets/js/forms-pickers.js"></script>
</body>

</html>
