<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarController;
use App\Http\Middleware\AdminMiddleware;
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

Route::get('/carCreate', [CarController::class, 'carCreate'])->name('carCreate')->middleware([AdminMiddleware::class]);
Route::post('/carCreate', [CarController::class, 'carCreateSubmit'])->name('carCreate')->middleware([AdminMiddleware::class]);
Route::get('/carinfo', [CarController::class, 'carinfo'])->name('carinfo');

Route::get('/carUpdate/{id}',[CarController::class,'carUpdate'])->name('carUpdate')->middleware([AdminMiddleware::class]);
Route::post('/carUpdate',[CarController::class,'carUpdateSubmit'])->name('carUpdate')->middleware([AdminMiddleware::class]);