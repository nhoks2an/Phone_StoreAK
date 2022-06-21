<?php

namespace App\Http\Controllers;

use App\Models\GioiThieu;
use App\Http\Requests\StoreGioiThieuRequest;
use App\Http\Requests\UpdateGioiThieuRequest;

class GioiThieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreGioiThieuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGioiThieuRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGioiThieuRequest  $request
     * @param  \App\Models\GioiThieu  $gioiThieu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGioiThieuRequest $request, GioiThieu $gioiThieu)
    {
        //
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
