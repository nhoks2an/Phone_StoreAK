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
   public function loadding()
   {
    $sanPham = SanPham::orderBy('created_at','DESC')->where('noibat','=','1')->get();
    foreach($sanPham as $sp)
    {
        $mapping = mapping::where('id_sanpham','=',$sp->id)->get();
    }
    return View::make('user.index.index', compact('sanPham','mapping'))->nest('user.index.index','user.layout.footer', compact('sanPham','mapping'));
   }
   public function detail($id)
   {
    $sanPham = SanPham::find($id);
    $mapping = mapping::where('id_sanpham','=',$id,)->get();
    $lsthinhanh = HinhAnh::where('id_sanpham','=',$id)->get();
    $lstloai= LoaiSanPham::where('id','=',$id)->get();
    foreach($mapping as $mp)
    {  
    }
    foreach($lsthinhanh as $hinhanh)
    {  
        $this->fixImageab($hinhanh);
    }
    return View('user.sanpham.detailproduct',['sanPham'=>$sanPham,'mapping'=>$mapping,'lsthinhanh'=>$lsthinhanh,'lstloai'=>$lstloai]);
   }
}