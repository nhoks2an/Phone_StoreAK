<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\mapping;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\ThanhPho;
use App\Models\Phuong;
use App\Models\Quan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class CartController extends Controller
{
    public function show($id){
        $cart=Cart::where('id_kh',$id)->get();
        $tp = ThanhPho::all();
        $quan = Quan::all();
        $phuong = Phuong::all();
        return view('user.cart.cart',['cart'=>$cart,'tp'=>$tp,'quan'=>$quan,'phuong'=>$phuong]);
    }
    public function cart(Request $request,SanPham $sanPham){
        $cart = Cart::where('id_map',$request->cart_idmap)->where('id_sp',$sanPham->id)->where('id_kh',$request->id_user)->first();
        if($request->cart_idmap==null)
        {
            return back()->with('fail','Chưa chọn loại sản phẩm!');
        }
        if($request->id_user!=null)
        {
            if(!$cart)
        {
        $cart = new Cart();
        $cart->id_kh=$request->id_user;
        $cart->id_sp=$sanPham->id;
        $cart->id_map=$request->cart_idmap;
        $cart->soluong=$request->soluong;
        $cart->save();
        }else{
            $cart->soluong+=$request->soluong;
            $cart->save();
        }
        return back()->with('success','Thêm vào giỏ hàng thành công!');
        }else{
            return Redirect::route('user.login')->with('fail','Chưa đăng nhập!');
        }
    }
    public function updateminus(Request $request){
        $cart = Cart::where('id',$request->idcart)->first();
        if($cart->soluong>1)
        {
            $cart->soluong-=1;
            $cart->save();
        }else{
            return back();
        }
        return back();
    }
    public function updateplus(Request $request){
        $cart = Cart::where('id',$request->idcart)->first();
        if($cart)
        {
            $cart->soluong+=1;
            $cart->save();
        }else{
            return back();
        }
        return back();
    }
    public function deletecart(Request $request){
        $cart = Cart::where('id',$request->idcart)->first();
        $cart->delete;
        if($cart)
        {
            $cart->delete();
        }else{
            return back();
        }
        return back();
    }
    public function getvt(Request $request){
        $id = $request->id;
       
            $location = Quan::where('_province_id',$id)->get();
           
            $loadquan = '';
            $loadquan.='<select class="select-district-cart select-district custom-select text-sm thanhpho"
            required="" id="quan" name="quan" data-type="quan">';
            foreach($location as $value){
            $loadquan.='<option value="'.$value->id.'">'.$value->_prefix.' '.$value->_name.'</option> </select>';
            }
            return $loadquan;
    }
    public function getphuong(Request $request){
        $id = $request->id;
       
            $location = Phuong::where('_district_id',$id)->get();
           
            $loadphuong = '';
            $loadphuong.='<select class="select-district-cart select-district custom-select text-sm thanhpho"
            required="" id="phuong" name="phuong" data-type="phuong">';
            foreach($location as $value){
            $loadphuong.='<option value="'.$value->id.'">'.$value->_prefix.' '.$value->_name.'</option> </select>';
            }
            return $loadphuong;
    }
        
}