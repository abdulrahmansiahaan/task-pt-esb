<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\Load_dataController;

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
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/soal', [SoalController::class, 'index'])->name('soal');

Route::get('/sales', [SalesController::class, 'index'])->name('sales');
Route::get('/sales/create', [SalesController::class, 'create'])->name('salescreate');

// load data yang dibutuhkan
Route::post('/sales/loaddatatypeproduct', [SalesController::class, 'loadDataTypeProduct'])->name('loadDataTypeProduct');

