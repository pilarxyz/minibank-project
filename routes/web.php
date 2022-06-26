<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfigAdminController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TellerController;
use App\Models\ConfigAdmin;
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
    $id = 1;
    $config = ConfigAdmin::find($id);
    return view('welcome')->with('config', $config);
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
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::post("/admin/{id}", [AdminController::class, 'update'])->name('admin.update');
    Route::delete("/admin/{id}", [AdminController::class, 'destroy'])->name('admin.destroy');
    
    Route::get('/admin/config', [ConfigAdminController::class, 'index'])->name('admin.config');
    Route::post("/admin/{id}", [ConfigAdminController::class, 'update'])->name('admin.config.update');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
