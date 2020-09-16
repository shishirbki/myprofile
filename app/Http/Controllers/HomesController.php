<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    //
	function index(){
		
		return view('home');
	}	
}
