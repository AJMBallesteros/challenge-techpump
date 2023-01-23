<?php

use App\src\infrastructure\CamGirlController;
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

Route::domain('babosas.com')->group(function () {
    Route::get('/');
});

Route::domain('cerdas')->group(function () {
    Route::get('/');
});

Route::domain('babosas')->group(function () {
    Route::get('/');
});

Route::domain('conejox.com')->group(function () {
    Route::get('/');
});


Route::get('/cerdas', [CamGirlController::class, 'cerdas'])->name('cerdas');
Route::get('/babosas', [CamGirlController::class, 'babosas'])->name('babosas');
Route::get('/conejox', [CamGirlController::class, 'conejox'])->name('conejox');


Route::get('/retrieve-cam-girls', [CamGirlController::class, 'retrieveCamGirls'])->name('girls.retrieve');

