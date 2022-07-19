<?php

namespace App\Http\Controllers;

use App\Models\ThongKe;
use App\Models\HoaDon;
use App\Models\CTHoaDon;
use App\Models\SanPham;
use App\Http\Requests\StoreThongKeRequest;
use App\Http\Requests\UpdateThongKeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ThongKeController extends Controller
{

    public function thongkethang(Request $request){
        $thang = $request->thang;
        $mytime = Carbon::now()->year;
            $hoadon = HoaDon::all();
            $tong=0;
           $hoadonthang=[];
           foreach($hoadon as $item)
           {
                    if($item->created_at->format('M')==$thang&&$item->created_at->format('Y')==$mytime)
                {
                    $hoadonthang=$item;
                    $tong+=$item->tongtien;
                }
           }
            return $tong.'VNĐ';
    }
    public function thongkethangthucte(Request $request){
        $thang = $request->thang;
        $mytime = Carbon::now()->year;
            $hoadon = HoaDon::where('trangthai',4)->get();
            $tong=0;
           $hoadonthang=[];
           foreach($hoadon as $item)
           {
                    if($item->created_at->format('M')==$thang&&$item->created_at->format('Y')==$mytime)
                {
                    $hoadonthang=$item;
                    $tong+=$item->tongtien;
                }
           }
            return $tong.'VNĐ';
    }
    public function thongkehoadon(Request $request){
        $nam=$request->nam;
        $hoadon1 = DB::table('hoa_dons')->where('trangthai',1)->whereYear('created_at',$nam)->get();
        $hoadon2 = DB::table('hoa_dons')->where('trangthai',2)->whereYear('created_at',$nam)->get();
        $hoadon3 = DB::table('hoa_dons')->where('trangthai',3)->whereYear('created_at',$nam)->get();
        $hoadon4 = DB::table('hoa_dons')->where('trangthai',4)->whereYear('created_at',$nam)->get();
        $dem1=0;
        $dem2=0;
        $dem3=0;
        $dem4=0;
        foreach($hoadon1 as $item)
        {
            $dem1++;
        }
        foreach($hoadon2 as $item)
        {
            $dem2++;
        }
        foreach($hoadon3 as $item)
        {
            $dem3++;
        }
        foreach($hoadon4 as $item)
        {
            $dem4++;
        }
        $code="";
        $code.='<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Chưa
        duyệt:<span>'.$dem1.'</span>
    </div>
    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Đã
        duyệt:<span>'.$dem2.'</span>
    </div>
    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Đang
        giao:<span>'.$dem3.'</span>
    </div>
    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Đã
        giao:<span>'.$dem4.'</span>
    </div>';
        return $code;
        
    }
    public function dashboard()
    {
        $tongdoanhthu=0;
        $nam = Carbon::now()->year;
        $hoadon = HoaDon::all();
        $namhoadon = DB::table('hoa_dons')->selectRaw('(YEAR(created_at)) as namhd')->groupBy('namhd')->orderBy('namhd','DESC')->get();
        foreach($hoadon as $item)
           {
                if($item->created_at->format('Y')==$nam)
            {
                $tongdoanhthu+=$item->tongtien;
            }
           }
        $tongdoanhthutt=0;
        $hoadontt = HoaDon::where('trangthai',4)->get();
        foreach($hoadontt as $item)
            {
                if($item->created_at->format('Y')==$nam)
            {
                $tongdoanhthutt+=$item->tongtien;
            }
            }
        $sanpham =DB::table('c_t_hoa_dons')->selectRaw('(SUM(soluong)) as tongsoluong,id_sanpham,id_map')->groupBy('id_sanpham','id_map')->orderBy('tongsoluong','DESC')->take(3)->get();
     return view('dashboard.index',['tongdoanhthu'=>$tongdoanhthu,'tongdoanhthutt'=>$tongdoanhthutt,'namhoadon'=>$namhoadon,'nam'=>$nam,'sanpham'=>$sanpham]);;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThongKeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThongKeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function show(ThongKe $thongKe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function edit(ThongKe $thongKe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThongKeRequest  $request
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThongKeRequest $request, ThongKe $thongKe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThongKe  $thongKe
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThongKe $thongKe)
    {
        //
    }
}