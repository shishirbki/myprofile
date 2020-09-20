<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
	function index(){		
		return view('blog');
	}
}
