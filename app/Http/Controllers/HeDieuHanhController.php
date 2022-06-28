<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\HeDieuHanh;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

class HeDieuHanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsthedieuhanh = HeDieuHanh::all();
        foreach($lsthedieuhanh as $hedieuhanh){

        }
        return view('hedieuhanh.index',['lsthedieuhanh'=>$lsthedieuhanh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hedieuhanh.them_hedieuhanh');
    }

    /**
     * Store a newly created resource in storage.
     *
     *  @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tenhedieuhanh' => 'required',
            ],
            [
                'tenhedieuhanh.required' => 'Tên Hệ Điều Hành Không Được Bỏ Trống',
            ]
        );
        $hedieuhanh = new HeDieuHanh();
        $hedieuhanh->fill([
            'tenhedieuhanh'=>$request->input('tenhedieuhanh'),
            'hienthi'=>'1',
        ]);
        $hedieuhanh->save();
        return Redirect::route('hedieuhanh.index',['hedieuhanh'=>$hedieuhanh]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeDieuHanh  $heDieuHanh
     * @return \Illuminate\Http\Response
     */
    public function show(HeDieuHanh $heDieuHanh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeDieuHanh  $heDieuHanh
     * @return \Illuminate\Http\Response
     */
    public function edit(HeDieuHanh $heDieuHanh)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
      * @param \Illuminate\Http\Request  $request
     * @param  \App\Models\HeDieuHanh  $heDieuHanh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeDieuHanh $heDieuHanh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeDieuHanh  $heDieuHanh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HeDieuHanh::find($id)->delete();
        return Redirect::route('hedieuhanh.index');
    }
}
