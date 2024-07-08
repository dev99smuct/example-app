<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\BasicAuthMiddleware;
use App\Http\Controllers\HeroCarouselController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('slider')->middleware(BasicAuthMiddleware::class)->group(function () {
    Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
});

Route::get('/department/{department}', [SliderController::class, 'showDepartment'])->name('department');
Route::resource('hero_carousels', HeroCarouselController::class);
