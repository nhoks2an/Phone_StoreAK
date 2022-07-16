<?php

namespace App\Http\Controllers;

use App\Models\ThongKe;
use App\Http\Requests\StoreThongKeRequest;
use App\Http\Requests\UpdateThongKeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ThongKeController extends Controller
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
     * @param  \App\Http\Requests\StoreThongKeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThongKeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function show(ThongKe $thongKe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function edit(ThongKe $thongKe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThongKeRequest  $request
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThongKeRequest $request, ThongKe $thongKe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThongKe $thongKe)
    {
        //
    }
}