<?php

use Illuminate\Support\Facades\Route;
use App\Models\Raihan;
use App\Http\Controllers\RaihanController;

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

Route::get('/', [RaihanController::class,'index']);
Route::get('/', [RaihanController::class,'home']);
Route::get('/about',[RaihanController::class,'about']);
Route::get('/comment',[RaihanController::class,'comment']);
Route::get('/selengkapnya', [RaihanController::class,'selengkapnya']);


