<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemeriksaanController extends Controller
{

    function antrian(){
        $antrian =DB::table('antrian_pasien')->join('biodata_pasien','biodata_pasien.id','=','antrian_pasien.id_pasien')->where('status','=','1')->get();
        return view('antrian_pemeriksaan',['antrian'=>$antrian]);
    }
    function index($id){
        $data =DB::select("SELECT * FROM odontogram_pasien JOIN master_simbol_odontogram WHERE odontogram_pasien.kondisi = master_simbol_odontogram.id AND odontogram_pasien.id IN (SELECT MAX(odontogram_pasien.id) FROM odontogram_pasien GROUP BY gigi)");
        $biodata =DB::table('biodata_pasien')->where('id','=',$id)->first();
        $dataall =DB::table('odontogram_pasien')->join('master_simbol_odontogram','odontogram_pasien.kondisi','=','master_simbol_odontogram.id')->where('id_pasien','=',$id)->orderByDesc('odontogram_pasien.id')->get()->toArray(); 
        $fisik = DB::table('pemeriksaan')->where('id_pasien','=',$id)->first();
       
        return view('pemeriksaan_pasien',['data'=>$data,'biodata'=>$biodata,'dataall'=>$dataall,'fisik'=>$fisik]);
    }
}
