<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    function index(){
        if (session()->has('userid')){
            if(session()->get('userid')!=1){
                return redirect()->action([LoginController::class, 'index']);
            }else{
                $data =DB::table('biodata_pasien')->get();
                $antri =DB::table('antrian_pasien')->join('biodata_pasien','antrian_pasien.id_pasien','=','biodata_pasien.id')->where('antrian_pasien.status','=','1')->orderBy('antrian_pasien.mulai_antri','ASC')->get();
                 $now = Carbon::now();
                 
                return view('admin',['now'=>$now,'data'=>$data,'antri'=>$antri]);
            
            }
           
        }else {
            return redirect()->action([LoginController::class, 'index']);
        }
      
    }
}
