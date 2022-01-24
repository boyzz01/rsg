<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OdontogramController extends Controller
{
    
    function index($id){

        $data =DB::table('odontogram_pasien')->where('id_pasien','=',$id)->first();
        $biodata =DB::table('biodata_pasien')->where('id','=',$id)->first();
        return view('odontogram_pasien',['data'=>$data,'biodata'=>$biodata]);
    }

    function getNamaSimbol(){
        
    }
}
