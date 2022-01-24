<?php

use App\Http\Controllers\AddRekamMedisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OdontogramController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\SimbolOdontogramController;
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
Route::resource('/pasien',DataPasienController::class);
Route::resource('/simbol',SimbolOdontogramController::class);
Route::get('/odontogram/{id}', [OdontogramController::class, 'index']);
Route::get('/getsimbol', [OdontogramController::class, 'getsimbol']);
Route::get('/addrekammedis/{idpasien}/{idgigi}', [AddRekamMedisController::class, 'index']);
Route::get('/tambahodontogram', [AddRekamMedisController::class, 'tambah']);
Route::get('/antrian', [AntrianController::class, 'index']);
Route::get('/addantrian', [AntrianController::class, 'addantrian']);


Route::get('/update_pasien/{id}', [StatusController::class, 'updatestatus']);


Route::get('/pasien/{id}' , [PasienController::class, 'index']);
