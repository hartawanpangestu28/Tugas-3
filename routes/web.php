<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;
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
    return view('v_home');
});
Route::view('/produk','v_produk');
Route::view('/pemesanan','v_pemesanan');
Route::view('/pelanggan','v_pelanggan');

Route::get('tugas_1', [TugasController::class,'tugas_1'])->name('tugas_1');
Route::get('tugas_2', [TugasController::class,'tugas_2'])->name('tugas_2');
