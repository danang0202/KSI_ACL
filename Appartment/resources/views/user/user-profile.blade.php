@extends('user.layouts.user')

@section('title', 'User Profile')

@section('content')
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Profile</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="../../assets/img/avatars/6.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="{{route("profile.edit")}}">
                        @csrf
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="namakrt" class="form-label">Nama Kepala Rumah Tangga (KRT)</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" required />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="unit" class="form-label">Unit</label>
                            <input class="form-control" type="text" name="tipe_unit" id="unit" value="{{ $user->tipeUnit->nama_tipe_unit }}" readonly/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}" required placeholder="john.doe@example.com" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}" readonly/>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" method="POST" action="{{ route('profile.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
                        <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox" name="accountDeactivation" id="accountActivation" value="yes" required/>
                          <label class="form-check-label" for="accountDeactivation">I confirm my account deactivation</label>
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection