<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{
    public function index(){

        //$users = User::all();

        //var_dump($users);

    	return view('login.index');
    }

    public function verify(Request $req){
        
        
/*        $user = User::where('username', $req->username)
            ->where('password', $req->password)
            ->first();*/

        $user = DB::table('users')->where('name', $req->name)
            ->where('password', $req->password)
            ->first();

    	if($user){
            $req->session()->put('name', $req->name);
    		return redirect()->route('home.index');
    	}else{

            $req->session()->flash('msg', "Invalid username/password");
    		return redirect('/login');
            //return view('login.index');
    	}
    }
}
