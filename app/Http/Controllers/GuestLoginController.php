<?php

namespace App\Http\Controllers;

use App\Models\guest;
use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestLoginController extends Controller
{
    //登入
    function login(Request $request)
    {
        return view('Guest.Login');
    }


    //登入API
    function loginapi(Request $request)
    {
        $guest = store::all();
        $user = $request['GTL_user'];
        $pass = $request['GTL_password'];

        if (Auth::attempt(['name' => $user, 'password' => $pass])){
            return view('Guest.Store-index', ['guest' => $guest]);
        }
        return view('Guest.LoginFalse');
    }

    //登出
    function loginout(){
        Auth::logout();
        return view('Login.GuestLoginOut');
    }


    //註冊
    function sign()
    {
        return view('Guest.Sign');
    }

    //註冊API
    function signapi(Request $request)
    {
        guest::create([
            'name' => $request['GTS_user'],
            'password' => bcrypt($request['GTS_password']),
            'email' => $request['GTS_email']
        ]);
        return view('Guest.Signsuc');
    }
}
