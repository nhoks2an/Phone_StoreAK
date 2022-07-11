<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\CTHoaDon;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class dathangController extends Controller
{
        public function addhd(Request $request)
        {
            
            $hoadon=new HoaDon();
            $hoadon->fill([
                'id_kh'=>$request->input('id_user'),
                'tongtien'=>$request->input('tongtien'),
                'id_thanhpho'=>'1',
                'id_quan'=>'1',
                'id_phuong'=>'1',
                'diachi'=>$request->input('diachi'),
                'sodienthoai'=>$request->input('sodienthoai'),
                'trangthai'=>'1',
            ]);
            $hoadon->save();
            $giohang=Cart::where('id_kh',$request->id_user)->get();
            foreach($giohang as $item)
            {
                $cthd= new CTHoaDon();
                $cthd->fill([
                    'id_sanpham'=>$item->id_sp,
                    'soluong'=>$item->soluong,
                    'id_hoadon'=>$hoadon->id,
                    'id_map'=>$item->id_map,
                    'thanhtien'=>$item->soluong*$item->mapping->giamoi,
                    'hienthi'=>'1',
                ]);
                $item->delete();
                $cthd->save();
            }
            return back();
        }
    public function showhd($id)
    {
        $hoadon=HoaDon::where('id_kh',$id)->get();
        return view('user.profile.hisshop',['hoadon'=>$hoadon]);
    }
    public function huy(Request $request)
    {
        $hoadon=HoaDon::where('id',$request->id)->first();
        $cthd=CTHoaDon::where('id_hoadon',$request->id)->get();
        
        foreach($cthd as $ct)
        {
            $ct->delete();
        }
        $hoadon->delete();
        return back();
    }
    public function show(Request $request)
    {
        $cthd=CTHoaDon::where('id_hoadon',$request->id)->get();
        return view('user.profile.cthoadon',['cthd'=>$cthd]);
    }
}