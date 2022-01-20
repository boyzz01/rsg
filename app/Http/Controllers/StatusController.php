<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    function UpdateStatus($id){
        DB::insert('insert into antrian_pasien
        (id_pasien,mulai_antri,status)  values 
        (?,?,?)',[$id,date('Y-m-d H:m:s'),'1']);

        DB::update('update biodata_pasien set status_antrian="1" where id = '
        .$id.'');

        return redirect()->back()
        ->with('success','Pasien masuk antrian');
        //
    }
}
