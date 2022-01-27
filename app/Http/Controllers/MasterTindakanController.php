<?php

namespace App\Http\Controllers;

use App\Models\Tindakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterTindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (session()->has('userid')){
            if(session()->get('userid')!=1){
                return redirect()->action([LoginController::class, 'index']);
            }else{
                $data =DB::table('master_tindakan')->get();
                 
                return view('master_tindakan',['data'=>$data]);
            
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
        //
    
        Tindakan::create($request->all());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $data = Tindakan::find($id);
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
        //
        DB::table('master_tindakan')->where('id',$id)->delete();
        return redirect()->back()
        ->with('success','Data berhasil dihapus');
    }
}
