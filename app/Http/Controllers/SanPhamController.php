<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\RAM;
use App\Models\ROM;
use App\Models\ThietKe;
use App\Models\LoaiSanPham;
use App\Models\HeDieuHanh;
use App\Models\TinhNangDB;
use App\Models\ManHinh;
use App\Models\MauSac;
use App\Models\Hang;
use App\Models\HieuNangPin;
use App\Models\Camera;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class SanPhamController extends Controller
{
    protected function fixImage(SanPham $sanPham)
    {
        if(Storage::disk('public')->exists($sanPham->hinhanh)){
            $sanPham->hinhanh = Storage::url($sanPham->hinhanh);
        }else{
            $sanPham->hinhanh = '/images/noimage.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstsanpham = SanPham::all();
        foreach($lstsanpham as $sanPham)
        {
            $this->fixImage($sanPham);
        }
        return view('sanpham.index',['lstsanpham'=>$lstsanpham]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstcamera = Camera::all();
        $lstmanhinh = ManHinh::all();
        $lstram = RAM::all();
        $lstrom = ROM::all();
        $lsthedieuhanh = HeDieuHanh::all();
        $lstloai = LoaiSanPham::all();
        $lsthieunangpin = HieuNangPin::all();
        $lsttinhnangdb = TinhNangDB::all();
        $lstmausac = MauSac::all();
        $lstthietke = ThietKe::all();
        return view('sanpham.themmoi_sp',['lstcamera'=>$lstcamera,'lstmanhinh'=>$lstmanhinh,'lstram'=>$lstram,'lstrom'=>$lstrom,
       'lsthedieuhanh'=>$lsthedieuhanh,'lsttinhnangdb'=>$lsttinhnangdb,'lstmausac'=>$lstmausac,'lstloai'=>$lstloai,'lsthieunangpin'=>$lsthieunangpin,'lstthietke'=>$lstthietke]);
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
                'tensanpham' => 'required',
                'hinhanh' => 'required',
                'mota' => 'required',
                'giacu' => 'required',
                'giamoi' => 'required',
                 
            ],
            [
                'tensanpham.required' => 'Tên Sản Phẩm Không Được Bỏ Trống',
                'hinhanh.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'mota.required' => 'Mô Tả Ảnh Không Được Bỏ Trống',
                'giacu.required' => 'Giá Bán Không Được Bỏ Trống',
                'giamoi.required' => 'Giá Mới Không Được Bỏ Trống',
                'giamoi' => 'required', 'soluong' => 'required',
                'soluong.required' => 'Số Lượng Không Được Bỏ Trống',

            ]
        );
        $sanPham = new SanPham();
        $sanPham->fill([
            'tensanpham'=>$request->input('tensanpham'),
            'hinhanh'=>'',
            'mota'=>$request->input('mota'),
            'giacu'=>$request->input('giacu'),
            'giamoi'=>$request->input('giamoi'),
            'id_camera'=>$request->input('id_camera'),
            'id_ram'=>$request->input('id_ram'),
            'id_rom'=>$request->input('id_rom'),
            'id_manhinh'=>$request->input('id_manhinh'),
            'id_tinhnangdb'=>$request->input('id_tinhnangdb'),
            'id_thietke'=>$request->input('id_thietke'),
            'id_hieunangpin'=>$request->input('id_hieunangpin'),
            'id_mau'=>$request->input('id_mau'),
            'id_hedieuhanh'=>$request->input('id_hedieuhanh'),
            'id_thietke'=>$request->input('id_thietke'),
            'id_danhgia'=>'5',
            'soluong'=>$request->input('soluong'),
            'id_loaisp'=>$request->input('id_loai'),
            'hienthi'=>'1',
        ]);
        $sanPham->save();
        if($request->hasFile('hinhanh')){
            $sanPham->hinhanh = $request->file('hinhanh')->store('images/sanPham/'.$sanPham->id,'public');
        }
        $sanPham->save();
        return Redirect::route('sanPham.index',['sanPham'=>$sanPham]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        $lstcamera = Camera::all();
        $lstmanhinh = ManHinh::all();
        $lstram = RAM::all();
        $lstrom = ROM::all();
        $lsthedieuhanh = HeDieuHanh::all();
        $lstloai = LoaiSanPham::all();
        $lsthieunangpin = HieuNangPin::all();
        $lsttinhnangdb = TinhNangDB::all();
        $lstmausac = MauSac::all();
        $lstthietke = ThietKe::all();
        return view('sanpham.sua_sp',['sanPham'=>$sanPham,'lstcamera'=>$lstcamera,'lstmanhinh'=>$lstmanhinh,'lstram'=>$lstram,'lstrom'=>$lstrom,
       'lsthedieuhanh'=>$lsthedieuhanh,'lsttinhnangdb'=>$lsttinhnangdb,'lstmausac'=>$lstmausac,'lstloai'=>$lstloai,'lsthieunangpin'=>$lsthieunangpin,'lstthietke'=>$lstthietke]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(SanPham $sanPham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SanPham $sanPham)
    {
        $validatedData = $request->validate(
            [
                'tensanpham' => 'required',
                'hinhanh' => 'required',
                'mota' => 'required',
                'giacu' => 'required',
                'giamoi' => 'required', 'soluong' => 'required',
                 
            ],
            [
                'tensanpham.required' => 'Tên Sản Phẩm Không Được Bỏ Trống',
                'hinhanh.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'mota.required' => 'Mô Tả Ảnh Không Được Bỏ Trống',
                'giacu.required' => 'Giá Bán Không Được Bỏ Trống',
                'giamoi.required' => 'Giá Mới Không Được Bỏ Trống',
                'soluong.required' => 'Số Lượng Không Được Bỏ Trống',

            ]
        );
        if($request->hasFile('hinhanh'))
        {
            $sanPham->hinhanh = $request->file('hinhanh')->store('images/sanPham/'.$sanPham->id,'public');
        }
        $sanPham->fill([
            'tensanpham'=>$request->input('tensanpham'),
            'mota'=>$request->input('mota'),
            'giacu'=>$request->input('giacu'),
            'giamoi'=>$request->input('giamoi'),
            'id_camera'=>$request->input('id_camera'),
            'id_ram'=>$request->input('id_ram'),
            'id_rom'=>$request->input('id_rom'),
            'id_manhinh'=>$request->input('id_manhinh'),
            'id_tinhnangdb'=>$request->input('id_tinhnangdb'),
            'id_thietke'=>$request->input('id_thietke'),
            'id_hieunangpin'=>$request->input('id_hieunangpin'),
            'id_mau'=>$request->input('id_mau'),
            'id_hedieuhanh'=>$request->input('id_hedieuhanh'),
            'id_thietke'=>$request->input('id_thietke'),
            'id_danhgia'=>'5',
            'soluong'=>$request->input('soluong'),
            'id_loaisp'=>$request->input('id_loai'),
            'hienthi'=>'1',
        ]);
        $sanPham->save();
        return Redirect::route('sanPham.show',['sanPham'=>$sanPham]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SanPham::find($id)->delete();
        return Redirect::route('sanPham.index');
    }

}
