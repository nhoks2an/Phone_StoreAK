<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TinhNangDB;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class TinhNangDBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsttinhnangdb = TinhNangDB::orderBy('created_at','DESC')->search()->paginate(1);
        foreach( $lsttinhnangdb as $tinhnangdb){

        }
        return view('tinhnangdb.index',['lsttinhnangdb'=>$lsttinhnangdb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tinhnangdb.them_tinhnangdb');
    }

    /**
     * Store a newly created resource in storage.
     *
      *@param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tentinhnang' => 'required |unique:tinh_nang_d_b_s,tentinhnang',
            ],
            [
                'tentinhnang.required' => 'Tên Tính Năng Không Được Bỏ Trống',
                'tentinhnang.unique' => 'Tên Tính Năng Đã Tồn Tại',
            ]
        );
        $tinhnangdb = new TinhNangDB();
        $tinhnangdb->fill([
            'tentinhnang'=>$request->input('tentinhnang'),
            'hienthi'=>'1',
        ]);
        $tinhnangdb->save();
        return Redirect::route('tinhnangdb.index',['tinhnangdb'=>$tinhnangdb])->with('message','Thêm Tính Năng Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function show(TinhNangDB $tinhNangDB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function edit(TinhNangDB $tinhNangDB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTinhNangDBRequest  $request
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTinhNangDBRequest $request, TinhNangDB $tinhNangDB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tinhnang_id = $request->input('xoatinhnang');
        $tinhnang_id = TinhNangDB::find($tinhnang_id);
        $tinhnang_id->delete();
      
        return Redirect::route('tinhnangdb.index')->with('message','Xóa Tính Năng Thành Công');
    }
}
