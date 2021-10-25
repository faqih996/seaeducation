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
use App\Http\Controllers\Admin\BatchController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ProgramAdminController;
use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\ProgramController;



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
Route::get('/program', [ProgramController::class,'index'])->name('program');
Route::get('/program/kurikulum/{program:slug}', [ProgramController::class,'show']);

Route::group(['middleware' => ['verified']],function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('Dashboard');

    Route::get('/master', [MasterController::class,'index'])->name('Master');

    Route::resource('/gallery', GalleryController::class);

    Route::get('/proifle', [ProfileController::class,'index'])->name('proifle');
    Route::get('/proifle/create', [ProfileController::class,'create']);
    Route::post('/proifle/store', [ProfileController::class,'store']);
    Route::get('/proifle/edit/{id}', [ProfileController::class,'edit']);
    Route::post('/proifle/update/{id}', [ProfileController::class,'update']);


    Route::get('/batch', [BatchController::class,'index'])->name('batch');
    Route::get('/batch/create', [BatchController::class,'create']);
    Route::post('/batch/store', [BatchController::class,'store']);
    Route::get('/batch/edit/{id}', [BatchController::class,'edit']);
    Route::post('/batch/update/{id}', [BatchController::class,'update']);

    Route::get('/department', [DepartmentController::class,'index'])->name('department');
    Route::get('/department/create', [DepartmentController::class,'create']);
    Route::post('/department/store', [DepartmentController::class,'store']);
    Route::get('/department/edit/{slug}', [DepartmentController::class,'edit']);
    Route::post('/department/update/{id}', [DepartmentController::class,'update']);

    Route::get('/programadmin', [ProgramAdminController::class,'index'])->name('Admin program');
    Route::get('/programadmin/create', [ProgramAdminController::class,'create']);
    Route::post('/programadmin/store', [ProgramAdminController::class,'store']);
    Route::get('/programadmin/edit/{id}', [ProgramAdminController::class,'edit']);
    Route::post('/programadmin/update/{id}', [ProgramAdminController::class,'update']);

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
