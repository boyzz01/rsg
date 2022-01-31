<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OdontogramController extends Controller
{
    
    function index($id){

        $data =DB::select("SELECT * FROM odontogram_pasien JOIN master_simbol_odontogram WHERE odontogram_pasien.kondisi = master_simbol_odontogram.id AND odontogram_pasien.id_pasien = 9 ORDER BY odontogram_pasien.id ASC");
        $biodata =DB::table('biodata_pasien')->where('id','=',$id)->first();
        $dataall =DB::table('odontogram_pasien')->join('master_simbol_odontogram','odontogram_pasien.kondisi','=','master_simbol_odontogram.id')->where('id_pasien','=',$id)->orderByDesc('odontogram_pasien.id')->get()->toArray(); 
        $datagigi =DB::table('master_simbol_odontogram')->get();

        return view('odontogram_pasien',['datagigi'=>$datagigi,'data'=>$data,'biodata'=>$biodata,'dataall'=>$dataall]);
    }

    function getsimbol($warna){

       
        // $data =DB::table('master_simbol_odontogram')->where('warna','=',$warna)->first();
        // return $data;
        return $warna;
    }
}
