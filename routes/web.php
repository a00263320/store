<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//商品總頁面
Route::resource('api', ApiController::class);
//搜尋
Route::get('/search', [ApiController::class, 'index']);

//登入/登出
Route::get('/my-account', [LoginController::class, 'login']);
Route::post('my-account-api', [LoginController::class, 'loginapi']);
Route::get('my-account-loginout', [LoginController::class, 'loginout']);

//註冊API
Route::post('/my-account-sign-api', [LoginController::class, 'signapi']);

Route::group(['middleware' => 'auth'], function (){
    //使用者後臺頁面
    Route::resource('api-user', UserController::class);
});
