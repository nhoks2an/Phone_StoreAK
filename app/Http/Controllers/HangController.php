<?php

namespace App\Http\Controllers;

use App\Models\Hang;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class HangController extends Controller
{

    protected function fixImage(Hang $hang)
    {
        if(Storage::disk('public')->exists($hang->hinhanh)){
            $hang->hinhanh = Storage::url($hang->hinhanh);
        }else{
            $hang->hinhanh = '/images/noimage.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsthang = hang::orderBy('created_at','DESC')->search()->paginate(3);
        foreach($lsthang as $hang)
        {
            $this->fixImage($hang);

        }
        return view('hang.index',['lsthang'=>$lsthang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hang.them_hang');
    }

    /**
     * Store a newly created resource in storage.
     *
    *@param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tenhang' => 'required |unique:hangs,tenhang',
                'hinhanh' => 'required |image|mimes:jpg,jpeg,png,gif|max:2048',
            ],
            [
                'tenhang.required' => 'Tên Hãng Không Được Bỏ Trống',
                'tenhang.unique' => 'Tên Hãng Đã Tồn Tại',
        
                'hinhanh.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'hinhanh.image' => 'Không Phải File Hình Anh',
                'hinhanh.mimes' => 'Hình Ảnh Không Đúng Định Dạng',
                'hinhanh.max' => 'Kích Thước Quá Lớn',
            ]
        );
        $hang = new Hang();
        $hang->fill([
            'tenhang'=>$request->input('tenhang'),
            'hinhanh'=>'',
            'hienthi'=>'1',
        ]);
        $hang->save();
        if($request->hasFile('hinhanh')){
            $hang->hinhanh = $request->file('hinhanh')->store('images/hang/'.$hang->id,'public');
        }
        $hang->save();
        return Redirect::route('hang.index',['hang'=>$hang])->with('message','Thêm Hãng Thành Công');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function show(Hang $hang)
    {
        $this->fixImage($hang);
        return view('hang.sua_hang',['hang'=>$hang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function edit(Hang $hang)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hang $hang)
    {
        $validatedData = $request->validate(
            [
                'tenhang' => 'required |unique:hangs,tenhang,' . $hang->id .',id',
                'hinhanh' => 'image|mimes:jpg,jpeg,png,gif|max:2048',
            ],
            [
                'tenhang.required' => 'Tên Hãng Không Được Bỏ Trống',
                'tenhang.unique' => 'Tên Hãng Đã Tồn Tại',
                'hinhanh.image' => 'Không Phải File Hình Anh',
                'hinhanh.mimes' => 'Hình Ảnh Không Đúng Định Dạng',
                'hinhanh.max' => 'Kích Thước Quá Lớn',
            ]
        );
        if($request->hasFile('hinhanh'))
        {
            $hang->hinhanh = $request->file('hinhanh')->store('images/hang/'.$hang->id,'public');
        }
        $hang->fill([
            'tenhang'=>$request->input('tenhang'),
            'hienthi'=>'1',
        ]);
        $hang->save();
        return Redirect::route('hang.index',['hang'=>$hang])->with('message','Cập Nhật Hãng Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hang  $hang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hang::find($id)->delete();
        return Redirect::route('hang.index')->with('message','Xóa Hãng Thành Công');
    }
}
