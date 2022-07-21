<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\ManHinh;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

class ManHinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstmanhinh = ManHinh::orderBy('created_at','DESC')->search()->paginate(1);
        foreach($lstmanhinh as $manhinh){

        }
        return view('manhinh.index',['lstmanhinh'=>$lstmanhinh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manhinh.them_manhinh');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'thongso' => 'required |unique:man_hinhs,thongso',
            ],
            [
                'thongso.required' => 'Thống Số Màn Hình Không Được Bỏ Trống',
                'thongso.unique' => 'Thống Số Màn Hình Hành Đã Tồn Tại',
            ]
        );
        $manhinh = new ManHinh();
        $manhinh->fill([
            'thongso'=>$request->input('thongso'),
            'hienthi'=>'1',
        ]);
        $manhinh->save();
        return Redirect::route('manhinh.index',['manhinh'=>$manhinh])->with('message','Thêm Màn Hình Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManHinh  $manHinh
     * @return \Illuminate\Http\Response
     */
    public function show(ManHinh $manHinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManHinh  $manHinh
     * @return \Illuminate\Http\Response
     */
    public function edit(ManHinh $manHinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateManHinhRequest  $request
     * @param  \App\Models\ManHinh  $manHinh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManHinhRequest $request, ManHinh $manHinh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManHinh  $manHinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $count=SanPham::where('id_manhinh',$id);
        if($count!=null)
        {
            return Redirect::route('manhinh.index')->with('fail','Xóa Màn Hình Thất Bại!');
        }
        $manhinh_id = $request->input('xoamanhinh');
        $manhinh_id = ManHinh::find($manhinh_id);
        $manhinh_id->delete();
        return Redirect::route('manhinh.index')->with('message','Xóa Màn Hình Thành Công');
    }
}