<?php

use App\Http\Controllers\OfferfilterController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\TakealotsalesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('takealotsales/{page_number?}', [TakealotsalesController::class, 'takealotsales'])->middleware(['auth'])->name('takealotsales');
Route::get('takealotoffers/{page_number?}', [OffersController::class, 'index'])->middleware(['auth'])->name('takealotoffers');
Route::get('offers_count/buyable', [OfferfilterController::class, 'buyable_offers'])->middleware(['auth'])->name('buyable');
Route::get('offers_count/not_buyable', [OfferfilterController::class, 'not_buyable_offers'])->middleware(['auth'])->name('not_buyable');
Route::get('offers_count/disabled_offers_by_seller', [OfferfilterController::class, 'disabled_offers_by_seller'])->middleware(['auth'])->name('disabled_by_seller');
require __DIR__.'/auth.php';
