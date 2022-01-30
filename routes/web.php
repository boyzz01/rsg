<?php

use App\Http\Controllers\AddRekamMedisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\FisikController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterTindakanController;
use App\Http\Controllers\OdontogramController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\RiwayatAllController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RiwayatPerawatanController;
use App\Http\Controllers\RMController;
use App\Http\Controllers\RPController;
use App\Http\Controllers\SimbolOdontogramController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TindakanController;
use App\Models\Antrian;
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
Route::get('/login', [LoginController::class, 'index']);
Route::get('/keluar', [LoginController::class, 'keluar']);
Route::post('/checkLogin', [LoginController::class, 'check']);

Route::resource('/riwayat-medis',RiwayatController::class);
Route::get('/riwayat-pasien/{id_trans}/{id_pasien}', [RiwayatAllController::class, 'index']);

Route::resource('/pasien',DataPasienController::class);
Route::resource('/simbol',SimbolOdontogramController::class);
Route::get('/odontogram/{id}', [OdontogramController::class, 'index']);
Route::get('/getsimbol', [OdontogramController::class, 'getsimbol']);
Route::get('/addrekammedis/{idpasien}/{idgigi}', [AddRekamMedisController::class, 'index']);
Route::get('/tambahodontogram', [AddRekamMedisController::class, 'tambah']);
Route::resource('/antrian',AntrianController::class);
Route::get('/pemeriksaan', [PemeriksaanController::class, 'antrian']);
Route::get('/pemeriksaan/{id_trans}/{id_pasien}', [PemeriksaanController::class, 'index']);
Route::resource('/fisik',FisikController::class);
Route::resource('/data-tindakan',MasterTindakanController::class);
Route::resource('/tindakan',TindakanController::class);
Route::resource('/transaksi',TindakanController::class);
Route::resource('/rm',RMController::class);
Route::resource('/rp',RPController::class);
Route::resource('/invoice',InvoiceController::class);
Route::resource('/riwayat/{$id}',InvoiceController::class);
Route::get('/update_status', [StatusController::class, 'updatestatus']);
