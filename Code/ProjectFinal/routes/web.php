<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenhNhanController;

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

Route::get('/', [BenhNhanController::class, 'index'])->name('benhnhans');

Route::get('/benhnhan/add', [BenhNhanController::class, 'create']);

Route::post('/benhnhan/add', [BenhNhanController::class, 'store']);

Route::get('/benhnhan/{MaBN}/edit', [BenhNhanController::class, 'show'])->name('benhnhan');

Route::post('/benhnhan/{MaBN}/edit', [BenhNhanController::class, 'edit']);

Route::get('/benhnhan/{MaBN}/delete', [BenhNhanController::class, 'destroy']);