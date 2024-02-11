@extends('user.layouts.user-request')

@section('title', 'User Garden Request')

@section('content')
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
                                        <select id="asalPengaju" class="selectpicker w-100" data-style="btn-default">
                                            <option>Orchid</option>
                                            <option>Rose</option>
                                            <option>Jasmine</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 form-password-toggle">
                                        <label class="form-label" for="nomorHandphone">Nomer Unit Apartement</label>
                                        <div class="input-group">
                                            <input type="text" id="nomorHandphone" class="form-control nomorHandphone"
                                                placeholder="Masukan Nomer Unit Apartement" />
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
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
                                        <input type="text" id="first-name" class="form-control" value="Garden"
                                            readonly />
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="bentukRequest" class="form-label">Bentuk
                                            Request</label>
                                        <select id="bentukRequest" class="selectpicker w-auto" data-style="btn-default">
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
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
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

    @endsection

