<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\mapping;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    public function show($id){
        $cart=Cart::where('id_kh',$id)->get();
        return view('user.cart.cart',['cart'=>$cart]);
    }
    public function cart(Request $request,SanPham $sanPham){
        $cart = Cart::where('id_map',$request->cart_idmap)->where('id_sp',$sanPham->id)->where('id_kh',$request->id_user)->first();
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
        
}