<?php

namespace App\Http\Controllers;

use App\Models\mapping;
use App\Http\Requests\StoremappingRequest;
use App\Http\Requests\UpdatemappingRequest;

class MappingController extends Controller
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
     * @param  \App\Http\Requests\StoremappingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremappingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mapping  $mapping
     * @return \Illuminate\Http\Response
     */
    public function show(mapping $mapping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mapping  $mapping
     * @return \Illuminate\Http\Response
     */
    public function edit(mapping $mapping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemappingRequest  $request
     * @param  \App\Models\mapping  $mapping
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemappingRequest $request, mapping $mapping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mapping  $mapping
     * @return \Illuminate\Http\Response
     */
    public function destroy(mapping $mapping)
    {
        //
    }
}
