<?php

namespace App\Http\Controllers;

use App\Models\RAM;
use App\Http\Requests\StoreRAMRequest;
use App\Http\Requests\UpdateRAMRequest;

class RAMController extends Controller
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
     * @param  \App\Http\Requests\StoreRAMRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRAMRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RAM  $rAM
     * @return \Illuminate\Http\Response
     */
    public function show(RAM $rAM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RAM  $rAM
     * @return \Illuminate\Http\Response
     */
    public function edit(RAM $rAM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRAMRequest  $request
     * @param  \App\Models\RAM  $rAM
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRAMRequest $request, RAM $rAM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RAM  $rAM
     * @return \Illuminate\Http\Response
     */
    public function destroy(RAM $rAM)
    {
        //
    }
}
