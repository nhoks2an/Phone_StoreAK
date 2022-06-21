<?php

namespace App\Http\Controllers;

use App\Models\Phuong;
use App\Http\Requests\StorePhuongRequest;
use App\Http\Requests\UpdatePhuongRequest;

class PhuongController extends Controller
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
     * @param  \App\Http\Requests\StorePhuongRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhuongRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phuong  $phuong
     * @return \Illuminate\Http\Response
     */
    public function show(Phuong $phuong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phuong  $phuong
     * @return \Illuminate\Http\Response
     */
    public function edit(Phuong $phuong)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhuongRequest  $request
     * @param  \App\Models\Phuong  $phuong
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhuongRequest $request, Phuong $phuong)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phuong  $phuong
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phuong $phuong)
    {
        //
    }
}
