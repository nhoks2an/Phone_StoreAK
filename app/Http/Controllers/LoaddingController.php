<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\RAM;
use App\Models\mapping;
use App\Models\ROM;
use App\Models\ThietKe;
use App\Models\LoaiSanPham;
use App\Models\GioiThieu;
use App\Models\Sologan;
use App\Models\ChinhSach;
use App\Models\HeDieuHanh;
use App\Models\TinhNangDB;
use App\Models\ManHinh;
use App\Models\MauSac;
use App\Models\TTLienHe;
use App\Models\Hang;
use App\Models\HieuNangPin;
use App\Models\Camera;
use App\Models\HinhAnh;
use App\Models\Post;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class LoaddingController extends Controller
{
    protected function fixImageab(HinhAnh $hinhanh)
    {
        if(Storage::disk('public')->exists($hinhanh->hinhanh)){
            $hinhanh->hinhanh = Storage::url($hinhanh->hinhanh);
        }else{
            $hinhanh->hinhanh = '/images/noimage.jpg';
        }
    }
    protected function fixImage(TinTuc $tinTuc)
    {
        if(Storage::disk('public')->exists($tinTuc->hinhanh)){
            $tinTuc->hinhanh = Storage::url($tinTuc->hinhanh);
        }else{
            $tinTuc->hinhanh = '/images/noimage.jpg';
        }
    }
    protected function fixImageHang(Hang $hang)
    {
        if(Storage::disk('public')->exists($hang->hinhanh)){
            $hang->hinhanh = Storage::url($hang->hinhanh);
        }else{
            $hang->hinhanh = '/images/noimage.jpg';
        }
    }
    // tintuc
    public function loadtintuc()
    {
        $lsttt = TinTuc::all();
        foreach($lsttt as $tt){
            $this->fixImage($tt);
        }
        return view('user.sanpham.index',['lsttt'=>$lsttt]);
    }
   public function loadding()
   {
    $sanPham = SanPham::orderBy('created_at','DESC')->where('noibat','=','1')->get();
    foreach($sanPham as $sp)
    {
        $mapping = mapping::where('id_sanpham','=',$sp->id)->get();
    }
    
    $lstchinhsach = ChinhSach::all();
    $lsthang = Hang::all();
    foreach($lsthang as $hang)
    {
        $this->fixImageHang($hang);
        $lstloai = LoaiSanPham::where('id_hang','=',$hang->id)->get();
    }
    return View::make('user.index.index', compact('sanPham','lsthang','lstloai','lstchinhsach'))->nest('user.index.index','user.layout.footer', compact('sanPham','lsthang','lstchinhsach'));
   }


   public function detail($id)
   {
    $sanPham = SanPham::where('id','=',$id)->first();
    $mapping = mapping::where('id_sanpham','=',$id)->get();
    $lsthinhanh = HinhAnh::where('id_sanpham','=',$id)->get();
    $lstloai= LoaiSanPham::where('id','=',$id)->get();
    $spcungloai=SanPham::where('id_loaisp','=',$sanPham->id_loaisp,'and id<>',$sanPham->id)->get();

    foreach($mapping as $mp)
    {  
    }
    foreach($lsthinhanh as $hinhanh)
    {  
        $this->fixImageab($hinhanh);
    }

    return View('user.sanpham.detailproduct',['sanPham'=>$sanPham,'mapping'=>$mapping,'lsthinhanh'=>$lsthinhanh,'lstloai'=>$lstloai,'spcungloai'=>$spcungloai]);
   }
    //    gioi thieu
   public function loadgioithieu()
   {
    $gioithieu = GioiThieu::all();
    return View('user.gioithieu.index',['gioithieu'=>$gioithieu]);
   }
    // lien he
    public function loadlienhe()
    {
    $lh = TTLienHe::all();
    return View('user.lienhe.index');
    }
    
}