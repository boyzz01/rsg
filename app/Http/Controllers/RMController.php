<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use App\Models\Rencana;
use App\Models\Rm;
use Illuminate\Http\Request;

class RMController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pil)
    {
        //

        if($pil==1){

            $id = $request->id;
            $data = Rm::find($id);
            $data->update($request->all());
            return redirect()->back()
            ->with('success','Data berhasil diupdate');
        }

        else if($pil==2){

            $id = $request->id;
            $data = Pemeriksaan::find($id);
            $data->update($request->all());
            return redirect()->back()
            ->with('success','Data berhasil diupdate');
        }
        else if($pil==3){

            $id = $request->id;
            $data = Pemeriksaan::find($id);
            $data->update($request->all());
            return redirect()->back()
            ->with('success','Data berhasil diupdate');
        } else if($pil==4){

            Rencana::create($request->all());
            return redirect()->back()
            ->with('success','Data berhasil ditambahkan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
