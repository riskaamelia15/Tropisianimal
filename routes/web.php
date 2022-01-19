<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
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

Route::get('/about', function () {
    return view('front.about');
});

//Route front controller
Route::get('/', [PostController::class, 'home']);
Route::get('/news', [PostController::class, 'index']);
Route::get('/galery', [PostController::class, 'galery']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact', [ContactController::class, 'create']);

// Halaman single post
Route::get('news/{post:slug}', [PostController::class, 'show']);

// Route login
Route::get('/login', [LoginController::class, 'index'])
// ->name('login')->middleware('guest')
;
Route::post('/login', [LoginController::class, 'auth'])
// ->name('login')
;

// Route dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})
// ->middleware('auth')
;

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class);
