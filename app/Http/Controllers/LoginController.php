<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request)
    {

        return view('Login.Login');
    }

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

    function sign(){
        return view('Login.Sign');
    }

    function signapi(Request $request)
    {
        User::create([
            'name' => $request['SignUser'],
            //bcrypt->使密碼到資料庫的時候顯示亂碼
            'password' => bcrypt($request['SignPassword'])
        ]);
        return view('Login.Signsuc');
    }

}
