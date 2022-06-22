<?php

namespace App\Http\Controllers;

use App\Models\RAM;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;
class RAMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstram = RAM::all();
        foreach($lstram as $rAM){
         
        }
        return view('ram.index',['lstram'=>$lstram]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('ram.them_ram');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rAM = new RAM();
        $rAM->fill([
            'soram'=>$request->input('soram'),
            'trangthai'=>'Hiển thị',
        ]);
        $rAM->save();
        return Redirect::route('RAM.index',['RAM'=>$rAM]);
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
        $rAM->delete();
        return Redirect::route('RAM.index');
    }
}