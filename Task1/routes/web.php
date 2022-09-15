<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
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
    return view('admin.signin');
});
Route::get('/signin', [AdminController::class, 'signin'])->name('signin');
Route::post('/signin', [AdminController::class, 'signinSubmit'])->name('signin');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/carCreate', [CarController::class, 'carCreate'])->name('carCreate');
Route::post('/carCreate', [CarController::class, 'carCreateSubmit'])->name('carCreate');
Route::get('/carinfo', [CarController::class, 'carinfo'])->name('carinfo');