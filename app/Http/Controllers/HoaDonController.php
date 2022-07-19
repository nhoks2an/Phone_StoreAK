<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\Trangthaihd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoaDon=HoaDon::orderBy('created_at','DESC')->where('trangthai',1)->search()->paginate(1);
        return view('hoadon.index',['hoadon'=>$hoaDon]);
    }
    public function indexduyet()
    {
        $hoaDon=HoaDon::orderBy('created_at','DESC')->where('trangthai',2)->search()->paginate(1);
        return view('hoadon.index',['hoadon'=>$hoaDon]);
    }
    public function indexvanchuyen()
    {
        $hoaDon=HoaDon::orderBy('created_at','DESC')->where('trangthai',3)->search()->paginate(1);
        return view('hoadon.index',['hoadon'=>$hoaDon]);
    }
    public function indexgiao()
    {
        $hoaDon=HoaDon::orderBy('created_at','DESC')->where('trangthai',4)->search()->paginate(1);
        return view('hoadon.index',['hoadon'=>$hoaDon]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHoaDonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function show(HoaDon $hoaDon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function edit(HoaDon $hoaDon)
    {
        //
    }
    public function sua(Request $request)
    {
        $hoaDon=HoaDon::where('id',$request->idhd)->first();
        $trangthaihd=Trangthaihd::all();
        return view('hoadon.sua',['hoadon'=>$hoaDon,'trangthaihd'=>$trangthaihd]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHoaDonRequest  $request
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function duyet(Request $request)
    {
        $hoaDon=HoaDon::where('id',$request->id_hd)->first();
        $hoaDon->fill([
            'trangthai'=>$request->trangthaihd,
        ]);
        $hoaDon->save();
        if($request->trangthaihd==1)
        {
            return Redirect::route('hoadon.index');
        }
        if($request->trangthaihd==2)
        {
            return Redirect::route('hoadon.indexduyet');
        }
        if($request->trangthaihd==3)
        {
            return Redirect::route('hoadon.indexvanchuyen');
        }
        return Redirect::route('hoadon.indexgiao');
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HoaDon  $hoaDon
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoaDon $hoaDon)
    {
        //
    }
}