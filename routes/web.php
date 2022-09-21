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


Route::get('/', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/login-submit', [App\Http\Controllers\AuthController::class, 'login_submit'])->name('login_submit');
Route::post('/register-submit', [App\Http\Controllers\AuthController::class, 'register_submit'])->name('register_submit');

Route::name('admin.')->prefix('admin')->middleware('auth')->group (function() {

    Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


      //Products
      Route::get('products/attribute_type',[App\Http\Controllers\Admin\ProductController::class, 'attribute_type'])->name('products.attribute_type');
      Route::resource('products',App\Http\Controllers\Admin\ProductController::class);

      Route::resource('brands',App\Http\Controllers\Admin\BrandController::class);

      //Units
      Route::resource('units',App\Http\Controllers\Admin\UnitController::class);



    //settings
    Route::get('/general-setting', [App\Http\Controllers\Admin\SettingController::class, 'general_setting'])->name('general_setting.index');
    Route::post('/general-setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('setting.update');
    // uploader

    //customer
    Route::resource('customers', App\Http\Controllers\Admin\CustomerController::class);
    Route::get('customers_ban/{customer}', [App\Http\Controllers\Admin\CustomerController::class,'ban'])->name('customers.ban');
    Route::get('/customers/login/{id}', [App\Http\Controllers\Admin\CustomerController::class,'login'])->name('customers.login');
    Route::post('/bulk-customer-delete', [App\Http\Controllers\Admin\CustomerController::class,'bulk_customer_delete'])->name('bulk-customer-delete');

    //Flash Deal
    Route::resource('flash_deals', App\Http\Controllers\Admin\FlashDealController::class);

    Route::get('flash_deal/product/serach', [App\Http\Controllers\Admin\FlashDealController::class,'search'])->name('flash_deal.search');
    Route::post('/flash_deals/update_status', [App\Http\Controllers\Admin\FlashDealController::class,'update_status'])->name('flash_deals.update_status');
    Route::post('/flash_deals/update_featured', [App\Http\Controllers\Admin\FlashDealController::class,'update_featured'])->name('flash_deals.update_featured');
    Route::post('/flash_deals/product_discount', [App\Http\Controllers\Admin\FlashDealController::class,'product_discount'])->name('flash_deals.product_discount');
    Route::post('/flash_deals/product_discount_edit', [App\Http\Controllers\Admin\FlashDealController::class,'product_discount_edit'])->name('flash_deals.product_discount_edit');
});


Route::any('/uploaded-files/file-info', [App\Http\Controllers\AizUploadController::class,'file_info'])->name('uploaded-files.info');
Route::resource('uploaded-files', App\Http\Controllers\AizUploadController::class);
Route::post('/aiz-uploader', [App\Http\Controllers\AizUploadController::class,'show_uploader']);
Route::post('/aiz-uploader/upload', [App\Http\Controllers\AizUploadController::class,'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [App\Http\Controllers\AizUploadController::class,'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [App\Http\Controllers\AizUploadController::class,'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [App\Http\Controllers\AizUploadController::class,'attachment_download'])->name('download_attachment');


// Auth::routes();

