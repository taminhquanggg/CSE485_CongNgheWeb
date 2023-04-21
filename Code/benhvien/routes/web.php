<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenhNhanController;
use App\Http\Controllers\PhieuXnController;


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
    return view('welcome');
});

Route::get('/benhnhan', [BenhNhanController::class, 'index'])->name('benhnhans');

Route::get('/benhnhan/add', [BenhNhanController::class, 'create']);

Route::post('/benhnhan/add', [BenhNhanController::class, 'store']);

Route::get('/benhnhan/{id}/delete', [BenhNhanController::class, 'destroy']);

Route::get('/benhnhan/{id}/edit', [BenhNhanController::class, 'edit']);

Route::post('/benhnhan/{id}/edit', [BenhNhanController::class, 'update']);

Route::get('/benhnhan/{id}/detail', [BenhNhanController::class, 'show'])->name('benhnhan');

//Phieu XN
Route::get('/phieuxn', [PhieuXnController::class, 'index'])->name('phieuxns');

Route::get('/phieuxn/add', [PhieuXnController::class, 'create'])->name('benhnhans');

Route::post('/phieuxn/add', [PhieuXnController::class, 'store']);

Route::get('/phieuxn/{id}/delete', [PhieuXnController::class, 'destroy']);

Route::get('/phieuxn/{id}/edit', [PhieuXnController::class, 'edit'])->name('benhnhans');

Route::post('/phieuxn/{id}/edit', [PhieuXnController::class, 'update']);

Route::get('/phieuxn/{id}/detail', [PhieuXnController::class, 'show'])->name('phieuxn');

Route::get('/view/{id}', [PhieuXnController::class, 'viewPhieu']);