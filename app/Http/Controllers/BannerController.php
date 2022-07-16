<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class BannerController extends Controller
{

    protected function fixImage(Banner $banner)
    {
        if(Storage::disk('public')->exists($banner->hinhanh)){
            $banner->hinhanh = Storage::url($banner->hinhanh);
        }else{
            $banner->hinhanh = '/images/noimage.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstbanner = Banner::all();

        foreach($lstbanner as $banner){
            $this->fixImage($banner);
        }
     
        return view('banner.index',['lstbanner'=>$lstbanner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banner.them_banner');
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
                'hinhanh' => 'required',
            ],
            [
                'hinhanh.required' => 'Hình Ảnh Năng Không Được Bỏ Trống',
            ]
        );
        $banner = new Banner();
        $banner->fill([
            'hinhanh'=>'',
            'hienthi'=>$request->has('hienthi'),
        ]);
        if($request->hasFile('hinhanh')){
            $banner->hinhanh = $request->file('hinhanh')->store('images/banner/'.$banner->id,'public');
        }
        $banner->save();
        return Redirect::route('banner.index',['banner'=>$banner]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::find($id)->delete();
        return Redirect::route('banner.index');
    }
}
