@extends('admin.layouts.admin')

@section('title', 'Admin Edit Akses')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users/</span> Edit Role</h4>
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">Form Edit Role</h5>
            <div class="card-body">

                <form class="browser-default-validation" method="POST" action="{{ route('admin-action-edit-access') }}">
                  @csrf
                   <div class="mb-3">
                        <label class="form-label" for="basic-default-name">Nama Kepala Rumah Tangga</label>
                        <input type="text" class="form-control" id="basic-default-name" name='user_name' value="{{ $user_name }}" readonly/>
                        <input type="hidden" class="form-control" id="basic-default-name" name='user_id' value={{ $user_id }} >
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">email</label>
                        <input type="text" class="form-control" id="basic-default-name" value="{{ $user_email }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Fasilitas</label>
                        <div>
                            <input type="checkbox" id="garden" name="fasilitas[]" value="1" {{  preg_match('/1/', $permission) ? 'checked abled' : '' }}>
                            <label for="garden">Garden</label>
                        </div>
                        <div>
                            <input type="checkbox" id="pool" name="fasilitas[]" value="2" {{  preg_match('/2/', $permission) ? 'checked abled' : '' }}>
                            <label for="pool">Pool</label>
                        </div>
                        <div>
                            <input type="checkbox" id="gym" name="fasilitas[]" value="3" {{  preg_match('/3/', $permission) ? 'checked abled' : '' }}>
                            <label for="gym">Gym</label>
                        </div>
                        <div>
                            <input type="checkbox" id="badminton-field" name="fasilitas[]" value="4" {{  preg_match('/4/', $permission) ? 'checked abled' : '' }}>
                            <label for="badminton-field">Badminton Field</label>
                        </div>
                        <div>
                            <input type="checkbox" id="basket-field" name="fasilitas[]" value="5" {{  preg_match('/5/', $permission) ? 'checked abled' : '' }}>
                            <label for="basket-field">Basket Field</label>
                        </div>
                    </div>
                      
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>                      
                </form>

            </div>
        </div>
    </div>
</div>
@endsection