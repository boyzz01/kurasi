<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::post('/add', [DashboardController::class,'addumkm'] )->name('add.umkm');
 Route::post('/update', [DashboardController::class,'update'] )->name('update.umkm');

Route::get('/', [DashboardController::class,'index'] )->name('home')->middleware('auth');
Route::get('/tambahumkm', [DashboardController::class,'add'] )->name('tambah')->middleware('auth');
Route::get('editdata/{id}', [DashboardController::class,'editview'] )->name('editdata')->middleware('auth');

Route::post('/terima', [DashboardController::class,'terima'] )->name('terima.umkm')->middleware('auth');
Route::post('/tolak', [DashboardController::class,'tolak'] )->name('tolak.umkm')->middleware('auth');

Route::get('/verify/{token}', [RegisterController::class,'verif'] )->name('verify');