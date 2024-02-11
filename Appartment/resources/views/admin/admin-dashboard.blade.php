@extends('admin.layouts.admin')
@section('title', 'Admin Dashboard')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        {{-- Ketika berhasil lofin tampilkan alert --}}
        @if (session('alert'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('alert') }}',
                    showConfirmButton: false,
                    timer: 1000 
                });
            </script>
        @endif

        <div class="row flex-equal-height">
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
                        <h5 class="card-title mb-1 pt-2">Request Disetujui</h5>
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
                        <h5 class="card-title mb-1 pt-2">Request Pending</h5>
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
                        <h5 class="card-title mb-1 pt-2">Request Ditolak</h5>
                        <small class="text-muted">Last week</small>
                        <p class="mb-2 mt-1 fw-bolder">2</p>
                    </div>
                </div>
            </div>

            <!-- Projects table -->
            <div class="col-12 col-xl-6 col-sm-12 order-1 order-lg-2 mb-4">
                <div class="card h-100">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-request table border-top">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama KRT Pengaju</th>
                                    <th>Facility Request</th>
                                    <th>Cluster Unit</th>
                                    <th>Status</th>
                                    <th class="cell-fit">Progres</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Projects table -->

            <!-- Donut Chart -->
            <div class="col-xl-6 col-sm-12 col-12 order-2 order-lg-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Request Summary</h5>
                            <small class="text-muted">Chart dari data-data Request yang masuk</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="donutChart"></div>
                    </div>
                </div>
            </div>
            <!-- /Donut Chart -->
        </div>
    </div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row flex-equal-height">
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
                        <h5 class="card-title mb-1 pt-2">Request Disetujui</h5>
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
                        <h5 class="card-title mb-1 pt-2">Request Pending</h5>
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
                        <h5 class="card-title mb-1 pt-2">Request Ditolak</h5>
                        <small class="text-muted">Last week</small>
                        <p class="mb-2 mt-1 fw-bolder">2</p>
                    </div>
                </div>
            </div>

            <!-- Projects table -->
            <div class="col-12 col-xl-6 col-sm-12 order-1 order-lg-2 mb-4">
                <div class="card h-100">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-request table border-top">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nama KRT Pengaju</th>
                                    <th>Facility Request</th>
                                    <th>Cluster Unit</th>
                                    <th>Status</th>
                                    <th class="cell-fit">Progres</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Projects table -->

            <!-- Donut Chart -->
            <div class="col-xl-6 col-sm-12 col-12 order-2 order-lg-2 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title mb-0">Request Summary</h5>
                            <small class="text-muted">Chart dari data-data Request yang masuk</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="donutChart"></div>
                    </div>
                </div>
            </div>
            <!-- /Donut Chart -->
        </div>
    </div>
@endsection
