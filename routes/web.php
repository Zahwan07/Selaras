<?php

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

Route::get('/', [App\Http\Controllers\IntegratedController::class, 'index']);
Route::get('/menu', [App\Http\Controllers\IntegratedController::class, 'index']);

Route::get('/dashboard', function(){
    return view('index');
});


Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/signin', [App\Http\Controllers\LoginController::class, 'valid']);

Route::get('/signup',[App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store']);

Route::get('/tiket',[App\Http\Controllers\TiketController::class, 'index']);
Route::post('/komplain', [App\Http\Controllers\TiketController::class, 'store']);
Route::post('/komplainDash', [App\Http\Controllers\TiketController::class, 'storeDash']);

Route::get('/komplain/{id}', [App\Http\Controllers\TiketController::class, 'edit'])->name('komplain.edit');
Route::put('/komplain/{id}', [App\Http\Controllers\TiketController::class, 'update'])->name('komplain.update');

Route::delete('/tiket/{id}',  [App\Http\Controllers\TiketController::class, 'destroy'])->name('tiket.destroy');