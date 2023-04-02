<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class regcontroller extends Controller
{
    public function insert(Request $req){
    	//return view('registration.reg');

    	$name = $req->input('name');
    	$password = $req->input('password');
    	$cpassword = $req->input('cpassword');
    	$email = $req->input('email');
    	$address = $req->input('address');
    	$type = $req->input('type');
    	$gender = $req->input('gender');
    	//$validity = 'a';
    	if($password == $cpassword && $name != null){
    		$data = array('name'=>$name,'password'=>$password,'email'=>$email,'address'=>$address,'type'=>$type,'gender'=>$gender,'validity'=>'a');
    	DB::table('users')->insert($data);

    	return ('Successfully registered');
    }else{
    	return ('invalid password');
    	
    }
    }
}
