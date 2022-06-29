<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstcamera = Camera::orderBy('created_at','DESC')->search()->paginate(10);
        foreach($lstcamera as $camera){
         
        }
        return view('camera.index',['lstcamera'=>$lstcamera]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('camera.them_camera');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tencamera' => 'required |unique:cameras,tencamera',
            ],
            [
                'tencamera.required' => 'Tên Camera Không Được Bỏ Trống',
                'tencamera.unique' => 'Tên Camera Đã Tồn Tại',
            ]
        );
        $camera = new Camera;
        $camera->fill([
            'tencamera'=>$request->input('tencamera'),
            'hienthi'=>'1',
        ]);
        $camera->save();
        return Redirect::route('camera.index',['camera'=>$camera]);//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function show(Camera $camera)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function edit(Camera $camera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCameraRequest  $request
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCameraRequest $request, Camera $camera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Camera::find($id)->delete();
        return Redirect::route('camera.index');
    }
}