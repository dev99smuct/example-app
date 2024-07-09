<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\BasicAuthMiddleware;
use App\Http\Controllers\HeroCarouselController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('slider')->middleware(BasicAuthMiddleware::class)->group(function () {
    Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
});

Route::get('/department/{department}', [SliderController::class, 'showDepartment'])->name('department');
Route::resource('hero_carousels', HeroCarouselController::class);

Route::prefix('hero_carousel')->middleware(BasicAuthMiddleware::class)->group(function () {
    Route::get('/create', [HeroCarouselController::class, 'create'])->name('hero_carousel.create');
    Route::post('/store', [HeroCarouselController::class, 'store'])->name('hero_carousel.store');
});
