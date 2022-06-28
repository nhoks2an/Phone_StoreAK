<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\LoaiSanPham;
use App\Models\Hang;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\DB;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstloai = LoaiSanPham::all();
        foreach($lstloai as $loaiSanPham){
         
        }
        return view('loai.index',['lstloai'=>$lstloai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsthang=Hang::all();
       return view('loai.them_loai',['lsthang'=>$lsthang]);
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
                'tenloaisp' => 'required',
            ],
            [
                'tenloaisp.required' => 'Tên Loại Sản Phẩm Không Được Bỏ Trống',
            ]
        );
        $loaiSanPham= new LoaiSanPham();
        $loaiSanPham->fill([
            'tenloaisp'=>$request->input('tenloaisp'),
            'id_hang'=>$request->input('tenhang'),
            'hienthi'=>'1',
        ]);
        $loaiSanPham->save();
        return Redirect::route('loaiSanPham.index',['loaiSanPham'=>$loaiSanPham]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSanPham $loaiSanPham)
    {
        $lsthang = Hang::all();
        return view('loai.sua_loai',['loaiSanPham'=>$loaiSanPham],['lsthang'=>$lsthang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSanPham $loaiSanPham)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSanPham $loaiSanPham)
    {
        $validatedData = $request->validate(
            [
                'tenloaisp' => 'required',
            ],
            [
                'tenloaisp.required' => 'Tên Loại Sản Phẩm Không Được Bỏ Trống',
            ]
        );
        $loaiSanPham->fill([
            'tenloaisp'=>$request->input('tenloaisp'),
            'id_hang'=>$request->input('tenhang'),
            'hienthi'=>'1',
        ]);
        $loaiSanPham->save();
        return Redirect::route('loaiSanPham.index',['loaiSanPham'=>$loaiSanPham]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LoaiSanPham::find($id)->delete();
        return Redirect::route('loaiSanPham.index');
    }
}
