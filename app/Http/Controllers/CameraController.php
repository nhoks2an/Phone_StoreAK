<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use App\Http\Requests\StoreCameraRequest;
use App\Http\Requests\UpdateCameraRequest;

class CameraController extends Controller
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
     * @param  \App\Http\Requests\StoreCameraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCameraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function show(Camera $camera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function edit(Camera $camera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCameraRequest  $request
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCameraRequest $request, Camera $camera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camera $camera)
    {
        //
    }
}
