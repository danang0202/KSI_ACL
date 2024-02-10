<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Sirema - Kalender Kegiatan</title>

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
  <link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/fullcalendar/fullcalendar.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/quill/editor.css" />
  <link rel="stylesheet" href="../../assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../../assets/vendor/css/pages/app-calendar.css" />
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
          <a href="admin-dashboard.html" class="app-brand-link">
            <span class="app-brand-logo">
              <img src="../../assets/img/branding/logo-sm.png" alt="logo" width="50" height="50">
            </span>
            <span class="app-brand-text demo menu-text fw-bold">SIREMA</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item">
            <a href="admin-dashboard.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-smart-home"></i>
              <div>Dashboards</div>
              <div class="badge bg-label-primary rounded-pill ms-auto">New</div>
            </a>
          </li>
          <!-- Manajemen Users -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Manajemen Users</span>
          </li>

          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-users"></i>
              <div>Users</div>
              <div class="badge bg-label-danger rounded-pill ms-auto">3</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="admin-list-user.html" class="menu-link">
                  <div>Daftar User</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-add-user.html" class="menu-link">
                  <div>Tambahkan User</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-update-role.html" class="menu-link">
                  <div>Edit Role</div>
                </a>
              </li>
              <!-- <li class="menu-item">
              <a href="user-edit-request.html" class="menu-link">
                <div>Edit Request</div>
              </a>
            </li> -->
            </ul>
          </li>
          <!-- Manajemen Requests -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Manajemen Requests</span>
          </li>

          <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons ti ti-clipboard-list"></i>
              <div>Requests</div>
              <div class="badge bg-label-danger rounded-pill ms-auto">4</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="admin-list-request.html" class="menu-link">
                  <div>List Requests</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-add-request.html" class="menu-link">
                  <div>Ajukan Requests</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-view-request.html" class="menu-link">
                  <div>Detail Requests</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="admin-edit-request.html" class="menu-link">
                  <div>Edit Requests</div>
                </a>
              </li>
            </ul>
          </li>
          <!-- Kalender Kegiatan -->
          <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Kalender</span>
          </li>

          <li class="menu-item active open">
            <a href="admin-kalender.html" class="menu-link">
              <i class="menu-icon tf-icons ti ti-calendar"></i>
              <div>Kalender Kegiatan</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
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

                  <!-- Quick links  -->
                  <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                      data-bs-auto-close="outside" aria-expanded="false">
                      <i class="ti ti-layout-grid-add ti-md"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                      <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                          <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                          <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Add shortcuts"><i class="ti ti-sm ti-apps"></i></a>
                        </div>
                      </div>
                      <div class="dropdown-shortcuts-list scrollable-container">
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                              <i class="ti ti-clipboard-list fs-4"></i>
                            </span>
                            <a href="admin-list-user.html" class="stretched-link">Users</a>
                            <small class="text-muted mb-0">Daftar User</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                              <i class="ti ti-clipboard-plus fs-4"></i>
                            </span>
                            <a href="admin-add-user.html" class="stretched-link">Users</a>
                            <small class="text-muted mb-0">Tambahkan User</small>
                          </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                              <i class="ti ti-calendar-event fs-4"></i>
                            </span>
                            <a href="admin-list-request.html" class="stretched-link">Requests</a>
                            <small class="text-muted mb-0">Daftar Request</small>
                          </div>
                          <div class="dropdown-shortcuts-item col">
                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                              <i class="ti ti-logout fs-4"></i>
                            </span>
                            <a href="app-access-roles.html" class="stretched-link">Account</a>
                            <small class="text-muted mb-0">Logout Account</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Quick links -->

              <!-- Notification -->
              <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside" aria-expanded="false">
                  <i class="ti ti-bell ti-md"></i>
                  <span class="badge bg-danger rounded-pill badge-notifications">3</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-0">
                  <li class="dropdown-menu-header border-bottom">
                    <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Notification</h5>
                      <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                    </div>
                  </li>
                  <li class="dropdown-notifications-list scrollable-container">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"><i
                                  class="ti ti-clipboard-text"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Request baru telah dibuat!</h6>
                            <p class="mb-0">Request dengan judul "Liputan Wisuda" telah dibuat.</p>
                            <small class="text-muted">1 months ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-warning"><i
                                  class="ti ti-clipboard-text"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Request baru telah dibuat!</h6>
                            <p class="mb-0">Request dengan judul "Artikel Wisuda" telah dibuat.</p>
                            <small class="text-muted">1 months ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-danger"><i
                                  class="ti ti-clipboard-x"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Status Request telah diubah!</h6>
                            <p class="mb-0">Request dengan judul "Artikel Wisuda" tidak disetujui.</p>
                            <small class="text-muted">1 months ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action dropdown-notifications-item">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                              <span class="avatar-initial rounded-circle bg-label-success"><i
                                  class="ti ti-clipboard-check"></i></span>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-1">Status Request telah diubah!</h6>
                            <p class="mb-0">Request dengan judul "Liputan Wisuda" telah disetujui.</p>
                            <small class="text-muted">1 months ago</small>
                          </div>
                          <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                class="badge badge-dot"></span></a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive"><span
                                class="ti ti-x"></span></a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-menu-footer border-top">
                    <a href="javascript:void(0);"
                      class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                      View all notifications
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ Notification -->

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <span class="avatar-initial rounded-circle bg-label-primary">MY</span>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <span class="avatar-initial rounded-circle bg-label-primary">MY</span>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">Made Yoga</span>
                          <small class="text-muted">Admin</small>
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
            <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
              aria-label="Search..." />
            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card app-calendar-wrapper">
              <div class="row g-0">
                <!-- Calendar Sidebar -->
                <div class="col app-calendar-sidebar" id="app-calendar-sidebar">
                  <div class="border-bottom p-4 my-sm-0 mb-3">
                    <div class="d-grid">
                      <a href="admin-add-request.html" class="btn btn-primary btn-toggle-sidebar">
                        <i class="ti ti-plus me-1"></i>
                        <span class="align-middle">Ajukan Request</span>
                      </a>
                    </div>
                  </div>
                  <div class="p-3">
                    <!-- inline calendar (flatpicker) -->
                    <div class="inline-calendar"></div>

                    <hr class="container-m-nx mb-4 mt-3" />

                    <!-- Filter -->
                    <div class="mb-3 ms-3">
                      <small class="text-small text-muted text-uppercase align-middle">Filter</small>
                    </div>

                    <div class="form-check mb-2 ms-3">
                      <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all"
                        checked />
                      <label class="form-check-label" for="selectAll">View All</label>
                    </div>

                    <div class="app-calendar-events-filter ms-3">
                      <div class="form-check form-check-success mb-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-disetujui"
                          data-value="disetujui" checked />
                        <label class="form-check-label" for="select-disetujui">Disetujui</label>
                      </div>
                      <div class="form-check form-check-warning mb-2">
                        <input class="form-check-input input-filter" type="checkbox" id="select-pending"
                          data-value="pending" checked />
                        <label class="form-check-label" for="select-pending">Pending</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Calendar Sidebar -->

                <!-- Calendar & Modal -->
                <div class="col app-calendar-content">
                  <div class="card shadow-none border-0">
                    <div class="card-body pb-0">
                      <!-- FullCalendar -->
                      <div id="calendar"></div>
                    </div>
                  </div>
                  <div class="app-overlay"></div>
                  <!-- FullCalendar Offcanvas -->
                  <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar"
                    aria-labelledby="addEventSidebarLabel">
                    <div class="offcanvas-header my-1">
                      <h5 class="offcanvas-title" id="addEventSidebarLabel">Add Event</h5>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0">
                      <form class="event-form pt-0" id="eventForm" onsubmit="return false">
                        <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center mb-2 w-100">
                          <span class="ti ti-file-description me-2"></span>
                          <span class="bs-stepper-title">Detail Request</span>
                        </button>                                                                              
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><Strong>Judul Request</Strong></label>
                          <!-- <input type="text" class="form-control" id="eventTitle" name="eventTitle"
                            placeholder="Event Title" readonly/> -->
                          <p class="border p-2 rounded">Liputan Wisuda</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"> <strong>Bentuk Request</strong></label>
                          <p class="border p-1 rounded">
                            <span class='text-truncate d-flex align-items-center'>
                              <span class="badge badge-center rounded-pill bg-label-success w-px-30 h-px-30 me-2"><i
                                  class="ti ti-camera ti-sm"></i></span>
                              Liputan
                            </span>
                          </p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Deadline</strong></label>
                          <p class="border p-2 rounded">25-09-2023</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Jumlah Orang yang
                              Dibutuhkan</strong></label>
                          <p class="border p-2 rounded">5</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Status</strong></label>
                          <p class="me-lg-2">
                            <span class="badge bg-label-warning" text-capitalized>Pending</span>
                          </p>
                          <!-- <select class="select2 select-event-label form-select" id="eventLabel" name="eventLabel" disabled>
                              <option data-label="primary" value="Business" selected>Business</option>
                              <option data-label="danger" value="Personal" disabled>Personal</option>
                              <option data-label="warning" value="Pending" disabled>Pending</option>
                              <option data-label="success" value="Disetujui" disabled>Disetujui</option>
                              <option data-label="info" value="MyProjects" disabled>MyProjects</option>
                            </select> -->
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Progres</strong></label>
                          <p class="me-lg-2">
                            <span class="badge bg-label-secondary" text-capitalized>-</span>
                          </p>
                        </div>

                        <button type="button" class="btn btn-primary waves-effect waves-light d-flex align-items-center mb-2 w-100">
                          <span class="ti ti-user me-2"></span>
                          <span class="bs-stepper-title">Detail Pengaju</span>
                        </button>  

                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Nama Pengaju</strong></label>
                          <p class="border p-2 rounded">Aditya Widiyanto</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Nomor Handphone</strong></label>
                          <p class="border p-2 rounded">+62 882-1008-3303</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Asal Pengaju</strong></label>
                          <p class="border p-2 rounded">Mahasiswa</p>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="eventTitle"><strong>Email</strong></label>
                          <p class="border p-2 rounded">adit.widi@gmail.com</p>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Calendar & Modal -->
              </div>
            </div>
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
                  , made with ❤️ by <a href="#" target="_blank" class="fw-semibold">Media Kampus</a>
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
  <script src="../../assets/vendor/libs/fullcalendar/fullcalendar.js"></script>
  <script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <script src="../../assets/vendor/libs/select2/select2.js"></script>
  <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="../../assets/vendor/libs/moment/moment.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/app-calendar-events.js"></script>
  <script src="../../assets/js/app-calendar.js"></script>
</body>

</html>
