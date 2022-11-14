<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginController::class,'index'] )->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login'] )->name('admin.login.submit');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::post('/add', [DashboardController::class,'addumkm'] )->name('add.umkm')->middleware('auth');
 Route::post('/update', [DashboardController::class,'update'] )->name('update.umkm')->middleware('auth');

Route::get('/', [DashboardController::class,'index'] )->name('home')->middleware('auth');
Route::get('/tambahumkm', [DashboardController::class,'add'] )->name('tambah')->middleware('auth');
Route::get('editdata/{id}', [DashboardController::class,'editview'] )->name('editdata')->middleware('auth');
Route::get('detail/{id}', [DashboardController::class,'detail'] )->name('detail')->middleware('auth');

Route::post('/terima', [DashboardController::class,'terima'] )->name('terima.umkm')->middleware('auth');
Route::post('/tolak', [DashboardController::class,'tolak'] )->name('tolak.umkm')->middleware('auth');

Route::get('/verify/{token}', [RegisterController::class,'verif'] )->name('verify');


Route::get("fast",[ReportController::class,"fast"]);
Route::get("all",[ReportController::class,"all"]);
Route::get("slow",[ReportController::class,"slow"]);
Route::get("umkm",[ReportController::class,"umkm"]);
Route::get("kota",[ReportController::class,"kota"]);
Route::get("kategori",[ReportController::class,"kategori"]);

Route::get("stock_all",[ReportController::class,"stock_all"]);
Route::get("stock_umkm",[ReportController::class,"stock_umkm"]);
Route::get("stock_kategori",[ReportController::class,"stock_kategori"]);
Route::get("stock_outdate",[ReportController::class,"stock_outdate"]);
Route::get("stock_zero",[ReportController::class,"stock_zero"]);