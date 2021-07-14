<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\AdministracionController;
use Illuminate\Support\Facades\Route;

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
    return view('Frontend.WelcomePage');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // DASHBOARD 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/G-User', [DashboardController::class, 'G_User'])->name('dashboard.G.User');
    Route::get('/administracion', [AdministracionController::class, 'index'])->name('administracion');
    // DASHBOARD 

    // USUARIOS
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    // USUARIOS
});
