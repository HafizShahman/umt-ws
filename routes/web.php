<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PendingReg;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\Improvement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\UmtAdmin\UmtAdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Redirect;



Route::get('/', function () {
    return Redirect::to('/login');
})->name('mainpage');


Route::group(['prefix' => 'superadmin', 'middleware' => ['superadmin', 'auth:sanctum', 'verified']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('superadmindashboard');
    Route::get('user_list', [AdminController::class, 'user_list'])->name('superadminuser_list');
    Route::get('mainboard', [GeneralController::class, 'mainboard'])->name('superadminmainboard');

    Route::post('assign', [AdminController::class, 'adminassignrole'])->name('adminassignrole');
    Route::post('delete', [AdminController::class, 'deleteuser'])->name('deleteuser');
});
Route::group(['prefix' => 'umtadmin', 'middleware' => ['umtadmin', 'auth:sanctum', 'verified']], function () {
    Route::get('user_list', [UmtAdminController::class, 'user_list'])->name('umtadminuser_list');

    Route::post('assign', [UmtAdminController::class, 'assignrole'])->name('assignrole');
});

Route::group(['prefix' => 'user', 'middleware' => ['userone', 'auth:sanctum']], function () {
    Route::get('dashboard', [UserController::class, 'mainboard'])->name('user1dashboard');
    Route::get('chart', [UserController::class, 'chart'])->name('uochart');
});

Route::group(['prefix' => 'user', 'middleware' => ['usertwo', 'auth:sanctum']], function () {
    Route::get('dashboard', [UserController::class, 'mainboard'])->name('user2dashboard');
    Route::get('chart', [UserController::class, 'chart'])->name('utchart');
    Route::get('table', [UserController::class, 'table'])->name('uttable');
    Route::post('/export-table', [UserController::class, 'export'])->name('exporttable');
});

Route::get('pending_approve', [PendingReg::class, 'pendingreg'])->name('pending_approve');

Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/update/personalinfo', [ProfileController::class, 'updatepersonalinfo'])->name('updatepersonalinfo');
Route::delete('usersdelete/{id}', [ProfileController::class, 'destroy'])->name('users.destroy');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logoutttt');
Route::post('/registeruser', [ProfileController::class, 'registeruser'])->name('registeruser');
