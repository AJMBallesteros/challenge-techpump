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

Route::get('/',[CamGirlController::class, 'index'])->name('girls.home');
Route::get('/retrieve-cam-girls', [CamGirlController::class, 'retrieveCamGirls'])->name('girls.retrieve');

