<?php

namespace App\Http\Controllers;

use App\Models\ThietKe;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ThietKeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstthietke = ThietKe::orderBy('created_at','DESC')->search()->paginate(1);
        foreach( $lstthietke as $thietke){

        }
        return view('thietke.index',['lstthietke'=>$lstthietke]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thietke.them_thietke');
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
                'ten' => 'required |unique:thiet_kes,ten',
            ],
            [
                'ten.required' => 'Tên Thiết Kế Không Được Bỏ Trống',
                'ten.unique' => 'Tên Thiết Kế Đã Tồn Tại',
            ]
        );
        $thietke= new ThietKe();
        $thietke->fill([
            'ten'=>$request->input('ten'),
            'hienthi'=>'1',
        ]);
        $thietke->save();
        return Redirect::route('thietke.index',['thietke'=>$thietke]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThietKe  $thietKe
     * @return \Illuminate\Http\Response
     */
    public function show(ThietKe $thietKe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThietKe  $thietKe
     * @return \Illuminate\Http\Response
     */
    public function edit(ThietKe $thietKe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThietKeRequest  $request
     * @param  \App\Models\ThietKe  $thietKe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThietKeRequest $request, ThietKe $thietKe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThietKe  $thietKe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ThietKe::find($id)->delete();
        return Redirect::route('thietke.index');
    }
}
