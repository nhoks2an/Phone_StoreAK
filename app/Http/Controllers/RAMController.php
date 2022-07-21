<?php

namespace App\Http\Controllers;

use App\Models\RAM;
use App\Models\mapping;
use Illuminate\Http\Request;
use App\Http\Controllers\StoreRAMRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class RAMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstram = RAM::orderBy('created_at','DESC')->search()->paginate(5);
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
        $validatedData = $request->validate(
            [
                'soram' => 'required |unique:r_a_m_s,soram',
            ],
            [
                'soram.required' => 'Thông Số RAM Không Được Bỏ Trống',
                'soram.unique' => 'Thông Số RAM Đã Tồn Tại',
            ]
        );
        $rAM = new RAM();
        $rAM->fill([
            'soram'=>$request->input('soram'),
            'hienthi'=>'1',
        ]);
        $rAM->save();
        return Redirect::route('RAM.index',['RAM'=>$rAM])->with('message','Thêm RAM Thành Công');
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
    public function destroy(Request $request)
    {   
        $count=mapping::where('id_ram',$id);
        if($count!=null)
        {
            return Redirect::route('RAM.index')->with('fail','Xóa RAM Thất Bại!');
        }
        RAM::find($id)->delete();
        $ram_id = $request->input('xoaram');
        $ram_id = RAM::find($ram_id);
        $ram_id->delete();
        return Redirect::route('RAM.index')->with('message','Xóa RAM Thành Công');
    }



}