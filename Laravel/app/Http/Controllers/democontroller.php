<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\DB;
use App\product;
class democontroller extends Controller
{
	
    public function category(Request $request)
    {
    	$data=product::paginate(10);
    	return view('layout.form')->with('data',$data);
    }
}
