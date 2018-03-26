<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class logincontroller extends Controller
{
    
    public function getIndex()
    {
        //
       return view('login/login');

    }
    public function postDologin(Request $request){
        $nickname=$request->nickname;
        $password=$request->password;
       $res=DB::table('user')
            ->where('userName', $nickname)
            ->where('userpassword',$password)
            ->first();
        if(!$res){
            echo "no";
        }else{

            $request->session()->put('uid',$res['id']);
            return redirect('/user');
        }
    }
  
}
