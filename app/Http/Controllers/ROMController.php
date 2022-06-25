<?php

namespace App\Http\Controllers;

use App\Models\ROM;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class ROMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstrom = ROM::all();
        foreach($lstrom as $rOM){
         
        }
        return view('rom.index',['lstrom'=>$lstrom]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('rom.them_rom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'sorom' => 'required',
            ],
            [
                'sorom.required' => 'Số ROM Không Được Bỏ Trống',
            ]
        );
        $rOM = new ROM();
        $rOM->fill([
            'sorom'=>$request->input('sorom'),
            'trangthai'=>'Hiển thị',
        ]);
        $rOM->save();
        return Redirect::route('ROM.index',['ROM'=>$rOM]);
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
    public function destroy($id)
    {
        ROM::find($id)->delete();
        return Redirect::route('ROM.index');
    }
}
