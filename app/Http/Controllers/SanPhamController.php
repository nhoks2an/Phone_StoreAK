<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\RAM;
use App\Models\mapping;
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
use App\Models\HinhAnh;
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
    protected function fixImageab(HinhAnh $hinhanh)
    {
        if(Storage::disk('public')->exists($hinhanh->hinhanh)){
            $hinhanh->hinhanh = Storage::url($hinhanh->hinhanh);
        }else{
            $hinhanh->hinhanh = '/images/noimage.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstsanpham = SanPham::orderBy('created_at','DESC')->search()->paginate(5);
        foreach($lstsanpham as $sanPham)
        {
            $this->fixImage($sanPham);
        }
        return view('sanpham.index',['lstsanpham'=>$lstsanpham]);
    }
// tim kiem sp
    public function timkiemsanpham()
    {
        $lstsanpham = SanPham::orderBy('created_at','DESC')->search()->paginate(8);
        foreach ($lstsanpham as $sanpham) {
            $this->fixImage($sanpham);
        }
        if(isset($_GET['sort_by'])){

            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'tang_dan') {
                $lstsanpham = SanPham::orderBy('giamin', 'ASC')->orderBy('giamax', 'ASC')->paginate(8)->appends(request()->query());
                foreach ($lstsanpham as $sanpham) {
                    $this->fixImage($sanpham);
                }
            } else if ($sort_by == 'giam_dan') {
                $lstsanpham = SanPham::orderBy('giamin', 'DESC')->orderBy('giamax', 'DESC')->paginate(8)->appends(request()->query());
                foreach ($lstsanpham as $sanpham) {
                    $this->fixImage($sanpham);
                }
            } else if ($sort_by == 'kytu_az') {
                $lstsanpham = SanPham::orderBy('tensanpham', 'ASC')->paginate(8)->appends(request()->query());
                foreach ($lstsanpham as $sanpham) {
                    $this->fixImage($sanpham);
                }
            }
            else if ($sort_by == 'kytu_za') {
                $lstsanpham = SanPham::orderBy('tensanpham', 'DESC')->paginate(8)->appends(request()->query());
                foreach ($lstsanpham as $sanpham) {
                    $this->fixImage($sanpham);
                }
            }
        }
        return View('user.timkiem.index',['lstsanpham'=>$lstsanpham]);
    }
    // Abum
    public function indexab($id)
    {
        $sanPham = $id;
        $lsthinhanh = HinhAnh::orderBy('created_at','DESC')->where('id_sanpham','=',$id)->get();
      
        foreach($lsthinhanh as $hinhanh)
        {
            $this->fixImageab($hinhanh);
        }
      
        return view('sanpham.indexab',['lsthinhanh'=>$lsthinhanh,'sanPham'=>$sanPham]);
    }
    // Box chi tiet
    public function indexmp($id)
    {
        $sanPham = $id;
        $lstram = RAM::all();
        $lstrom = ROM::all();
        $lstmausac = MauSac::all();
        $lstspmp = mapping::orderBy('created_at','DESC')->where('id_sanpham','=',$id)->get();
        return view('sanpham.indexmp',['lstram'=>$lstram,'lstrom'=>$lstrom,'lstmausac'=>$lstmausac,'lstspmp'=>$lstspmp,'sanPham'=>$sanPham]);
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
        $lsthedieuhanh = HeDieuHanh::all();
        $lstloai = LoaiSanPham::all();
        $lsthieunangpin = HieuNangPin::all();
        $lsttinhnangdb = TinhNangDB::all();
        $lstthietke = ThietKe::all();
        return view('sanpham.themmoi_sp',['lstcamera'=>$lstcamera,'lstmanhinh'=>$lstmanhinh,
       'lsthedieuhanh'=>$lsthedieuhanh,'lsttinhnangdb'=>$lsttinhnangdb,'lstloai'=>$lstloai,'lsthieunangpin'=>$lsthieunangpin,'lstthietke'=>$lstthietke]);
    }
