@extends('admin.layouts.admin')

@section('title', 'Admin Access Control')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        {{-- Ketika berhasil ubah user tampilkan alert --}}
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 1000
                });
            </script>
        @endif

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> Access
            Control Permission</h4>
        <!-- Request List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-3">Access Control Permission</h5>
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
                            <th class="text-center">Garden</th>
                            <th class="text-center">Pool</th>
                            <th class="text-center">Gym</th>
                            <th class="text-center">Badminton Field</th>
                            <th class="text-center">Basket Field</th>
                            <th class="cell-fit">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($users as $user)
                            @if ($user->role_id == 2)
                                @continue
                            @endif
                            @php
                                $no = $no + 1;
                                $all_permission = '';
                            @endphp
                            @foreach ($permissions->where('user_id', $user->id) as $permission)
                                @php
                                    $all_permission = $all_permission . ',' . $permission->permission_id;
                                @endphp
                            @endforeach
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $user->name }}</td>
                                <td class="text-center">
                                    <span
                                        class="{{ preg_match('/1/', $all_permission) ? 'badge bg-success' : 'badge bg-danger' }}">
                                        {{ preg_match('/1/', $all_permission) ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span
                                        class="{{ preg_match('/2/', $all_permission) ? 'badge bg-success' : 'badge bg-danger' }}">
                                        {{ preg_match('/2/', $all_permission) ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span
                                        class="{{ preg_match('/3/', $all_permission) ? 'badge bg-success' : 'badge bg-danger' }}">
                                        {{ preg_match('/3/', $all_permission) ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span
                                        class="{{ preg_match('/4/', $all_permission) ? 'badge bg-success' : 'badge bg-danger' }}">
                                        {{ preg_match('/4/', $all_permission) ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span
                                        class="{{ preg_match('/5/', $all_permission) ? 'badge bg-success' : 'badge bg-danger' }}">
                                        {{ preg_match('/5/', $all_permission) ? 'Yes' : 'No' }}
                                    </span>
                                </td>

                                <td>
                                    <a href="{{ route('admin-edit-access', ['access' => $user->id . '-' . $user->name . '-' . $user->email . '-' . $all_permission]) }}"
                                        class="btn btn-sm btn-primary">Edit</a>
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
