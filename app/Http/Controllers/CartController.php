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
        return back();
        }else{
            return Redirect::route('user.login');
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
        return dd($request);
        $parentID = $request->parentID;
        if($parentID){
            $location = Quan::where('province_id',$parentID)->get();
            return reponse(['data'=>$location]);
        }

    }
        
}