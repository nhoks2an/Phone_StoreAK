<?php

namespace App\Http\Controllers;

use App\Models\Hang;
use App\Http\Requests\StoreHangRequest;
use App\Http\Requests\UpdateHangRequest;

class HangController extends Controller
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
     * @param  \App\Http\Requests\StoreHangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function show(Hang $hang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function edit(Hang $hang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHangRequest  $request
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHangRequest $request, Hang $hang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hang $hang)
    {
        //
    }
}
