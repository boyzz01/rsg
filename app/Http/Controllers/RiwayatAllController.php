<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatAllController extends Controller
{
    //
    function index($id_trans,$id_pasien)
    {
        $rm=DB::table('riwayat_medis')->where('id_trans','=',$id_trans)->first();
        $pemeriksaan=DB::table('pemeriksaan')->where('id_trans','=',$id_trans)->first();
  
        $rp = DB::table('rencana_perawatan')->where('id_trans','=',$id_trans)->get();
        $invoice = DB::table('invoice')->where('id_trans','=',$id_trans)->first();
          $id = $id_pasien;
        //  $data = DB::select("SELECT * FROM odontogram_pasien JOIN master_simbol_odontogram WHERE odontogram_pasien.kondisi = master_simbol_odontogram.id AND odontogram_pasien.id = $id");
          $data =DB::select("SELECT * FROM odontogram_pasien JOIN master_simbol_odontogram WHERE odontogram_pasien.kondisi = master_simbol_odontogram.id AND odontogram_pasien.id_pasien = $id AND odontogram_pasien.id IN (SELECT MAX(odontogram_pasien.id) FROM odontogram_pasien GROUP BY gigi)");
          $biodata =DB::table('biodata_pasien')->where('id','=',$id)->first();
          $dataall =DB::table('odontogram_pasien')->join('master_simbol_odontogram','odontogram_pasien.kondisi','=','master_simbol_odontogram.id')->where('id_pasien','=',$id)->orderByDesc('odontogram_pasien.id')->get()->toArray(); 
          $datagigi =DB::table('master_simbol_odontogram')->get();
          $tindakan = DB::table('master_tindakan')->get();
          $layanan =DB::table('layanan')->join('master_tindakan','layanan.id_tindakan','=','master_tindakan.id')->where('no_trans','=',$id_trans)->get();
          return view('riwayat_pasien',['invoice'=>$invoice,'rp'=>$rp,'rm'=>$rm,'pm'=>$pemeriksaan,'layanan'=>$layanan,'tindakan'=>$tindakan,'idtrans'=>$id_trans,'data'=>$data,'biodata'=>$biodata,'dataall'=>$dataall,'datagigi'=>$datagigi]);
  
    }
}
