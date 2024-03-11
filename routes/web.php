<?php

use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\SliderController;
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

Route::get('/', [ReservasiController::class, 'index'])->name('home');
Route::get('gallery', [GaleriController::class, 'index'])->name('gallery');
Route::get('syarat-ketentuan', [SiteController::class, 'syaratUser'])->name('sk');
Route::get('about', [SiteController::class, 'aboutUser'])->name('about');
Route::get('akun', [AkunController::class, 'index'])->name('akun');
Route::patch('akun/{user}', [AkunController::class, 'update'])->name('akun.update');

//route login, gatau jangan diubah
// Auth::routes();

// Route::group(['prefix' => 'admin'], function () {
Route::auth();
// });

//route admin lur
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('admin.index');
        Route::get('home', [HomeController::class, 'index'])->name('admin.home');
        Route::resource('produk', ProdukController::class);
        Route::resource('user', UserController::class);
        Route::resource('galeri', AdminGaleriController::class);
        Route::resource('slider', SliderController::class);

        Route::get('website', [SiteController::class, 'index'])->name('admin.website');
        Route::patch('website/{site}', [SiteController::class, 'update'])->name('admin.website.update');
        Route::get('syarat-ketentuan', [SiteController::class, 'syarat'])->name('sk.website');
        Route::patch('syarat-ketentuan/{site}', [SiteController::class, 'syaratUpdate'])->name('sk.website.update');
    });
});
