<?php

namespace App\Http\Controllers;

use App\Models\SlideShow;
use App\Http\Requests\StoreSlideShowRequest;
use App\Http\Requests\UpdateSlideShowRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class SlideShowController extends Controller
{
    protected function fixImage(SlideShow $slideShow)
    {
        if(Storage::disk('public')->exists($slideShow->hinhanh)){
            $slideShow->hinhanh = Storage::url($slideShow->hinhanh);
        }else{
            $slideShow->hinhanh = '/images/noimage.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstslide = SlideShow::all();
        foreach($lstslide as $slide){
            $this->fixImage($slide);
        }
        return view('slideshow.index',['lstslide'=>$lstslide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slideshow.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSlideShowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'hinhanh' => 'required',
                'link' => 'required',
            ],
            [
                'hinhanh.required' => 'Hình Ảnh Năng Không Được Bỏ Trống',
                'link.required' => 'Đường Link Năng Không Được Bỏ Trống',
            ]
        );
        $slideShow = new SlideShow();
        $slideShow->fill([
            'hinhanh'=>'',
            'lienket'=>$request->input('link'),
            'trangthai'=>'Hiển thị',
        ]);
        if($request->hasFile('hinhanh')){
            $slideShow->hinhanh = $request->file('hinhanh')->store('images/slide/'.$slideShow->id,'public');
        }
        $slideShow->save();
        return Redirect::route('slideShow.index',['slideShow'=>$slideShow]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function show(SlideShow $slideShow)
    {
        $this->fixImage($slideShow);
        return view('slideshow.sua',['slideShow'=>$slideShow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideShow $slideShow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSlideShowRequest  $request
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideShow $slideShow)
    {
        $validatedData = $request->validate(
            [
                'hinhanh' => 'required',
                'link' => 'required',
            ],
            [
                'hinhanh.required' => 'Hình Ảnh Năng Không Được Bỏ Trống',
                'link.required' => 'Đường Link Năng Không Được Bỏ Trống',
            ]
        );
        if($request->hasFile('hinhanh')){
            $slideShow->hinhanh = $request->file('hinhanh')->store('images/slide/'.$slideShow->id,'public');
        }
        $slideShow->fill([
            'lienket'=>$request->input('link'),
            'trangthai'=>'Hiển thị',
        ]);

        $slideShow->save();
        return Redirect::route('slideShow.index',['slideShow'=>$slideShow]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SlideShow::find($id)->delete();
        return Redirect::route('slideShow.index');
    }
}