<?php

namespace App\Http\Controllers;

use App\Models\ChinhSach;
use App\Http\Requests\StoreChinhSachRequest;
use App\Http\Requests\UpdateChinhSachRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class ChinhSachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstcs = ChinhSach::all();
        foreach($lstcs as $cs){
        //  $this->fixImage($tt);
        }
        return view('chinhsach.index',['lstcs'=>$lstcs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chinhsach.themcs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChinhSachRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tieude' => 'required',
                'content' => 'required',
            ],
            [
                'tieude.required' => 'Tiêu Đề Không Được Bỏ Trống',
                'content.required' => 'Nội Dung Không Được Bỏ Trống',
            ]
        );
        $chinhSach = new ChinhSach();
        $chinhSach->fill([
            'tieude'=>$request->input('tieude'),
            'noidung'=>$request->input('content'),
            'trangthai'=>'Hiển thị',
        ]);
        $chinhSach->save();
        return Redirect::route('chinhSach.index',['chinhSach'=>$chinhSach]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChinhSach  $chinhSach
     * @return \Illuminate\Http\Response
     */
    public function show(ChinhSach $chinhSach)
    {
        return View('chinhsach.suacs',['chinhSach'=>$chinhSach]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChinhSach  $chinhSach
     * @return \Illuminate\Http\Response
     */
    public function edit(ChinhSach $chinhSach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChinhSachRequest  $request
     * @param  \App\Models\ChinhSach  $chinhSach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChinhSach $chinhSach)
    {
        $validatedData = $request->validate(
            [
                'tieude' => 'required',
                'content' => 'required',
            ],
            [
                'tieude.required' => 'Tiêu Đề Không Được Bỏ Trống',
                'content.required' => 'Nội Dung Không Được Bỏ Trống',
            ]
        );
        $chinhSach->fill([
            'tieude'=>$request->input('tieude'),
            'noidung'=>$request->input('content'),
            'trangthai'=>'Hiển thị',
        ]);
        $chinhSach->save();
        return Redirect::route('chinhSach.index',['chinhSach'=>$chinhSach]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChinhSach  $chinhSach
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChinhSach::find($id)->delete();
        return Redirect::route('chinhSach.index');
    }
}