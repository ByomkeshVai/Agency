<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false]);

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    Route::get('/all-banner', [App\Http\Controllers\Admin\BannerController::class, 'all_banner'])->name('admin.all_banner');
    Route::get('/add-banner', [App\Http\Controllers\Admin\BannerController::class, 'add_banner'])->name('admin.add_banner');
    Route::post('/banner/store', [App\Http\Controllers\Admin\BannerController::class, 'store'])->name('admin.banner_store');
    Route::post('/banner/bannerStatus', [App\Http\Controllers\Admin\BannerController::class, 'bannerStatus'])->name('admin.bannerStatus');
    Route::get('/banner/edit/{id}', [App\Http\Controllers\Admin\BannerController::class, 'edit'])->name('admin.edit_banner');
    Route::post('/banner/change/{id}', [App\Http\Controllers\Admin\BannerController::class, 'change'])->name('admin.change_banner');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
