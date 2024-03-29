<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HalamanUserController;
use App\Http\Controllers\HalamanAdminController;
use App\Http\Controllers\CaptchaServiceController;

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

Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

Route::get('/non-authorize', function () {
    return view('403');
})->name('unauthorized');

Route::get('/back', [Controller::class, 'back_dashboard'])->name('back');
Route::get('/error', function () {
    return view('400');
})->name('error');


// Route ini digunakan untuk grup user
Route::middleware(['auth','user'])->group(function () {
    Route::get('/user-profile', [HalamanUserController::class, 'halaman_profil'])->name('profile.tampilan');
    Route::post('/user-profile', [HalamanUserController::class, 'edit_profil'])->name('profile.edit');
    Route::delete('/user-profile/{id}', [HalamanUserController::class, 'hapus_akun'])->name('profile.destroy');

    Route::get('/', [Controller::class, 'UserDashboard'])->name('user-dashboard');
    Route::get('/list-request', [Controller::class, 'UserListRequest'])->name('user-list-req');
    Route::get('/garden-request', [Controller::class, 'UserGardenRequest'])->middleware('permission.garden')->name('user-req-garden');
    Route::get('/gym-request', [Controller::class, 'UserGymRequest'])->middleware('permission.gym')->name('user-req-gym');
    Route::get('/pool-request', [Controller::class, 'UserPoolRequest'])->middleware('permission.pool')->name('user-req-pool');
    Route::get('/badminton-request', [Controller::class, 'UserBadmintonRequest'])->middleware('permission.badminton')->name('user-req-badminton');
    Route::get('/basket-request', [Controller::class, 'UserBasketRequest'])->middleware('permission.basket')->name('user-req-basket');
});

// Route ini digunakan untuk  grup admin
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin-dashboard');
    Route::get('/admin/list-user', [AdminController::class, 'adminListUser'])->name('admin-list-user');
    Route::get('/admin/access-control', [HalamanAdminController::class, 'halaman_kontrol_akses'])->name('admin-access-control');
    Route::get('/admin/edit-access/{access}', [HalamanAdminController::class, 'halaman_edit_akses'])->name('admin-edit-access');
    Route::post('/admin/action-edit-access', [HalamanAdminController::class, 'aksi_edit_akses'])->name('admin-action-edit-access');
    Route::get('/admin/list-request', [HalamanAdminController::class, 'halaman_list_request'])->name('admin-list-request');
});

require __DIR__ . '/auth.php';