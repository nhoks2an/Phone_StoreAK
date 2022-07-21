<?php

namespace App\Http\Controllers;

use App\Models\MauSac;
use App\Models\mapping;
use App\Models\Post;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class MauSacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstmausac = MauSac::orderBy('created_at','DESC')->search()->paginate(1);
        foreach($lstmausac as $mauSac){
         
        }
        return view('mau.index',['lstmausac'=>$lstmausac]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('mau.themmau');
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
                'tenmau' => 'required |unique:mau_sacs,tenmau',
            ],
            [
                'tenmau.required' => 'Màu Sắc Không Được Bỏ Trống',
                'tenmau.unique' => 'Tên Màu Đã Tồn Tại',
            ]
        );
        $mauSac = new MauSac();
        $mauSac->fill([
            'tenmau'=>$request->input('tenmau'),
            'hienthi'=>'1',
        ]);
        $mauSac->save();
        return Redirect::route('mausac.index',['mausac'=>$mauSac])->with('message','Thêm Màu Sắc Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function show(MauSac $mauSac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function edit(MauSac $mauSac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMauSacRequest  $request
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMauSacRequest $request, MauSac $mauSac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MauSac  $mauSac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $mau_id = $request->input('xoamau');
        $mau_id = MauSac::find($mau_id);
        $mau_id->delete();
        return Redirect::route('mausac.index')->with('message','Xóa Màu Sắc Thành Công');
       
    }
}