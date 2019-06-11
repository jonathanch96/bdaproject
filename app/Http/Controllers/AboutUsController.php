<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;

class AboutUsController extends Controller
{
    public function showView(){
    	$brands = Brand::all();
    	return view('about_us',[
    		'brands'=>$brands
    	]);
    }
}
