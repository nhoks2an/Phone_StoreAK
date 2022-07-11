<?php

namespace App\Http\Controllers;

use App\Models\tbl_social;
use App\Http\Requests\Storetbl_socialRequest;
use App\Http\Requests\Updatetbl_socialRequest;

class TblSocialController extends Controller
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
     * @param  \App\Http\Requests\Storetbl_socialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetbl_socialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_social  $tbl_social
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_social $tbl_social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_social  $tbl_social
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_social $tbl_social)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetbl_socialRequest  $request
     * @param  \App\Models\tbl_social  $tbl_social
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetbl_socialRequest $request, tbl_social $tbl_social)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_social  $tbl_social
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_social $tbl_social)
    {
        //
    }
}
