<?php

use App\models\Post;
use App\models\Program;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

use PHPUnit\Framework\Constraint\RegularExpression;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/program', [ProgramController::class, 'index'])->name('Programs');
Route::get('/program/{slug}', [ProgramController::class, 'show']);

//Route::get('/details', function(){
//   return view('pages.detail',[
//        "title" => "Details"
//    ]);
//})->name('details');

Route::get('/register', [RegisterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/dashboard', [DashboardController::class,'index'])->name('Dashboard')->middleware('auth');

