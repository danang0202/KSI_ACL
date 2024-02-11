@extends('user.layouts.user')

@section('title', 'User List Request')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Requests /</span> List Requests</h4>
        <!-- Request List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">List Pengajuan Request Anda</h5>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                    <div class="col-md-6 bentuk_request"></div>
                    <div class="col-md-6 status_request"></div>
                </div>
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-request table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama KRT Pengaju</th>
                            <th>Facility Request</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th class="cell-fit">Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection