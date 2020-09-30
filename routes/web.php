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

// Route::get('/', function () {
//   return view('welcome');
// });

// contoh
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'proccess_login'])->name('login.post');
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/kebutuhan', [KebutuhanController::class, 'index']);
Route::get('/musim', [Musim_tanamController::class, 'index']);
Route::get('/rekomendasi', [RekomendasiController::class, 'index']);
Route::get('/satuan', [SatuanController::class, 'index']);
Route::get('/wilayah', [WilayahController::class, 'index']);
