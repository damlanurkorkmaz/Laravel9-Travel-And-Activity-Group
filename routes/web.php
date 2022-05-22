<?php

use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\AdminProductController;
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



Route::redirect('/anasayfa', '/home');

//HOME ROUTES

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/about', [HomeController::class, 'about'])->name('about');

// Route::get('/test/{id}', [HomeController::class, 'test'])-> where ('id','[0-9]+');


//Route::get('/aboutus', [HomeController::class, 'aboutus'])-> name('aboutus');


// admin anasayfa


      Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');


// admin category routes
        Route::get('/admin/category', [AdminCategoryController::class,'index'] )->name('admin_category');

        Route::get('/admin/category/create', [AdminCategoryController::class,'create'] )->name('admin_category_create');

        Route::post('/admin/category/store', [AdminCategoryController::class,'store'])->name('admin_category_store');

        Route::get('/admin/category/edit/{id}', [AdminCategoryController::class,'edit'])->name('admin_category_edit');

        Route::post('/admin/category/update/{id}', [AdminCategoryController::class,'update'])->name('admin_category_update');

        Route::get('/admin/category/destroy/{id}',  [AdminCategoryController::class,'destroy'])->name('admin_category_destroy');

        Route::get('/admin/category/show/{id}',  [AdminCategoryController::class,'show'])->name('admin_category_show');


// admin product  routes
Route::get('/admin/product', [AdminProductController::class,'index'] )->name('admin_product');

Route::get('/admin/product/create', [AdminProductController::class,'create'] )->name('admin_product_create');

Route::post('/admin/product/store', [AdminProductController::class,'store'])->name('admin_product_store');

Route::get('/admin/product/edit/{id}', [AdminProductController::class,'edit'])->name('admin_product_edit');

Route::post('/admin/product/update/{id}', [AdminProductController::class,'update'])->name('admin_product_update');

Route::get('/admin/product/destroy/{id}',  [AdminProductController::class,'destroy'])->name('admin_product_destroy');

Route::get('/admin/product/show/{id}',  [AdminProductController::class,'show'])->name('admin_product_show');


// admin image gallery  routes

Route::get('/admin/image/{pid}', [ImageController::class,'index'])->name('admin_image');

Route::post('/admin/image/store/{pid}', [ImageController::class,'store'])->name('admin_image_store');

Route::post('/admin/image/update/{pid}/{id}', [ImageController::class,'update'])->name('admin_image_update');

Route::get('/admin/image/destroy/{pid}/{id}',  [ImageController::class,'destroy'])->name('admin_image_destroy');

// product detail route
Route::get('/product/{id}', [HomeController::class,'product'])->name('product');

//General Routes

Route::get('/admin/settings', [AdminHomeController::class, 'setting'])->name('admin_setting');

Route::post('/admin/settings/update', [AdminHomeController::class, 'settingsUpdate'])->name('admin_settings_update');

// admin login

//Route::get('/admin/login', [AdminHomeController::class, 'login'])->name('admin_login');
//
//Route::post('/admin/logincheck', [App\Http\Controllers\admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
//Route::get('/admin/logout', [App\Http\Controllers\admin\HomeController::class, 'logout'])->name('admin_logout');

/*Route::middleware([
    'auth:sanctum',
    'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

*/
