<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsttaikhoan = User::orderBy('created_at','DESC')->search()->paginate(1);
        foreach($lsttaikhoan as $user){
         
        }
        return view('taikhoan.index',['lsttaikhoan'=>$lsttaikhoan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(User $taikhoan)
    {
        return view('taikhoan.chitiet_taikhoan',['taikhoan'=>$taikhoan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(User $taikhoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\TaiKhoan  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $taikhoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaiKhoan  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return Redirect::route('taikhoan.index');
    }
}
