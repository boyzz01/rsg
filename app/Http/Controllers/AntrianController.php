<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =DB::table('biodata_pasien')->get();
        $antrian =DB::table('antrian_pasien')->join('biodata_pasien','biodata_pasien.id','=','antrian_pasien.id_pasien')->get();
        return view('antrian',['data'=>$data,'antrian'=>$antrian]);
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
        if($request->id_pasien===null){
            return redirect()->back()
            ->with('error','Mohon pilih pasien terlebih dahulu');
        }
        $user = DB::table('antrian_pasien')->where('id_pasien','=',$request->id_pasien)->first();
      
        if ($user === null) {
            $norm = DB::table('no_rm')->where('id','=',1)->first();
            $ldate = date('Y/m');
            $request['id']= $ldate.'/'.$norm->no;
            Antrian::create($request->all());
            $temp = $norm->no+1;
            DB::update("update no_rm set no = $temp where id = 1");
            return redirect()->back()
            ->with('success','Data berhasil ditambahkan');
        }else{
            return redirect()->back()
            ->with('error','Pasien sudah dalam antrian');
        }
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
    public function update(Request $request, $data)
    {
        //

        
        $id_antrian = $request->idantrian;
        $dokter = $request->dokter;

        DB::update("update antrian_pasien set status='$data',dokter_p = '$dokter' where id = '$id_antrian'");

        return redirect()->back()
        ->with('success','Pasien masuk ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('antrian_pasien')->where('id',$id)->delete();
        return redirect()->back()
        ->with('success','Data berhasil dihapus');
    }
}
