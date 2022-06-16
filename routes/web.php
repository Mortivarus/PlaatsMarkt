<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\BiddingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MessageController;

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

Route::get('/', [AdvertController::class, 'index'])->name('adverts.index');

Route::get('/adverts/create', [AdvertController::class, 'create'])->name('adverts.create');

Route::post('/adverts/create', [AdvertController::class, 'store']);



Route::get('/adverts/{advert}', [AdvertController::class, 'view'])->name('adverts.view');

require __DIR__.'/auth.php';
