<?php

namespace App\Http\Controllers;

use App\Models\TTLienHe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class TTLienHeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thongtinlh = TTLienHe::all();
        foreach( $thongtinlh as $thongtinlh){
        }
        return view('lienhe.index',['thongtinlh'=>$thongtinlh]);
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

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TTLienHe  $tTLienHe
     * @return \Illuminate\Http\Response
     */
    public function show(TTLienHe $thongtinlh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TTLienHe  $tTLienHe
     * @return \Illuminate\Http\Response
     */
    public function edit(TTLienHe $thongtinlh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\HeRequest  $request
     * @param  \App\Models\TTLienHe  $tTLienHe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TTLienHe $thongtinlh)
    {
        $validatedData = $request->validate(
            [
                'content' => 'required ',
            ],
            [
                'content.required' => 'Nội Dung Không Được Bỏ Trống',
               
            ]
        );
        $thongtinlh->fill([
            'noidung'=>$request->input('content'),
        ]);
        $thongtinlh->save();
        return Redirect::route('thongtinlh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TTLienHe  $tTLienHe
     * @return \Illuminate\Http\Response
     */
    public function destroy(TTLienHe $tTLienHe)
    {
        //
    }
}
