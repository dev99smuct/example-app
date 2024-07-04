<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;


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

Route::get('/slider/upload', [SliderController::class, 'create'])->name('slider.create');
Route::post('/slider/upload', [SliderController::class, 'store'])->name('slider.store');
