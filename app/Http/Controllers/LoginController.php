<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
class LoginController extends Controller
{
  
    public function index(){

       
        if (session()->has('userid')){
            return redirect("/");
        }else {
            return view('login'); 
        }
      
        
    }

    public function check(Request $request){
        
        $errors = new MessageBag;
        $user = DB::table('user')->where('username','=',$request->username)->where('password','=',$request->password)->first();
    
        if ($user === null) {
            $errors = new MessageBag(['password' => ['Username atau password salah.']]);
            return redirect()->action([LoginController::class, 'index'])->withErrors($errors);
        }
        else{

            session()->put('userid', $user->id);
            session()->put('level', $user->level);
            session()->put('nama', $user->nama);
            session()->put('username', $user->username);
            return redirect("/");
            
        }

  
    }

    public function keluar(){
       
        session()->forget('userid');
        session()->forget('nama');
        return redirect()->action([LoginController::class, 'index']);
    
  
    }
}
