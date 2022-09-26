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
      Route::get('product-stock', [App\Http\Controllers\Admin\ProductController::class, 'stock'])->name('products.stock');
      Route::get('products/bulk', [App\Http\Controllers\Admin\ProductController::class, 'bulk'])->name('products.bulk');
      Route::get('products/destroy/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('products.destroy');
      Route::get('products/attribute_type',[App\Http\Controllers\Admin\ProductController::class, 'attribute_type'])->name('products.attribute_type');
      Route::resource('products',App\Http\Controllers\Admin\ProductController::class)->only(['index', 'store', 'edit', 'update','create']);

      //Brand
      Route::post('/bulk-brand-delete', [App\Http\Controllers\Admin\BrandController::class,'bulk_brand_delete'])->name('bulk-brand-delete');
      Route::get('brands/{id}/destory', [App\Http\Controllers\Admin\BrandController::class,'destroy'])->name('brands.destory');
      Route::resource('brands',App\Http\Controllers\Admin\BrandController::class);

      // Categories
      Route::get('categories/delete', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('categories.delete');
      Route::get('categories/destroy/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categories.destroy');
      Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class)->only(['index', 'store', 'edit', 'update','create']);


      //Units
      Route::get('units/delete', [App\Http\Controllers\Admin\UnitController::class, 'delete'])->name('units.delete');
      Route::get('units/destroy/{id}', [App\Http\Controllers\Admin\UnitController::class, 'destroy'])->name('units.destroy');
      Route::resource('units',App\Http\Controllers\Admin\UnitController::class)->only(['index', 'store', 'edit', 'update','create']);


      //Taxes
      Route::get('taxes/destroy/{id}', [App\Http\Controllers\Admin\TaxController::class, 'destroy'])->name('taxes.destroy');
      Route::resource('taxes',App\Http\Controllers\Admin\TaxController::class)->only(['index', 'store', 'edit', 'update','create']);


      //Attribute Types
      Route::get('attribute_types/destroy/{id}', [App\Http\Controllers\Admin\AttributetypeController::class, 'destroy'])->name('attribute_types.destroy');
      Route::resource('attribute_types',App\Http\Controllers\Admin\AttributetypeController::class)->only(['index', 'store', 'edit', 'update','create']);


      //Attributes
      Route::get('attributes/destroy/{id}', [App\Http\Controllers\Admin\AttributeController::class, 'destroy'])->name('attributes.destroy');
      Route::resource('attributes',App\Http\Controllers\Admin\AttributeController::class)->only(['index','store', 'edit', 'update','create']);

      
      //Colors
      Route::get('colors/destroy/{id}', [App\Http\Controllers\Admin\ColorController::class, 'destroy'])->name('colors.destroy');
      Route::resource('colors',App\Http\Controllers\Admin\ColorController::class)->only(['index', 'store', 'edit', 'update','create']);

      //Roles
      Route::get('roles/permissions/{id}', [App\Http\Controllers\Admin\RoleController::class, 'permission'])->name('roles.permissions');
      Route::post('roles/permissions-update/{id}', [App\Http\Controllers\Admin\RoleController::class, 'permission_update'])->name('roles.permissions.update');
      Route::get('roles/destroy/{id}', [App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('roles.destroy');
      Route::resource('roles',App\Http\Controllers\Admin\RoleController::class)->only(['index', 'store', 'edit', 'update','create']);

      //Permissions
      Route::get('permissions/update/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'destroy'])->name('permissions.destroy');
      Route::get('permissions/destroy/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'destroy'])->name('permissions.destroy');
      Route::resource('permissions',App\Http\Controllers\Admin\PermissionController::class)->only(['index', 'store', 'edit', 'update','create']);


      //settings
      Route::get('/general-setting', [App\Http\Controllers\Admin\SettingController::class, 'general_setting'])->name('general_setting.index');
      Route::post('/general-setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('setting.update');
        // uploader


        //Customer
  
        Route::get('customers/delete/{id}', [App\Http\Controllers\Admin\CustomerController::class,'destroy'])->name('customers.delete');
        Route::get('customers_ban/{customer}', [App\Http\Controllers\Admin\CustomerController::class,'ban'])->name('customers.ban');
        Route::get('/customers/login/{id}', [App\Http\Controllers\Admin\CustomerController::class,'login'])->name('customers.login');
        Route::post('/bulk-customer-delete', [App\Http\Controllers\Admin\CustomerController::class,'bulk_customer_delete'])->name('bulk-customer-delete');
        Route::resource('customers', App\Http\Controllers\Admin\CustomerController::class)->only(['index', 'store', 'edit', 'update','create']);


        //Vendors
        Route::get('vendors/status/{id}', [App\Http\Controllers\Admin\VendorController::class,'status'])->name('vendors.status');
        Route::resource('vendors', App\Http\Controllers\Admin\VendorController::class);
        
        Route::get('vendors/delete/{id}', [App\Http\Controllers\Admin\VendorController::class,'destroy'])->name('vendors.delete');
        Route::get('vendors/{vendor}', [App\Http\Controllers\Admin\VendorController::class,'ban'])->name('vendors.ban');
        Route::get('/vendors/login/{id}', [App\Http\Controllers\Admin\VendorController::class,'login'])->name('vendors.login');

        //Staffs
        Route::get('staff/status/{id}', [App\Http\Controllers\Admin\StaffController::class,'status'])->name('staff.status');
        Route::resource('staff', App\Http\Controllers\Admin\StaffController::class);
        Route::get('staff/delete/{id}', [App\Http\Controllers\Admin\StaffController::class,'destroy'])->name('staff.delete');
        Route::get('staff/{vendor}', [App\Http\Controllers\Admin\StaffController::class,'ban'])->name('staff.ban');
        Route::get('/staff/login/{id}', [App\Http\Controllers\Admin\StaffController::class,'login'])->name('staff.login');
       


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

