<?php

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

Route::get('/testing', function () {
    return view('403');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Awal Routing Halaman User
    Route::get('/user-dashboard', [HalamanUserController::class, 'halaman_dashboard'])->name('user.dashboard');
    Route::get('/user-profile', [HalamanUserController::class, 'halaman_profile'])->name('user.profile');
    Route::get('/user-list-request', [HalamanUserController::class, 'halaman_list_request'])->name('user.list-request');
    Route::get('/user-garden', [HalamanUserController::class, 'halaman_add_garden_request'])->name('user.garden');
    Route::get('/user-pool', [HalamanUserController::class, 'halaman_add_pool_request'])->name('user.pool');
    Route::get('/user-gym', [HalamanUserController::class, 'halaman_add_gym_request'])->name('user.gym');
    Route::get('/user-badminton', [HalamanUserController::class, 'halaman_add_badminton_request'])->name('user.badminton');
    Route::get('/user-basket', [HalamanUserController::class, 'halaman_add_basket_request'])->name('user.basket');
//Akhir Routing Halaman User

//Awal Routing Halaman Admin
    Route::get('/admin-dashboard', [HalamanAdminController::class, 'halaman_dashboard'])->name('admin.dashboard');
    Route::get('/admin-kontrol-akses', [HalamanAdminController::class, 'halaman_kontrol_akses'])->name('admin.kontrol-akses');
    Route::get('/admin-edit-user/{int:user_id}/{string:permission}', [HalamanAdminController::class, 'halaman_edit_user'])->name('admin.edit-user');
    Route::post('/admin-action-edit', [HalamanAdminController::class, ''])->name('admin.action-edit');
    Route::get('/admin-list-request', [HalamanAdminController::class, 'halaman_list_request'])->name('admin.list-request');
//Akhir Routing Halaman Admin


require __DIR__.'/auth.php';