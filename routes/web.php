<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MountainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/mountain', [MountainController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

//登録処理
Route::post('/register',[RegisterController::class, 'store']);

/*
Route::prefix('auth')->group(function () {
    Route::get('twitter', 'AuthController@login');
    Route::get('twitter/callback', 'AuthController@callback');
});
*/
Route::prefix('auth')->group(function () {
    Route::get('/twitter', [AuthController::class, 'login']);
    Route::get('/twitter/callback', [AuthController::class, 'callback']);
    Route::get('/twitter/logout', [AuthController::class, 'logout']);
});
