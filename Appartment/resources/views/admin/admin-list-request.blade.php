@extends('admin.layouts.admin')

@section('title', 'Admin List Request')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Requests /</span> List Requests</h4>
        <!-- Request List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">List Pengajuan Request User</h5>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                    <div class="col-md-6 bentuk_request"></div>
                    <div class="col-md-6 status_request"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-request table border-top">
                    <thead>
                        <tr>
                            <th>Nama KRT Pengaju</th>
                            <th>Facility Request</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th class="cell-fit">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sancita Maharani</td>
                            <td>Garden</td>
                            <td>2024-03-23</td>
                            <td>2024-02-10</td>
                            <td>Pending</td>
                            <td>
                                <button class="btn btn-sm btn-success">Lihat Detail</button>
                                <button class="btn btn-sm btn-primary">Setujui</button>
                                <button class="btn btn-sm btn-danger">Tolak</button>
                            </td>
                        </tr>
                        <!-- Sebaris data tambahan di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
          