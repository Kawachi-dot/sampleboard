<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HelloController2;
use App\Http\Controllers\PeopleController;
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

Route::get('/index', [HelloController::class, 'info']);
Route::get('/index2', [HelloController::class, 'info2']);
Route::get('/index3', [HelloController::class, 'info3']);

//Homework1-1
Route::get('/score', [HelloController2::class, 'score']);
Route::post('/score/result', [HelloController2::class, 'scoreresult']);

//Homework1-2
Route::get('/value_input',[HelloController2::class, 'value_input']);
Route::post('/value_input/sum',[HelloController2::class, 'value_sum']);

//Homework1-3
Route::get('/id',[HelloController2::class, 'id_input']);
Route::post('/id/result',[HelloController2::class, 'id_result']);

//people_table
Route::get('/input',[PeopleController::class, 'input']);
Route::post('/input/result',[PeopleController::class, 'result']);