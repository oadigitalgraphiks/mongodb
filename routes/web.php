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

Route::post('/aiz-uploader', [App\Http\Controllers\AizUploadController::class,'show_uploader']);
Route::post('/aiz-uploader/upload', [App\Http\Controllers\AizUploadController::class,'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [App\Http\Controllers\AizUploadController::class,'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [App\Http\Controllers\AizUploadController::class,'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [App\Http\Controllers\AizUploadController::class,'attachment_download'])->name('download_attachment');

Route::prefix('admin')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/general-setting', [App\Http\Controllers\SettingController::class, 'general_setting'])->name('general_setting.index');
    Route::post('/general-setting/update', [App\Http\Controllers\SettingController::class, 'update'])->name('admin.setting.update');
});
