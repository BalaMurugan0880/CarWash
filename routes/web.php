<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarBrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\HomeController;



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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->middleware('verified');
Route::resource('carbrand', CarBrandController::class)->middleware('verified');
Route::resource('carmodel', CarModelController::class)->middleware('verified');
Route::get('get_by_carbrand',  [App\Http\Controllers\HomeController::class, 'get_by_carbrand'])->name('get_by_carbrand');


