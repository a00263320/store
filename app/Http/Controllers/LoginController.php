<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //登入
    function login(Request $request)
    {

        return view('Login.Login');
    }
    //登入API
    function loginapi(Request $request)
    {
        $show = store::all();
        $user = $request['LoginUser'];
        $pass = $request['LoginPassword'];

        if (Auth::attempt(['name' => $user, 'password' => $pass])) {
            return view('User.Store-index', ['store' => $show]);
        }
        return view('Login.LoginFalse');
    }

    //登出
    function loginout(){
        Auth::logout();
        return view('Login.Loginout');
    }



    //註冊
    function sign(){
        return view('Login.Sign');
    }

    function signapi(Request $request)
    {
        User::create([
            'name' => $request['SignUser'],
            //bcrypt->使密碼到資料庫的時候顯示亂碼
            'password' => bcrypt($request['SignPassword']),
            'email' => $request['SignEmail']
        ]);
        return view('Login.Signsuc');
    }

}
