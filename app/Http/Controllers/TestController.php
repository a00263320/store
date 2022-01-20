<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //資料庫一對一
    public function role()
    {
        //return $this->一對一語法(資料庫1::class, '呼叫資料庫1 ID', '讀取資料庫1欄位')
        return $this->hasone(Role::class, 'id', 'role_id');
        // return $this->hasone(Role::class, ['id', 'role_id']);
    }

    public function level()
    {
        //return $this->資料庫一對一語法(資料庫1::class, '呼叫資料庫2 ID', '讀取資料庫2欄位')
        return $this->hasone(level::class, 'id', 'level_id');
    }
}
