<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;
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
Route::get('/', [BaseController::class, 'index']);
Route::resource('/dashboard', AdminController::class);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/keluar', [LoginController::class, 'keluar']);
Route::post('/checkLogin', [LoginController::class, 'check']);

Route::get('/update_pasien/{id}', [StatusController::class, 'updatestatus']);
Route::resource('/antrian', AntrianController::class);
