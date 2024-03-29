<?php

namespace App\Http\Controllers;

use App\Models\Quan;
use App\Http\Requests\StoreQuanRequest;
use App\Http\Requests\UpdateQuanRequest;

class QuanController extends Controller
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
     * @param  \App\Http\Requests\StoreQuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quan  $quan
     * @return \Illuminate\Http\Response
     */
    public function show(Quan $quan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quan  $quan
     * @return \Illuminate\Http\Response
     */
    public function edit(Quan $quan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuanRequest  $request
     * @param  \App\Models\Quan  $quan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuanRequest $request, Quan $quan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quan  $quan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quan $quan)
    {
        //
    }
}
