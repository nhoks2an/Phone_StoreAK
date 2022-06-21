<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use App\Http\Requests\StoreTinTucRequest;
use App\Http\Requests\UpdateTinTucRequest;

class TinTucController extends Controller
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
     * @param  \App\Http\Requests\StoreTinTucRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTinTucRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function show(TinTuc $tinTuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function edit(TinTuc $tinTuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTinTucRequest  $request
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTinTucRequest $request, TinTuc $tinTuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(TinTuc $tinTuc)
    {
        //
    }
}
