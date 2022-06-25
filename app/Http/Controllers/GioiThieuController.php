<?php

namespace App\Http\Controllers;

use App\Models\GioiThieu;
use App\Http\Requests\StoreGioiThieuRequest;
use App\Http\Requests\UpdateGioiThieuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class GioiThieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gioiThieu = GioiThieu::all();
        foreach($gioiThieu as $gioiThieu){
         
        }
        return view('gioithieu.index',['gioiThieu'=>$gioiThieu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('gioithieu.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGioiThieuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gioiThieu = new GioiThieu();
        $gioiThieu->fill([
            'tieude'=>$request->input('tieude'),
            'noidung'=>$request->input('content'),
            'trangthai'=>'Hiển thị',
        ]);
        $gioiThieu->save();
        return Redirect::route('gioithieu.index',['gioiThieu'=>$gioiThieu]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function show(GioiThieu $gioiThieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function edit(GioiThieu $gioiThieu)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGioiThieuRequest  $request
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GioiThieu $gioiThieu)
    {
        $gioiThieu->fill([
            'tieude'=>$request->input('tieude'),
            'noidung'=>$request->input('content'),
            'trangthai'=>'Hiển thị',
        ]);
        $gioiThieu->save();
        return Redirect::route('gioithieu.index',['gioiThieu'=>$gioiThieu]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(GioiThieu $gioiThieu)
    {
        //
    }
}