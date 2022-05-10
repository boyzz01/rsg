<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemeriksaanController extends Controller
{

    function antrian(){
        $antrian = DB::select("SELECT antrian_pasien.*,biodata_pasien.nama FROM `antrian_pasien` JOIN biodata_pasien WHERE antrian_pasien.id_pasien = biodata_pasien.id");
      //  $antrian =DB::table('antrian_pasien')->Join('biodata_pasien','biodata_pasien.id','=','antrian_pasien.id_pasien')->where('antrian_pasien.status','=','1')->get();
        return view('antrian_pemeriksaan',['antrian'=>$antrian]);
    }
    function index($id_trans,$id_pasien){


      $check =DB::table('riwayat_medis')->where('id_trans','=',$id_trans)->first();
      $check2 =DB::table('pemeriksaan')->where('id_trans','=',$id_trans)->first();
       $check3 =DB::table('invoice')->where('id_trans','=',$id_trans)->first();

      if($check==null){
        DB::insert('insert into riwayat_medis 
        (id_trans, id_pasien,tgl)  values 
        (?,?,?)',[$id_trans,$id_pasien,now()]);
  
      }

      if($check2==null){
        
        DB::insert('insert into pemeriksaan
        (id_trans, id_pasien,tgl)  values 
        (?,?,?)',[$id_trans,$id_pasien, date('Y-m-d H:m:s')]);

      }

      if($check3==null){

        DB::insert('insert into invoice
        (id_trans, id_pasien) values 
        (?,?)',[$id_trans,$id_pasien]);
      }
    
      

      $url = "pemeriksaan/$id_trans/$id_pasien";
      $rm=DB::table('riwayat_medis')->where('id_trans','=',$id_trans)->first();
      $pemeriksaan=DB::table('pemeriksaan')->where('id_trans','=',$id_trans)->first();
      $antrian=DB::table('antrian_pasien')->where('id','=',$id_trans)->first();
      $rp = DB::table('rencana_perawatan')->where('id_trans','=',$id_trans)->get();
      $invoice = DB::table('invoice')->where('id_trans','=',$id_trans)->first();
        $id = $id_pasien;
      //  $data = DB::select("SELECT * FROM odontogram_pasien JOIN master_simbol_odontogram WHERE odontogram_pasien.kondisi = master_simbol_odontogram.id AND odontogram_pasien.id = $id");
      $data =DB::select("SELECT * FROM odontogram_pasien JOIN master_simbol_odontogram ON odontogram_pasien.kondisi = master_simbol_odontogram.id WHERE odontogram_pasien.id_pasien = '$id' ORDER BY odontogram_pasien.id ASC");
      //$data =DB::select("SELECT * FROM odontogram_pasien JOIN master_simbol_odontogram WHERE odontogram_pasien.kondisi = master_simbol_odontogram.id AND odontogram_pasien.id_pasien = $id AND odontogram_pasien.id IN (SELECT MAX(odontogram_pasien.id) FROM odontogram_pasien GROUP BY gigi)");
        $biodata =DB::table('biodata_pasien')->where('norm','=',$id)->first();
        $dataall =DB::table('odontogram_pasien')->join('master_simbol_odontogram','odontogram_pasien.kondisi','=','master_simbol_odontogram.id')->where('id_pasien','=',"$id")->orderByDesc('odontogram_pasien.id')->get()->toArray(); 
        $datagigi =DB::table('master_simbol_odontogram')->get();
        $tindakan = DB::table('master_tindakan')->get();
        $layanan =DB::table('layanan')->join('master_tindakan','layanan.id_tindakan','=','master_tindakan.id')->where('no_trans','=',$id_trans)->get();
        return view('pemeriksaan_pasien',['url'=>$url,'antrian'=>$antrian,'invoice'=>$invoice,'rp'=>$rp,'rm'=>$rm,'pm'=>$pemeriksaan,'layanan'=>$layanan,'tindakan'=>$tindakan,'idtrans'=>$id_trans,'data'=>$data,'biodata'=>$biodata,'dataall'=>$dataall,'datagigi'=>$datagigi]);
    }
}
