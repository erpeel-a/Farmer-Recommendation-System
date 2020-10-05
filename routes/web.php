<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\KebutuhanController;
use App\Http\Controllers\Admin\Musim_tanamController;
use App\Http\Controllers\Admin\RekomendasiController;
use App\Http\Controllers\Admin\SatuanController;
use App\Http\Controllers\Admin\WilayahController;

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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'proccess_login'])->name('login.post');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/admin', [DashboardController::class, 'index']);
  // manage satuan
  Route::get('/satuan', [SatuanController::class, 'index']);
  Route::get('/satuan/create', [SatuanController::class, 'create'])->name('satuan.create');
  Route::post('/satuan', [SatuanController::class, 'store'])->name('satuan.store');
  Route::get('/satuan/edit/{id}', [SatuanController::class, 'edit'])->name('satuan.edit');
  Route::put('/satuan/update/{id}', [SatuanController::class, 'update'])->name('satuan.update');
  Route::delete('/satuan/delete/{id}', [SatuanController::class, 'destroy'])->name('satuan.destroy');
  // manage wilayah
  Route::get('/wilayah', [WilayahController::class, 'index']);
  Route::get('/wilayah/create', [WilayahController::class, 'create'])->name('wilayah.create');
  Route::post('/wilayah', [WilayahController::class, 'store'])->name('wilayah.store');
  Route::get('/wilayah/edit/{id}', [WilayahController::class, 'edit'])->name('wilayah.edit');
  Route::put('/wilayah/update/{id}', [WilayahController::class, 'update'])->name('wilayah.update');
  Route::delete('/wilayah/delete/{id}', [WilayahController::class, 'destroy'])->name('wilayah.destroy');
  //kebutuhan
  Route::get('/kebutuhan', [KebutuhanController::class, 'index']);
  Route::get('/kebutuhan/create', [KebutuhanController::class, 'create'])->name('kebutuhan.create');
  Route::post('/kebutuhan', [KebutuhanController::class, 'store'])->name('kebutuhan.store');
  Route::get('/kebutuhan/edit/{id}', [KebutuhanController::class, 'edit'])->name('kebutuhan.edit');
  Route::put('/kebutuhan/update/{id}', [KebutuhanController::class, 'update'])->name('kebutuhan.update');
  Route::delete('/kebutuhan/delete/{id}', [KebutuhanController::class, 'destroy'])->name('kebutuhan.destroy');
  //manage rekomendasi
  Route::get('/rekomendasi', [RekomendasiController::class, 'index']);
  Route::get('/rekomendasi/create', [RekomendasiController::class, 'create'])->name('rekomendasi.create');
  Route::post('/rekomendasi', [RekomendasiController::class, 'store'])->name('rekomendasi.store');
  Route::get('/rekomendasi/edit/{id}', [RekomendasiController::class, 'edit'])->name('rekomendasi.edit');
  Route::put('/rekomendasi/update/{id}', [RekomendasiController::class, 'update'])->name('rekomendasi.update');
  Route::delete('/rekomendasi/delete/{id}', [RekomendasiController::class, 'destroy'])->name('rekomendasi.destroy');
  //manage musim
  Route::get('/musim', [Musim_tanamController::class, 'index']);
  Route::get('/musim/create', [Musim_tanamController::class, 'create'])->name('musim.create');
  // logout
  Route::post('/logout', [AuthController::class, 'logout'])->name('process.logout');
});
