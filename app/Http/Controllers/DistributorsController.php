<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\DistributorsProvinces;

class DistributorsController extends Controller
{
    public function showView(){
    	$brands = Brand::all();
    	$distributors_provinces = DistributorsProvinces::orderBy('province_name')->get();
    	return view('distributors',[
    		'brands'=>$brands,
    		'distributors_provinces'=>$distributors_provinces
    	]);
    }
}
