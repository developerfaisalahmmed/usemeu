<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Permission\PermissionController;
use App\Http\Controllers\Backend\Role\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
//
require __DIR__.'/auth.php';

//https://www.codecheef.org/article/laravel-8-login-with-custom-guard-example

//Route::get('/login',[LoginController::class,'index']);
//Route::post('/admin-login',[LoginController::class,'login'])->name('admin-login');
//Route::get('/admin-register',[RegisterController::class,'index'])->name('admin.register');





Route::group( ['middleware' => ['auth']],function() {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');

    Route::resource('users', AdminController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

});




