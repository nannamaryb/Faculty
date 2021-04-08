<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\faculty_controller;

use App\Http\Controllers\student_controller;

use App\Http\Controllers\bus_controller;

use App\Http\Controllers\book_controller;

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

Route::get('/', [faculty_controller::class,'create']);

Route::get('/student',[student_controller::class,'create']);

Route::get('/bus',[bus_controller::class,'create']);

Route::get('/book',[book_controller::class,'create']);

Route::post('/facultyread',[faculty_controller::class,'store']);

Route::post('/studentread',[student_controller::class,'store']);

Route::post('/busread',[bus_controller::class,'store']);

Route::post('/bookread',[book_controller::class,'store']);
