<?php

namespace App\Http\Controllers;

use App\Models\LienHe;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class LienHeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lienhe = LienHe::orderBy('created_at','DESC')->where('hienthi','=','1')->paginate(1);
       return view('nhantin.index',['lienhe'=>$lienhe]);
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
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'hoten' => 'required',
                'sodienthoai' => 'required|min:10|max:10',
                'email' => 'required|regex:/^[a-zA-Z0-9_]+@gmail.com$/',
            ],
            [
                'hoten.required' => 'Họ Tên Không Được Bỏ Trống',
                'sodienthoai.required' => 'Số Điện Thoại Không Được Bỏ Trống',
                'sodienthoai.min' => 'Số Điện Thoại Không Đúng',
                'sodienthoai.max' => 'Số Điện Thoại Không Đúng',
                'email.required' => 'Email Không Được Bỏ Trống',
                'email.regex' => 'Email Không Đúng Định Dạng',
                
               
            ]
        );
        $lienhe= new LienHe();
        $lienhe->fill([
            'hoten'=>$request->input('hoten'),
            'sodienthoai'=>$request->input('sodienthoai'),
            'email'=>$request->input('email'),
            'noidung'=>$request->input('noidung'),
            'hienthi'=>'1',
        ]);
        $lienhe->save();
        return Redirect::route('user',['lienhe'=>$lienhe]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function show(LienHe $lienhe)
    {
        return view('nhantin.detail',['lienhe'=>$lienhe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function edit(LienHe $lienhe)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LienHe $lienhe)
    {
       
        $lienhe->fill([
            'hoten'=>$lienhe->hoten,
            'sodienthoai'=>$lienhe->sodienthoai,
            'email'=>$lienhe->email,
            'noidung'=>$lienhe->noidung,
            'hienthi'=>'0',
        ]);
        $lienhe->save();
        return Redirect::route('lienhe.index',['lienhe'=>$lienhe]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LienHe  $lienHe
     * @return \Illuminate\Http\Response
     */
    public function destroy(LienHe $lienHe)
    {
        //
    }
}
