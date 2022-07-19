<?php

namespace App\Http\Controllers;

use App\Models\Sologan;
use App\Http\Requests\StoreSologanRequest;
use App\Http\Requests\UpdateSologanRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class SologanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sologan = Sologan::all();
        foreach($sologan as $sologan){
         
        }
        return view('sologan.index',['sologan'=>$sologan]);
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
     * @param  \App\Http\Requests\StoreSologanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSologanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sologan  $sologan
     * @return \Illuminate\Http\Response
     */
    public function show(Sologan $sologan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sologan  $sologan
     * @return \Illuminate\Http\Response
     */
    public function edit(Sologan $sologan)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSologanRequest  $request
     * @param  \App\Models\Sologan  $sologan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sologan $sologan)
    {
        $validatedData = $request->validate(
            [
                'tieude' => 'required',
            ],
            [
                'tieude.required' => 'Tiêu Đề Năng Không Được Bỏ Trống',
            ]
        );
        $sologan->fill([
            'tieude'=>$request->input('tieude'),
            'trangthai'=>'1',
        ]);
        $sologan->save();
        return Redirect::route('sologan.index')->with('message','Cập Nhật Sologan Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sologan  $sologan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sologan $sologan)
    {
        //
    }
}