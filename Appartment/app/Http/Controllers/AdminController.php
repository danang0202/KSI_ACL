<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserPermission;
use App\Http\Controllers\Controller;
use App\Models\Permission;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.admin-dashboard');
    }

    public function adminListUser()
    {
        return view('admin.admin-list-user',[
            'users' => User::with(['tipeUnit'])->get(),
            'permissions' => UserPermission::all(),
            'fasilitas' => Permission::all()
        ]);
    }
}