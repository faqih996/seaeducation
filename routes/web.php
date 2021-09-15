<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
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

Route::get('/',
   [HomeController::class,'index']
)->name('home');

Route::get('/details',
   [DetailController::class,'index']
)->name('details');

Route::get('/register',
    [RegisterController::class,'index']
)->name('register');

Route::post('/register',
    [RegisterController::class,'store']
);

Route::get('/login',
    [LoginController::class,'index']
)->name('login');