/**
     * Store a newly created resource in storage.
     *
    *@param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storemp(Request $request)
    {
        $validatedData = $request->validate(
            [
                'id_ram' => 'required',
                'id_rom' => 'required',
                'id_mau' => 'required',   
                'id_mau' => 'required', 
                'soluong' => 'required', 
                'giacu' => 'required',   
                'giamoi' => 'required',   
 
            ],
            [
                'id_ram.required' => 'Ram Không Được Bỏ Trống',
            ]
        );
        $mapping = new Mapping();
        $mapping->fill([
            'id_sanpham'=>$request->input('themmp'),
            'id_ram'=>$request->input('id_ram'),
            'id_rom'=>$request->input('id_rom'),
            'id_mau'=>$request->input('id_mau'),
            'soluong'=>$request->input('soluong'),
            'giacu'=>$request->input('giacu'),
            'giamoi'=>$request->input('giamoi'),
            'hienthi'=>'1',
        ]);
        $mapping->save();
        return Redirect::route('sanPham.stock',$request->input('themmp'));
    }
    public function storeab(Request $request)
    {
        $hinhanh = new HinhAnh();
        $hinhanh->fill([
            'id_sanpham'=>$request->input('themab'),
            'hinhanh'=>'',
            'hienthi'=>'1',
        ]);
        $hinhanh->save();
        if($request->hasFile('hinhanh')){
            $hinhanh->hinhanh = $request->file('hinhanh')->store('images/abum/'.$hinhanh->id,'public');
        }
        $hinhanh->save();
        return Redirect::route('sanPham.abum',$request->input('themab'));
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
                'tensanpham' => 'required|unique:san_phams,tensanpham',
                'hinhanh' => 'required',
                'mota' => 'required',  
                'giamin' => 'required',
                'giamax' => 'required',  
                'id_loai' => 'required',  
            ],
            [
                'tensanpham.required' => 'Tên Sản Phẩm Không Được Bỏ Trống',
                'tensanpham.unique' => 'Tên Sản Phẩm Đã Tồn Tại',
                'hinhanh.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'mota.required' => 'Mô Tả Ảnh Không Được Bỏ Trống',
                'giamin.required' => 'Giá Min Không Được Bỏ Trống',
                'giamax.required' => 'Giá Max Không Được Bỏ Trống',
                'id_loai.required' => 'Loại Không Được Bỏ Trống',

            ]
        );
        $sanPham = new SanPham();
        $sanPham->fill([
            'tensanpham'=>$request->input('tensanpham'),
            'hinhanh'=>'',
            'mota'=>$request->input('mota'),
            'giamin'=>$request->input('giamin'),
            'giamax'=>$request->input('giamax'),
            'id_camera'=>$request->input('id_camera'),
            'id_manhinh'=>$request->input('id_manhinh'),
            'id_tinhnangdb'=>$request->input('id_tinhnangdb'),
            'id_thietke'=>$request->input('id_thietke'),
            'id_hieunangpin'=>$request->input('id_hieunangpin'),
            'id_hedieuhanh'=>$request->input('id_hedieuhanh'),
            'id_thietke'=>$request->input('id_thietke'),
            'danhgia'=>'1',
            'id_loaisp'=>$request->input('id_loai'),
            'hienthi'=>$request->has('hienthi'),
            'noibat'=>$request->has('noibat'),
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
        $lsthedieuhanh = HeDieuHanh::all();
        $lstloai = LoaiSanPham::all();
        $lsthieunangpin = HieuNangPin::all();
        $lsttinhnangdb = TinhNangDB::all();
        $lstthietke = ThietKe::all();
        return view('sanpham.sua_sp',['sanPham'=>$sanPham,'lstcamera'=>$lstcamera,'lstmanhinh'=>$lstmanhinh,
       'lsthedieuhanh'=>$lsthedieuhanh,'lsttinhnangdb'=>$lsttinhnangdb,'lstloai'=>$lstloai,'lsthieunangpin'=>$lsthieunangpin,'lstthietke'=>$lstthietke]);
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

    public function detail($id)
    {
        $sanPham=$id;
        return view('user.sanpham.detailproduct',['sanPham'=>$sanPham]);
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
                'mota' => 'required',
                'giamin' => 'required',
                'giamax' => 'required',
            ],
            [
                'tensanpham.required' => 'Tên Sản Phẩm Không Được Bỏ Trống',
                'mota.required' => 'Mô Tả Ảnh Không Được Bỏ Trống',
                'giamin.required' => 'Giá Min Không Được Bỏ Trống',
                'giamax.required' => 'Giá Max Không Được Bỏ Trống',
            ]
        );
        if($request->hasFile('hinhanh'))
        {
            $sanPham->hinhanh = $request->file('hinhanh')->store('images/sanPham/'.$sanPham->id,'public');
        }
        $sanPham->fill([
            'tensanpham'=>$request->input('tensanpham'),
            'mota'=>$request->input('mota'),
            'giamin'=>$request->input('giamin'),
            'giamax'=>$request->input('giamax'),
            'id_camera'=>$request->input('id_camera'),
      
            'id_manhinh'=>$request->input('id_manhinh'),
            'id_tinhnangdb'=>$request->input('id_tinhnangdb'),
            'id_thietke'=>$request->input('id_thietke'),
            'id_hieunangpin'=>$request->input('id_hieunangpin'),
      
            'id_hedieuhanh'=>$request->input('id_hedieuhanh'),
            'id_thietke'=>$request->input('id_thietke'),
            'id_danhgia'=>'5',
          
            'id_loaisp'=>$request->input('id_loai'),
            'hienthi'=>$request->has('hienthi'),
            'noibat'=>$request->has('noibat'),
        ]);
        $sanPham->save();
        return Redirect::route('sanPham.show',['sanPham'=>$sanPham]);
    }

    public function updatemp(Request $request)
    {
        $validatedData = $request->validate(
            [
                'id_ram' => 'required',
                'id_rom' => 'required',
                'id_mau' => 'required',   
                'id_mau' => 'required', 
                'soluong' => 'required', 
                'giacu' => 'required',   
                'giamoi' => 'required',   
 
            ],
            [
                'id_ram.required' => 'Ram Không Được Bỏ Trống',
            ]
        );
        $mapping = mapping::find($request->input('tensanpham'));
        $mapping->fill([
            'id_sanpham'=>$request->input('tensanpham1'),
            'id_ram'=>$request->input('id_ram'),
            'id_rom'=>$request->input('id_rom'),
            'id_mau'=>$request->input('id_mau'),
            'soluong'=>$request->input('soluong'),
            'giacu'=>$request->input('giacu'),
            'giamoi'=>$request->input('giamoi'),
            'hienthi'=>'1',
        ]);
        $mapping->save();
        return Redirect::route('sanPham.stock',$request->input('tensanpham1'));
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

    public function destroymp(Request $request)
    {
        $stock_id = $request->input('xoasanpham');
        $stock = mapping::find($stock_id);
        $stock->delete();
        return Redirect::route('sanPham.stock', $request->input('xoasanpham1'));
    }
    public function destroyab(Request $request)
    {
        $stock_id = $request->input('xoaabum');
        $stock = HinhAnh::find($stock_id);
        $stock->delete();
        return Redirect::route('sanPham.abum', $request->input('xoaabum1'));
    }
}