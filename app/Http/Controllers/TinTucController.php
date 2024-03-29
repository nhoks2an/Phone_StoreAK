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
        $lsttt = TinTuc::orderBy('created_at','DESC')->search()->paginate(1);
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
                'tieude' => 'required |unique:tin_tucs,tieude',
                'hinhanh' => 'required |image|mimes:jpg,jpeg,png,gif|max:2048',
                'mota' => 'required',
                'content' => 'required',
            ],
            [
                'tieude.required' => 'Tiêu Đề Không Được Bỏ Trống',
                'tieude.unique' => 'Tiêu Đề Đã Tồn Tại',
                'hinhanh.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'mota.required' => 'Mô Tả Không Được Bỏ Trống',
                'content.required' => 'Nội Dung Không Được Bỏ Trống',
                'hinhanh.image' => 'Không Phải File Hình Anh',
                'hinhanh.mimes' => 'Hình Ảnh Không Đúng Định Dạng',
                'hinhanh.max' => 'Kích Thước Quá Lớn',
            ]
        );
        $tinTuc = new TinTuc();
        $tinTuc->fill([
            'tieude'=>$request->input('tieude'),
            'hinhanh'=>'',
            'mota'=>$request->input('mota'),
            'noidung'=>$request->input('content'),
            'hienthi'=>'1',
        ]);
        if($request->hasFile('hinhanh')){
            $tinTuc->hinhanh = $request->file('hinhanh')->store('images/tintuc/'.$tinTuc->id,'public');
        }
        $tinTuc->save();
        return Redirect::route('tinTuc.index',['tinTuc'=>$tinTuc])->with('message','Thêm Tin Tức Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function show(TinTuc $tinTuc)
    {
        $lsttt = TinTuc::all();
        foreach($lsttt as $tt){
            $this->fixImage($tt);
        }
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
        $validatedData = $request->validate(
            [
                'tieude' => 'required |unique:tin_tucs,tieude,' . $tinTuc->id .',id',
              
                'mota' => 'required',
                'content' => 'required',
            ],
            [
                'tieude.required' => 'Tiêu Đề Không Được Bỏ Trống',
                'tieude.unique' => 'Tiêu Đề Đã Tồn Tại',
               
                'mota.required' => 'Mô Tả Không Được Bỏ Trống',
                'content.required' => 'Nội Dung Không Được Bỏ Trống',
            ]
        );
        if($request->hasFile('hinhanh')){
            $tinTuc->hinhanh = $request->file('hinhanh')->store('images/tintuc/'.$tinTuc->id,'public');
        }
        $tinTuc->fill([
            'tieude'=>$request->input('tieude'),
            'mota'=>$request->input('mota'),
            'noidung'=>$request->input('content'),
            'hienthi'=>$request->has('hienthi'),
        ]);
        $tinTuc->save();
        return Redirect::route('tinTuc.index',['tinTuc'=>$tinTuc])->with('message','Cập Nhật Tin Tức Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tintuc_id = $request->input('xoatintuc');
        $tintuc_id = TinTuc::find($tintuc_id);
        $tintuc_id->delete();
     
        return Redirect::route('tinTuc.index')->with('message','Xóa Tin Tức Thành Công');
    }
}