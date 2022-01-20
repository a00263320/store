<?php

namespace App\Http\Controllers;

use App\Models\guest;
use App\Models\store;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //會員登入後畫面
        if ($request['keyword']){
            $guest = store::where('class', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('name', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('price', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('quantity', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('company', 'like', '%' . $request['keyword'] . '%')
            ->orwhere('origin', 'like', '%' . $request['keyword'] . '%')
            ->get();
        } else {
            $guest = store::all();
        }


        return view('Guest.Store-index', ['guest' => $guest]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //建立資料頁面
        return view('Guest.Login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //單一產品頁面
        $guest = store::find($id);

        return view('Guest.Store-show', ['guest' => $guest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
