<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\HieuNangPin;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

class HieuNangPinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsthieunangpin = HieuNangPin::all();
        foreach($lsthieunangpin as $hieunangpin){

        }
        return view('hieunangpin.index',['lsthieunangpin'=>$lsthieunangpin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hieunangpin.them');
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
                'tenhieunang' => 'required',
            ],
            [
                'tenhieunang.required' => 'Tên Hiệu Năng Không Được Bỏ Trống',
            ]
        );
        $hieunangpin = new HieuNangPin();
        $hieunangpin->fill([
            'tenhieunang'=>$request->input('tenhieunang'),
            'trangthai'=>'Hiển thị',
        ]);
        $hieunangpin->save();
        return Redirect::route('hieunangpin.index',['hieunangpin'=>$hieunangpin]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HieuNangPin  $hieuNangPin
     * @return \Illuminate\Http\Response
     */
    public function show(HieuNangPin $hieuNangPin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HieuNangPin  $hieuNangPin
     * @return \Illuminate\Http\Response
     */
    public function edit(HieuNangPin $hieuNangPin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHieuNangPinRequest  $request
     * @param  \App\Models\HieuNangPin  $hieuNangPin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHieuNangPinRequest $request, HieuNangPin $hieuNangPin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HieuNangPin  $hieuNangPin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HieuNangPin::find($id)->delete();
        return Redirect::route('hieunangpin.index');
    }
}
