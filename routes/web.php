<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'landing']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Route::middleware('auth', function () {
Route::get('/users', [UserController::class, 'index'])->name('user.index')->middleware('auth');

Route::group([
    'as' => 'mobil.',
    'prefix' => 'mobil',
    'middleware' => 'auth'
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
    "prefix" => "sewa",
    'middleware' => 'auth'
], function () {
    Route::get('/', [SewaController::class, 'index'])->name('index');
    Route::get('/form', [SewaController::class, 'create'])->name('form');
    Route::post('/book', [SewaController::class, 'store'])->name('book');
});
// });
