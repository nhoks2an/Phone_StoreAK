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
        $gioithieu = GioiThieu::all();
        foreach($gioithieu as $gioithieu){
         
        }
        return view('gioithieu.index',['gioithieu'=>$gioithieu]);
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
     * @param  \App\Http\Requests\StoreGioiThieuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function show(GioiThieu $gioithieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function edit(GioiThieu $gioithieu)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGioiThieuRequest  $request
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GioiThieu $gioithieu)
    {
        $validatedData = $request->validate(
            [
                'tieude' => 'required',
            
            ],
            [
                'tieude.required' => 'Tiêu Đề Không Được Bỏ Trống',
            ]
        );
        $gioithieu->fill([
            'tieude'=>$request->input('tieude'),
            'noidung'=>$request->input('content'),
            'hienthi'=>'1',
        ]);
        $gioithieu->save();
        return Redirect::route('gioithieu.index')->with('message','Cập Nhật Giới Thiệu Thành Công');
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