<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;

class IndexController extends Controller
{
    public function showView(){
    	$brands = Brand::all();
    	return view('index',[
    		'brands'=>$brands
    	]);
    }
}
