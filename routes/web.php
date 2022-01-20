<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
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
Route::get('/my-account-search', [UserController::class, 'index']);
Route::get('/guest-search', [GuestController::class, 'index']);



//業者  登入/登出
Route::get('/my-account', [LoginController::class, 'login']);
Route::post('/my-account-api', [LoginController::class, 'loginapi']);
Route::get('/my-account-loginout', [LoginController::class, 'loginout']);
//註冊API
Route::post('/my-account-sign-api', [LoginController::class, 'signapi']);


//會員  登入/登出
Route::get('/guest-login', [GuestLoginController::class, 'login']);
Route::post('/guest-login-api', [GuestLoginController::class, 'loginapi']);
Route::get('/guest-loginout', [GuestLoginController::class, 'loginout']);
//註冊API
Route::post('/guest-login-sign-api', [GuestLoginController::class, 'signapi']);



Route::group(['middleware' => 'auth'], function (){
    //賣家後臺頁面
    Route::resource('my-account-user', UserController::class);
    //買家頁面
    Route::resource('/guest', GuestController::class);
});



//  01/18  資料庫一對一
Route::get('/test', function (Request $request) {
    //$自定義參數 = 資料庫::with('資料庫1', '資料庫二')->get();
    $user = User::with('role', 'level')->get();

    return $user;

});
