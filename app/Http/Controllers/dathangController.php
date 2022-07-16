<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\CTHoaDon;
use App\Models\Cart;
use App\Models\mapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class dathangController extends Controller
{
        public function addhd(Request $request)
        {

            $tong = 0;
            if($request->tongtien!=0){
                $hoadon=new HoaDon();
            $hoadon->fill([
                'id_kh'=>$request->input('id_user'),
                'tongtien'=>$request->input('tongtien'),
                'id_thanhpho'=>$request->input('thanhpho'),
                'id_quan'=>$request->input('quan'),
                'id_phuong'=>$request->input('phuong'),
                'diachi'=>$request->input('diachi'),
                'sodienthoai'=>$request->input('sodienthoai'),
                'trangthai'=>'1',
            ]);
            $hoadon->save();
            $giohang=Cart::where('id_kh',$request->id_user)->get();
            foreach($giohang as $item)
            {
                $soluongsp=mapping::where('id',$item->id_map)->first();
                if($soluongsp->soluong>=$item->soluong)
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
                $tong+=$cthd->thanhtien;
                $map=mapping::where('id',$item->id_map)->first();
                $map->soluong-=$item->soluong;
                $map->save();
                }    
            }
            if($tong!=$hoadon->tongtien)
            {
                $hoadon->fill([
                    'tongtien'=>$tong,
                ]);
                $hoadon->save();
                return back()->with('fail','Vượt quá số lượng tồn kho!');
            }
            else
            {
                return back()->with('message','Đơn hàng đã được thêm!');
            }
            }else
            {
                return back()->with('fail','Giỏ hàng rỗng!');
            }
            
        }
    public function showhd($id)
    {
        $hoadon=HoaDon::where('id_kh',$id)->paginate(1);
        return view('user.profile.hisshop',['hoadon'=>$hoadon]);
    }
    public function huy(Request $request)
    {
        $hoadon=HoaDon::where('id',$request->id)->first();
        $cthd=CTHoaDon::where('id_hoadon',$request->id)->get();
        
        foreach($cthd as $ct)
        {
            $map=mapping::where('id',$ct->id_map)->first();
            $map->soluong+=$ct->soluong;
            $map->save();
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