<?php

use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TrainController::class, 'index'])->name('home');

Route::get('/Milan', [TrainController::class, 'fromMilan'])->name('trains_Milan');

Route::get('/high', [TrainController::class, 'highSpeed'])->name('highSpeed');

Route::get('/Rome', [TrainController::class, 'fromRome'])->name('trains_Rome');
