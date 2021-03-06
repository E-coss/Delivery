<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\AdministracionController; 
use App\Http\Controllers\Admin\CategoriasController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\MiembroController;
use App\Http\Controllers\Front\GalleryController;
use App\Http\Controllers\Front\ContactController;
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

Route::get('/galeria', [GalleryController::class, 'index'])->name('galeria');
Route::get('/contactanos', [ContactController::class, 'index'])->name('contactanos');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // DASHBOARD 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/G-User', [DashboardController::class, 'G_User'])->name('dashboard.G.User');
    Route::get('/administracion', [AdministracionController::class, 'index'])->name('administracion');
    Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias');
    Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
    Route::get('/slides', [SliderController::class, 'index'])->name('slides');
    Route::get('/miembros', [MiembroController::class, 'index'])->name('miembros');
    // DASHBOARD 

    // USUARIOS
    Route::get('/users', [UsersController::class, 'index'])->name('users');
    // USUARIOS
});
