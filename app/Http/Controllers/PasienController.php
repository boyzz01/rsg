<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    //

    function index($id){

        $data =DB::table('biodata_pasien')->where('id','=',$id)->first();
        return view('pasien',['data'=>$data]);
    }
}
