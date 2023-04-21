<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;


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


Route::get('/team', [TeamController::class, 'index'])->name('teams');

Route::get('/player/{id}/show', [PlayerController::class, 'show'])->name('players');

Route::get('/player/{id}/add', [PlayerController::class, 'create']);

Route::post('/player/{id}/add', [PlayerController::class, 'store']);

Route::get('/player/{id}/delete', [PlayerController::class, 'destroy']);





