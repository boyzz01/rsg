<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    //
    function invoice($id){
       
        $antri=DB::table('antrian_pasien')->where('id','=',$id)->first();
        $time = strtotime($antri->mulai_antri);
        $newformat = date('Y-m-d',$time);
        $inv = date('Ymd',$time);
        $invoice=DB::table('invoice')->where('id_trans','=',$id)->first();
        $data =DB::table('layanan')->join('master_tindakan','layanan.id_tindakan','=','master_tindakan.id')->where('no_trans','=',$id)->get();
        $biodata=DB::table('biodata_pasien')->where('id','=',$data[0]->id_pasien)->first();
        return view('print_invoice',['antri'=>$antri,'invoice'=>$invoice,'inv'=>$inv,'tgl'=>$newformat,'biodata'=>$biodata,'layanan'=>$data,'id'=>$id]);
    }
}
