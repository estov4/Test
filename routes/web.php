<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']) ->name('/');
Route::get('/about', [HomeController::class, 'about']) ->name('about');
Route::get('/contact', [HomeController::class, 'contact']) ->name('/contact');
Route::get('/do', [HomeController::class, 'do']) ->name('/do');
Route::get('/login', [HomeController::class, 'login']) ->name('/login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
