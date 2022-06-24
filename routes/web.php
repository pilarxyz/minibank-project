<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TellerController;
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
  
    Route::get('/teller/home', [TellerController::class, 'index'])->name('teller.home');
    Route::get('/teller/balance', [TellerController::class, 'balance'])->name('teller.balance');
});
/*------------------------------------------
--------------------------------------------
All Customer Service Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:cs'])->group(function () {
  
    Route::get('/cs/home', [CustomerServiceController::class, 'index'])->name('cs.home');
    Route::get('/cs/create', [CustomerServiceController::class, 'create'])->name('cs.create');
});
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::get('/admin/config', [AdminController::class, 'config'])->name('admin.config');
    Route::post('/admin/store', [EmployeeController::class, 'store'])->name('admin.store');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
