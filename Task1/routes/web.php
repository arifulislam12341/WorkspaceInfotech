<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

/*.............................Admin Route...............*/
Route::get('/', function () {
    return view('admin.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:admin'])->name('dashboard');

require __DIR__.'/adminauth.php';


/*.............................Car Route...............*/
Route::get('/carCreate', [CarController::class, 'carCreate'])->name('carCreate')->middleware(['auth:admin']);
Route::post('/carCreate', [CarController::class, 'carCreateSubmit'])->name('carCreate')->middleware(['auth:admin']);

Route::get('/carinfo', [CarController::class, 'carinfo'])->name('carinfo');

Route::get('/carUpdate/{id}',[CarController::class,'carUpdate'])->name('carUpdate')->middleware(['auth:admin']);
Route::post('/carUpdate',[CarController::class,'carUpdateSubmit'])->name('carUpdate')->middleware(['auth:admin']);

Route::get('/carDelete/{id}',[CarController::class,'carDelete'])->name('carDelete');