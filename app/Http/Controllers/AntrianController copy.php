<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    function index(){
        $data =DB::table('biodata_pasien')->get();
        $antrian =DB::table('antrian_pasien')->join('biodata_pasien','biodata_pasien.id','=','antrian_pasien.id_pasien')->get();
        return view('antrian',['data'=>$data,'antrian'=>$antrian]);
    }

    function addantrian(Request $request){

        if($request->id_pasien===null){
            return redirect()->back()
            ->with('error','Mohon pilih pasien terlebih dahulu');
        }
        $user = DB::table('antrian_pasien')->where('id_pasien','=',$request->id_pasien)->first();
        if ($user === null) {
            Antrian::create($request->all());
            return redirect()->back()
            ->with('success','Data berhasil ditambahkan');
        }else{
            return redirect()->back()
            ->with('error','Pasien sudah dalam antrian');
        }
        // $tgl = explode('/', $request->tgl_lahir);
        // $request['tgl_lahir'] = $tgl[2].'-'.$tgl[0].'-'.$tgl[1];
        /// redirect jika sukses menyimpan data
       
    }

    function hapusantrian($id){
        DB::table('antrian_pasien')->where('id',$id)->delete();
        return redirect()->back()
        ->with('success','Data berhasil dihapus');
    }
  
}
