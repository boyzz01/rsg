<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('userid')){
            if(session()->get('userid')!=1){
                return redirect()->action([LoginController::class, 'index']);
            }else{
                $data =DB::table('biodata_pasien')->get();
                 
                return view('master_pasien',['data'=>$data]);
            
            }
           
        }else {
            return redirect()->action([LoginController::class, 'index']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         
        $tgl = explode('/', $request->tgl_lahir);
        $request['tgl_lahir'] = $tgl[2].'-'.$tgl[0].'-'.$tgl[1];
        /// redirect jika sukses menyimpan data
        Pasien::create($request->all());
        return redirect()->back()
        ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $id=$request['id'];
       
        $tgl = explode('/', $request->tgl_lahir);
        $request['tgl_lahir'] = $tgl[2].'-'.$tgl[0].'-'.$tgl[1];
        $data = Pasien::find($id);
        $data->update($request->all());
        return redirect()->back()
        ->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('biodata_pasien')->where('id',$id)->delete();
        return redirect()->back()
        ->with('success','Data berhasil dihapus');
    }
}
