<?php

use App\models\Post;
use App\models\Admin\Program;
use App\Models\Batch;

/* belajar di wpu
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
*/
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Admin\ProgramController;


use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/program', [ProgramController::class, 'index'])->name('Programs');
Route::get('/program/{slug}', [ProgramController::class, 'show']);

Route::group(['middleware' => ['verified']],function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('Dashboard');
    Route::get('/batch', [BatchController::class,'index']);
    Route::get('/createbatch', [BatchController::class,'create']);
    Route::post('/createbatch', [BatchController::class,'store']);
    Route::get('/updatebatch', [BatchController::class,'edit']);
    Route::post('/updatebatch', [BatchController::class,'update']);


    Route::get('/department', [DepartmentController::class,'index']);
    Route::get('/createdepartment', [DepartmentController::class,'create']);
    Route::post('/createdepartment', [DepartmentController::class,'store']);
    Route::get('/updatedepartment', [DepartmentController::class,'edit']);
    Route::post('/updatedepartment', [DepartmentController::class,'update']);

    Route::get('/program', [ProgramController::class,'index']);
    Route::get('/createprogram', [ProgramController::class,'create']);
    Route::post('/createprogram', [ProgramController::class,'store']);
    Route::get('/updateprogram', [ProgramController::class,'edit']);
    Route::post('/updateprogram', [ProgramController::class,'update']);
});


//ini file lama belajar via WPUnpas
//Route::get('/details', function(){
//   return view('pages.detail',[
//        "title" => "Details"
//    ]);
//})->name('details');

//Route::get('/register', [RegisterController::class,'index'])->name('register')->middleware('guest');
//Route::post('/register', [RegisterController::class,'store']);

//Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
//Route::post('/login', [LoginController::class,'authenticate']);
//Route::post('/logout', [LoginController::class,'logout']);
