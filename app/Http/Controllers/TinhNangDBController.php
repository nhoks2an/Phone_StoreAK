<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\TinhNangDB;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class TinhNangDBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsttinhnangdb = TinhNangDB::all();
        foreach( $lsttinhnangdb as $tinhnangdb){

        }
        return view('tinhnangdb.index',['lsttinhnangdb'=>$lsttinhnangdb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tinhnangdb.them_tinhnangdb');
    }

    /**
     * Store a newly created resource in storage.
     *
      *@param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tentinhnang' => 'required',
            ],
            [
                'tentinhnang.required' => 'Tên Tính Năng Không Được Bỏ Trống',
            ]
        );
        $tinhnangdb = new TinhNangDB();
        $tinhnangdb->fill([
            'tentinhnang'=>$request->input('tentinhnang'),
            'trangthai'=>'Hiển thị',
        ]);
        $tinhnangdb->save();
        return Redirect::route('tinhnangdb.index',['tinhnangdb'=>$tinhnangdb]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function show(TinhNangDB $tinhNangDB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function edit(TinhNangDB $tinhNangDB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTinhNangDBRequest  $request
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTinhNangDBRequest $request, TinhNangDB $tinhNangDB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TinhNangDB  $tinhNangDB
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TinhNangDB::find($id)->delete();
        return Redirect::route('tinhnangdb.index');
    }
}
