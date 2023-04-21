<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;

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

Route::get('about', function() {
    return view('about');
});

// Route::get('profile/{username}', function($username) {
//     return view('profile', ['user'=>$username]);
// });

Route::get('profile/{username}', [ProfileController::class, 'index']);

Route::get('student/add', [StudentController::class, 'addNewStudent']);

Route::get('student', [StudentController::class, 'getAllStudents']);