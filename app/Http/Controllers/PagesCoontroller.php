<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesCoontroller extends Controller
{
   public function index(){
   	return view('login.index');
   }
}
