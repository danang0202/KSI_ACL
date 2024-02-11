<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HalamanUserController;
use App\Http\Controllers\HalamanAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/non-authorize', function () {
    return view('403');
})->name('unauthorized');

Route::get('/error', function () {
    return view('400');
})->name('error');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Route ini digunakan untuk grup user
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [Controller::class, 'UserDashboard'])->name('user-dashboard');
    Route::get('/list-request', [Controller::class, 'UserListRequest'])->name('user-list-req');
    Route::get('/garden-request', [Controller::class, 'UserGardenRequest'])->middleware('permission.garden')->name('user-req-garden');
    Route::get('/gym-request', [Controller::class, 'UserGymRequest'])->middleware('permission.gym')->name('user-req-gym');
    Route::get('/pool-request', [Controller::class, 'UserPoolRequest'])->middleware('permission.pool')->name('user-req-pool');
    Route::get('/badminton-request', [Controller::class, 'UserBadmintonRequest'])->middleware('permission.badminton')->name('user-req-badminton');
    Route::get('/basket-request', [Controller::class, 'UserBasketRequest'])->middleware('permission.basket')->name('user-req-basket');
});

// Route ini digunakan untuk  gvrub admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin-dashboard');
    Route::get('/admin/list-user', [AdminController::class, 'adminListUser'])->name('admin-list-user');
    Route::get('/admin/access-control', [HalamanAdminController::class, 'halaman_kontrol_akses'])->name('admin-access-control');
});

require __DIR__ . '/auth.php';

//  Route::get('/user-profile', [HalamanUserController::class, 'halaman_profile'])->name('user.profile');
// Route::get('/admin-dashboard', [HalamanAdminController::class, 'halaman_dashboard'])->name('admin.dashboard');
//     Route::get('/admin-edit-user', [HalamanAdminController::class, 'halaman_edit_user'])->name('admin.edit-user');
//     Route::get('/admin-list-request', [HalamanAdminController::class, 'halaman_list_request'])->name('admin.list-request');
