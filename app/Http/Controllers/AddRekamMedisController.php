<?php

namespace App\Http\Controllers;

use App\Models\RekamGigi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddRekamMedisController extends Controller
{
    //
    function index($idpasien,$idgigi){
       
        $biodata =DB::table('biodata_pasien')->where('norm','=',$idpasien)->first();
        $datagigi =DB::table('master_simbol_odontogram')->get();
        $data =DB::table('odontogram_pasien')->join('master_simbol_odontogram','odontogram_pasien.kondisi','=','master_simbol_odontogram.id')->where('id_pasien','=',$idpasien)->where('gigi','=',$idgigi)->orderByDesc('odontogram_pasien.id')->get()->toArray(); 
        return view('add_rekam_medis',['biodata'=>$biodata,'idgigi'=>$idgigi,'datagigi'=>$datagigi,'data'=>$data]);
    }

    function tambah(Request $request){
 
        $request['tanggal'] = Carbon::now()->format('Y-m-d');
        /// redirect jika sukses menyimpan data
        RekamGigi::create($request->all());
        $url = url('/');

        return redirect()->back()
        ->with('success','Data berhasil ditambahkan');
        // return redirect("/odontogram/$request->id_pasien")
        // ->with('success','Data berhasil ditambahkan');
    }
}
