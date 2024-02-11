<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(Request $request)
    {
        return view('admin.admin-dashboard');
    }

    public function adminListUser(Request $request)
    {
        return view('admin.admin-list-user');
    }
}
