<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class FrontendController extends Controller
{
 
  public function index(){

   
   	return ' welcome user !';
  }   
  public function front(){

  	return view('Frontend.front');
  } 


public function store(Request $request){
	return $request->all();
}







    //
}
