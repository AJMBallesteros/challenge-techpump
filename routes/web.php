<?php

use App\src\infrastructure\CamGirl\CamGirlController;
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

Route::get('/cerdas', [CamGirlController::class, 'cerdas'])->name('cerdas');
Route::get('/babosas', [CamGirlController::class, 'babosas'])->name('babosas');
Route::get('/conejox', [CamGirlController::class, 'conejox'])->name('conejox');


Route::get('/retrieve-cam-girls', [CamGirlController::class, 'retrieveCamGirls'])->name('girls.retrieve');

Route::get('/',[CamGirlController::class, 'index'])->name('girls.home');
