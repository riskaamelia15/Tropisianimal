<?php

use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('front.home');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/galery', function () {
    return view('front.galery');
});

//Route front controller
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact', [ContactController::class, 'create']);

Route::get('/news', [PostController::class, 'index']);

// Halaman single post
Route::get('news/{post:slug}', [PostController::class, 'show']);
