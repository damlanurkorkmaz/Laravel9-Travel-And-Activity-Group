<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home');


Route::get('/home', [HomeController::class, 'index']);
Route::get('/test/{id}', [HomeController::class, 'test'])-> where ('id','[0-9]+');


Route::get('/aboutus', [HomeController::class, 'aboutus'])-> name('aboutus');

// admin anasayfa

Route::get('/admin', [App\Http\Controllers\admin\HomeController::class, 'index'])-> name('adminhome')-> middleware('auth');

Route::get('/admin/login', [HomeController::class, 'login'])-> name('admin_login');

Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])-> name('admin_logincheck');

Route::get('/admin/logout', [HomeController::class, 'logout'])-> name('admin_logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
