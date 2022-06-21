<?php

namespace App\Http\Controllers;

use App\Models\ROM;
use App\Http\Requests\StoreROMRequest;
use App\Http\Requests\UpdateROMRequest;

class ROMController extends Controller
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
     * @param  \App\Http\Requests\StoreROMRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreROMRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ROM  $rOM
     * @return \Illuminate\Http\Response
     */
    public function show(ROM $rOM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ROM  $rOM
     * @return \Illuminate\Http\Response
     */
    public function edit(ROM $rOM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateROMRequest  $request
     * @param  \App\Models\ROM  $rOM
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateROMRequest $request, ROM $rOM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ROM  $rOM
     * @return \Illuminate\Http\Response
     */
    public function destroy(ROM $rOM)
    {
        //
    }
}
