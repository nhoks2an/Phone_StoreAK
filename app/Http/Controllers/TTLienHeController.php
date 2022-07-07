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
        $tTLienHe = TTLienHe::all();
        foreach( $tTLienHe as $lh){
         
        }
        return view('user.lienhe.index',['lh'=>$lh]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('lienhe.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tTLienHe = new TTLienHe();
        $tTLienHe->fill([
            'noidung'=>$request->input('content'),
        ]);
        $tTLienHe->save();
        return Redirect::route('tTLienHe.index',['tTLienHe'=>$tTLienHe]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TTLienHe  $tTLienHe
     * @return \Illuminate\Http\Response
     */
    public function show(TTLienHe $tTLienHe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TTLienHe  $tTLienHe
     * @return \Illuminate\Http\Response
     */
    public function edit(TTLienHe $tTLienHe)
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
    public function update(Request $request, TTLienHe $lh)
    {
        $lh->fill([
            'noidung'=>$request->input('content'),
        ]);
        $lh->save();
        return Redirect::route('tTLienHe.index',['lh'=>$lh]);
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
