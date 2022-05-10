<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$pil)
    {
        //

        if($pil==1){

            $id_invoice = $request->id_invoice;
            $data = Invoice::find($id_invoice);
            $data->update($request->all());          
            DB::update("update antrian_pasien set status='3'  where id = '$request->id_trans'");
            return redirect('/')
            ->with('success','Pasien Selesai Diperiksa');

            // if($request->total>0){
            //     $id_invoice = $request->id_invoice;
            //     $data = Invoice::find($id_invoice);
            //     $data->update($request->all());          
            //     DB::update("update antrian_pasien set status='3'  where id = '$request->id_trans'");
            //     return redirect('/')
            //     ->with('success','Pasien Selesai Diperiksa');
            // }else{
            //     return redirect()->back()->with('error','Mohon Isi Tindakan Terlebih dahulu');
            // }
          
        }

        if($pil==2){

  
            DB::update("update invoice set status='2'  where id_trans = '$request->id_trans'");
            return redirect('/')
            ->with('success','Berhasil Disimpan');
        }

        
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
    }
}
