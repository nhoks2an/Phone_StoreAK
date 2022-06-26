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
    protected function fixImage(TinTuc $tinTuc)
    {
        if(Storage::disk('public')->exists($tinTuc->hinhanh)){
            $tinTuc->hinhanh = Storage::url($tinTuc->hinhanh);
        }else{
            $tinTuc->hinhanh = '/images/noimage.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsttt = TinTuc::all();
        foreach($lsttt as $tt){
            $this->fixImage($tt);
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
        $validatedData = $request->validate(
            [
                'tieude' => 'required',
                'hinhanh' => 'required',
                'mota' => 'required',
                'content' => 'required',
            ],
            [
                'tieude.required' => 'Tiêu Đề Không Được Bỏ Trống',
                'hinhanh.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'mota.required' => 'Mô Tả Không Được Bỏ Trống',
                'content.required' => 'Nội Dung Không Được Bỏ Trống',
            ]
        );
        $tinTuc = new TinTuc();
        $tinTuc->fill([
            'tieude'=>$request->input('tieude'),
            'hinhanh'=>'',
            'mota'=>$request->input('mota'),
            'noidung'=>$request->input('content'),
            'trangthai'=>'Hiển thị',
        ]);
        if($request->hasFile('hinhanh')){
            $tinTuc->hinhanh = $request->file('hinhanh')->store('images/tintuc/'.$tinTuc->id,'public');
        }
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
        if($request->hasFile('hinhanh')){
            $tinTuc->hinhanh = $request->file('hinhanh')->store('images/tintuc/'.$tinTuc->id,'public');
        }
        $tinTuc->fill([
            'tieude'=>$request->input('tieude'),
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