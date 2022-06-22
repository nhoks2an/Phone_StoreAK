<?php

namespace App\Http\Controllers;

use App\Models\MauSac;
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
        $lstmausac = MauSac::all();
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
        $mauSac = new MauSac();
        $mauSac->fill([
            'tenmau'=>$request->input('tenmau'),
            'trangthai'=>'Hiển thị',
        ]);
        $mauSac->save();
        return Redirect::route('mausac.index',['mausac'=>$mauSac]);
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
    public function destroy(MauSac $mauSac)
    {
        $mauSac->delete();
        return Redirect::route('mausac.index');
       
    }
}