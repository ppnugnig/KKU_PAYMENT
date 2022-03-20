<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NavAdminController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserscheduleController;
use App\Http\Controllers\StudentController;

use App\http\Controllers\KkupaymentController;

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

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/account',[AccountController::class,'account']);
Route::get('/navbar',[NavbarController::class,'navbar']);
Route::get('/navadmin',[NavAdminController::class,'navadmin']);
Route::get('/footer',[FooterController::class.'footer']);
Route::get('/profile',[ProfileController::class,'Std_profile']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('users',UserscheduleController::class);
Route::resource('schedules',ScheduleController::class);
Route::resource('students',StudentController::class);


////////////////////////////////////////////


Route::get('/add-kkupayment',[KkupaymentController::class,'create']);

Route::post('/add-kkupayment', [KkupaymentController::class, 'store']);



Route::get('/kkupayments',[KkupaymentController::class,'index']);

Route::get('/kkupayments1',[KkupaymentController::class,'index1']);

Route::post('/status', [KkupaymentController::class,'update_status']);



////////////////////////////////////////////

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
