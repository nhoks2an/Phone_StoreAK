<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\mapping;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(){
        return view('user.cart.cart');
    }
    public function cart(SanPham $sanPham){
        return dd($sanPham);
    }
}