<?php

use App\Http\Controllers\Admin\AdminController;
use App\Models\Improvement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Redirect;



Route::get('/', function () {
    return Redirect::to('/login');
})->name('mainpage');


Route::group(['prefix' => 'superadmin', 'middleware' => ['superadmin'], 'auth:sanctum', 'verified'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('superadmindashboard');
});
Route::group(['prefix' => 'umtadmin', 'middleware' => ['umtadmin'], 'auth:sanctum', 'verified'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('umtadmindashboard');
});

Route::group(['prefix' => 'user', 'middleware' => ['userone'], 'auth:sanctum', 'verified'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});

Route::group(['prefix' => 'user', 'middleware' => ['usertwo'], 'auth:sanctum', 'verified'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
});


Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/update/personalinfo', [ProfileController::class, 'updatepersonalinfo'])->name('updatepersonalinfo');
Route::delete('usersdelete/{id}', [ProfileController::class, 'destroy'])->name('users.destroy');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logouttt');
Route::post('/registeruser', [ProfileController::class, 'registeruser'])->name('registeruser');
