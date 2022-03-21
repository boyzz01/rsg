<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
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
        $biodata =DB::table('biodata_pasien')->where('id','=',$id)->first();
       
        $riwayat =DB::select("SELECT * FROM riwayat_medis JOIN antrian_pasien where antrian_pasien.id =riwayat_medis.id_trans and riwayat_medis.id_pasien=$id ");
       
        // -- $riwayat =DB::select("SELECT * FROM `antrian_pasien` JOIN riwayat_medis JOIN invoice WHERE antrian_pasien.id_pasien = riwayat_medis.id_pasien  and antrian_pasien.id_pasien = invoice.id_pasien
        // --AND riwayat_medis.id_pasien = $id");
      
        return view('riwayat',['riwayat'=>$riwayat,'biodata'=>$biodata]);
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
    }
}
