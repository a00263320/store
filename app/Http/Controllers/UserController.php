<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request['keyword']) {
            $store = store::where('class', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('name', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('price', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('quantity', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('company', 'like', '%' . $request['keyword'] . '%')
                ->orwhere('origin', 'like', '%' . $request['keyword'] . '%')
                ->get();
        } else {
            $store = store::all();
        }
        return view('User.Store-index', ['store' => $store]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('CRUD.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        store::create([
            'class' => $request['creat_class'],
            'name' => $request['creat_name'],
            'photo' => $request['creat_photo'],
            'describe' => $request['creat_describe'],
            'quantity' => $request['creat_quantity'],
            'price' => $request['creat_price'],
            'company' => $request['creat_company'],
            'origin' => $request['creat_origin']
        ]);
        return view('Return.Creat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //給一個字定義參數取得單筆資料陣列
         $store = store::find($id);

         //定義一個參數給前端用=>上方自訂一參數
         return view('User.Store-show', ['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storeup = store::find($id);

        return view('CRUD.Update', ['storeup' => $storeup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reup = store::find($id);
        store::find($id)->update([
            'photo' => $request['update_photo'],
            'class' => $request['update_class'],
            'name' => $request['update_name'],
            'describe' => $request['update_describe'],
            'quantity' => $request['update_quantity'],
            'price' => $request['update_price'],
            'company' => $request['update_company'],
            'origin' => $request['update_origin']
        ]);
        return view('Return.Update', ['reup' => $reup]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = store::find($id)->delete();
        return view('Return.Delete');
    }
}
