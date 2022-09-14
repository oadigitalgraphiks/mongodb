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

// dd('asdasd');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::post('/login-submit', [App\Http\Controllers\AuthController::class, 'login_submit'])->name('login_submit');
Route::post('/register-submit', [App\Http\Controllers\AuthController::class, 'register_submit'])->name('register_submit');


Route::get('/', function () {

  return view('welcome');
});


// Route::middleware('')->group (['prefix' => 'admin','middleware' => ['checkout']], function() {


// });


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');