<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\store;
use Illuminate\Http\Request;

class ApiController extends Controller
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
        }else{
            $store = store::all();
        }
        return view('Store.Store-index', ['store'=>$store]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        return view('Store.Store-show', ['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
