<?php

use App\models\post;
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

Route::get('/', function(){
    return view('pages.home',[
        "title" => "Home"
    ]);
});

Route::get('/details', function(){
    return view('pages.detail',[
        "title" => "Details",
        "post" => Post::all()
    ]);
});

Route::get('/register', [RegisterController::class,'index']);

Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index']);
