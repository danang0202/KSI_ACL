<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/testing', function () {
//     return view('admin.admin-edit-user');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


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
});



require __DIR__ . '/auth.php';
