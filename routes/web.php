<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\SewaController;
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

Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/detail/{detail:nopol}', [MobilController::class, 'show']);
Route::get('/mobil/edit/{edit:nopol}', [MobilController::class, 'edit']);
Route::put('/mobil/update/{edit:nopol}', [MobilController::class, 'update']);
Route::delete('/mobil/{delete:nopol}', [MobilController::class, 'delete']);

Route::group([
    "as" => "sewa.",
    "prefix" => "sewa"
], function () {
    Route::get('/', [SewaController::class, 'index'])->name('index');
    Route::get('/form', [SewaController::class, 'create'])->name('form');
    Route::post('/book', [SewaController::class, 'store'])->name('book');
});
