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

Route::group([
    'as' => 'mobil.',
    'prefix' => 'mobil'
], function () {
    Route::get('/', [MobilController::class, 'index'])->name('index');
    Route::get('/create', [MobilController::class, 'create'])->name('create');
    Route::post('/store', [MobilController::class, 'store'])->name('store');
    Route::get('/{detail:nopol}', [MobilController::class, 'show'])->name('show');
    Route::get('/edit/{edit:nopol}', [MobilController::class, 'edit'])->name('edit');
    Route::put('/edit/{edit:nopol}', [MobilController::class, 'update'])->name('update');
    Route::delete('/{delete:nopol}', [MobilController::class, 'delete'])->name('delete');
});

Route::group([
    "as" => "sewa.",
    "prefix" => "sewa"
], function () {
    Route::get('/', [SewaController::class, 'index'])->name('index');
    Route::get('/form', [SewaController::class, 'create'])->name('form');
    Route::post('/book', [SewaController::class, 'store'])->name('book');
});
