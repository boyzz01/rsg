<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddRekamMedisController extends Controller
{
    //
    function index($idpasien,$idgigi){
       
        $biodata =DB::table('biodata_pasien')->where('id','=',$idpasien)->first();
        $datagigi =DB::table('master_simbol_odontogram')->get();
        return view('add_rekam_medis',['biodata'=>$biodata,'idgigi'=>$idgigi,'datagigi'=>$datagigi]);
    }
}
