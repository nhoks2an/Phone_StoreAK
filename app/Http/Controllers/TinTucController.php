<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsttt = TinTuc::all();
        foreach($lsttt as $tt){
        //  $this->fixImage($tt);
        }
        return view('tintuc.index',['lsttt'=>$lsttt]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tintuc.them_tinTuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tinTuc = new TinTuc();
        $tinTuc->fill([
            'tieude'=>$request->input('tieude'),
            'hinhanh'=>'abc',
            'mota'=>$request->input('mota'),
            'noidung'=>$request->input('content'),
            'trangthai'=>'Hiển thị',
        ]);
        $tinTuc->save();
        return Redirect::route('tinTuc.index',['tinTuc'=>$tinTuc]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function show(TinTuc $tinTuc)
    {
        return View('tintuc.sua_tintuc',['tinTuc'=>$tinTuc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function edit(TinTuc $tinTuc)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTinTucRequest  $request
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TinTuc $tinTuc)
    {
        $tinTuc->fill([
            'tieude'=>$request->input('tieude'),
            'hinhanh'=>'',
            'mota'=>$request->input('mota'),
            'noidung'=>$request->input('content'),
            'trangthai'=>'Hiển thị',
        ]);
        $tinTuc->save();
        return Redirect::route('tintuc.index',['tinTuc'=>$tinTuc]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TinTuc::find($id)->delete();
        return Redirect::route('tinTuc.index');
    }
}