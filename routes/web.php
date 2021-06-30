<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [\App\Http\Controllers\HomeController::class, 'singleCategory']);
Route::get('/poema', [\App\Http\Controllers\PoemaController::class, 'poema'])->name('poema');
Route::get('/poemacreate', [\App\Http\Controllers\PoemaController::class, 'create'])->name('pcreate');
Route::post('poema-store/', [\App\Http\Controllers\PoemaController::class, 'store'])->name('store');
Auth::routes();
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout']);

