<?php

namespace App\Http\Controllers;

use App\Models\resto;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumb = $request->foto_thumb->getClientOriginalName() . '-' . time()
                    . '.' . $request->foto_thumb->extension();
        $request->foto_thumb->move(public_path('gambar_resto'), $thumb);

        if($request->hasfile('foto_slide')){
            foreach($request->file('foto_slide') as $image_content){
                $name_content = $image_content->getClientOriginalName(). '-'. time();
                $image_content->move(public_path().'/gambar_resto/gambar_slide/',$name_content);
                $data_content[] = $name_content;
            }
        }

        if($request->hasfile('foto_menu')){
            foreach($request->file('foto_menu') as $image_menu){
                $name_menu = $image_menu->getClientOriginalName(). '-'. time();
                $image_menu->move(public_path().'/gambar_resto/gambar_menu',$name_menu);
                $data_menu[] = $name_menu;
            }
        }

        $resto = new Resto();
        $resto->namaresto = $request->nama_cafe;
        $resto->district = $request->kawasan;
        $resto->address = $request->lokasi_cafe;
        $resto->open = $request->waktubuka;
        $resto->close = $request->waktututup;
        $resto->price = $request->harga1;
        $resto->upto = $request->harga2;
        $resto->thumbnail = $thumb;
        $resto->content = json_encode($data_content);
        $resto->menu = json_encode($data_menu);
        $resto->category = 'gratis';
        $resto->status = 'approved';
        $resto->rekomen = 'tidak';
        $resto->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function show(resto $resto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function edit(resto $resto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resto $resto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\resto  $resto
     * @return \Illuminate\Http\Response
     */
    public function destroy(resto $resto)
    {
        //
    }
}
