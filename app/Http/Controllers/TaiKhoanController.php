<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreTaiKhoanRequest;
use App\Http\Requests\UpdateTaiKhoanRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
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
    public function stores(Request $request)
    {
        $taikhoan->fill([
            'email'=>$request->input('email'),
            'matkhau'=>$request->input('matkhau'),
            'sodienthoai'=>$request->input('sodienthoai'),
            'hoten'=>$request->input('hoten'),
            'diachi'=>$request->input('diachi'),
            'hienthi'=>'1',
        ]);
        $taikhoan->save();
        return Redirect::route('dangnhap');
            // if($request->hasFile('hinhanh')){
            //     $file = $request->file('hinhanh');
            //     $upload = public_path('image/hinhanh');
            //     $file_name = time().'_'.$file->getClientOriginalName();
            //     $file->move($upload,$file_name);
            // } else {
            //     $file_name = 'noname.jpg';
            // }
            // $user = DB::table('users')->where('email',$request->email)->first();
            // if(!$user){
            //     $newUser = new User();
            //     $newUser->email = $request ->email;
            //     $newUser->hoten = $request ->hoten;
            //     $newUser->sodienthoai = $request ->sodienthoai;
            //     $newUser->hinhanh = $file_name;
            //     $newUser->matkhau = $request ->matkhau;
            //     $newUser->hienthi = 1;
            //     $newUser->save();
            //     return redirect()->route('dangnhap')->with('message','Đăng ký thành công!');
            // }
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