@extends('admin.layouts.admin')

@section('title', 'Admin List User')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Requests /</span> List Akun Penghuni</h4>
        <!-- Request List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">List Akun Penghuni</h5>
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
                            <th>Nama Kepala Rumah Tangga</th>
                            <th>Cluster Unit</th>
                            <th>Jenis Fasilitas</th>
                            <th class="cell-fit">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                @if ($user->role_id == 2)
                                    @continue
                                @endif
                                @php
                                    $all_fasilitas = "";
                                    $no = $no + 1;
                                @endphp

                                @foreach ($permissions->where('user_id',$user->id) as $permission)
                                @php
                                    if($all_fasilitas == ""){
                                        $all_fasilitas = $fasilitas->find($permission->permission_id)->nama_objek;
                                    }
                                    else{
                                        $all_fasilitas = $all_fasilitas.",".$fasilitas->find($permission->permission_id)->nama_objek;
                                    }
                                @endphp
                                @endforeach
                                <td>{{ $no }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->tipeUnit->nama_tipe_unit }}</td>
                                <td>{{ $all_fasilitas }}</td>
                                <td>
                                    <a href="admin-edit-user.html" class="btn btn-sm btn-primary">Edit</a>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        <!-- Sebaris data tambahan di sini -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
