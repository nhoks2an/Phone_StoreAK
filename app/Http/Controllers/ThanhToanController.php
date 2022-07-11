<?php

namespace App\Http\Controllers;

use App\Models\ThanhToan;
use App\Models\HoaDon;
use App\Models\CTHoaDon;
use App\Models\Cart;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ThanhToanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\StoreThanhToanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
    public function addhd(Request $request)
    {
        $data=$request->all();
        return dd($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThanhToan  $thanhToan
     * @return \Illuminate\Http\Response
     */
    public function show(ThanhToan $thanhToan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThanhToan  $thanhToan
     * @return \Illuminate\Http\Response
     */
    public function edit(ThanhToan $thanhToan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThanhToanRequest  $request
     * @param  \App\Models\ThanhToan  $thanhToan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThanhToanRequest $request, ThanhToan $thanhToan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThanhToan  $thanhToan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThanhToan $thanhToan)
    {
        //
    }
}