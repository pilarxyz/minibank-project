<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Teller Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:teller'])->group(function () {
  
    Route::get('/teller/home', [HomeController::class, 'tellerHome'])->name('teller.home');
});
  
/*------------------------------------------
--------------------------------------------
All Customer Service Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:cs'])->group(function () {
  
    Route::get('/cs/home', [HomeController::class, 'csHome'])->name('cs.home');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/create', [EmployeeController::class,'create'])->name('admin.create');
    Route::get('/admin/config', [EmployeeController::class,'config'])->name('admin.config');
    Route::post('/admin/store', [EmployeeController::class, 'store'])->name('admin.store');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
