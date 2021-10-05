<?php

use App\models\Post;
use App\models\Program;
use App\Models\Batch;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\DepartmentController;
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


Route::get('/batch', [BatchController::class,'index'])->name('Batch')->middleware('auth');
Route::get('/createbatch', [BatchController::class,'create'])->middleware('auth');
Route::post('/createbatch', [BatchController::class,'store'])->middleware('auth');
Route::get('/updatebatch', [BatchController::class,'edit'])->middleware('auth');
Route::post('/updatebatch', [BatchController::class,'update'])->middleware('auth');


Route::get('/department', [DepartmentController::class,'index'])->name('Department')->middleware('auth');
Route::get('/createdepartment', [DepartmentController::class,'create'])->middleware('auth');
Route::post('/createdepartment', [DepartmentController::class,'store'])->middleware('auth');
Route::get('/updatedepartment', [DepartmentController::class,'edit'])->middleware('auth');
Route::post('/updatedepartment', [DepartmentController::class,'update'])->middleware('auth');
