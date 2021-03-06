<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TindakanController extends Controller
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
        Layanan::create($request->all());
        return redirect()->back()
        ->with('success','Data berhasil ditambahkan');
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
        $biodata = DB::select("SELECT biodata_pasien.* FROM `biodata_pasien` JOIN antrian_pasien WHERE antrian_pasien.id_pasien = biodata_pasien.id AND antrian_pasien.id =$id");
        $data = DB::table('master_tindakan')->get();
        $layanan =DB::table('layanan')->join('master_tindakan','layanan.id_tindakan','=','master_tindakan.id')->where('no_trans','=',$id)->get();
        return view('tindakan',['data'=>$data,'id'=>$id,'biodata'=>$biodata,'layanan'=>$layanan]);
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
    public function update(Request $request, $id)
    {
        //
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
        DB::table('layanan')->where('id_layanan',$id)->delete();
        return redirect()->back()
        ->with('success','Data berhasil dihapus');
    }
}
