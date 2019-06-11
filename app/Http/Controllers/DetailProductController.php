<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Products;

class DetailProductController extends Controller
{
     public function showView($productId){
    	$brands = Brand::all();
    	$product_data = Products::find($productId);
    	if(is_null($product_data)){
    		return redirect(url('')."/home");
    	}
    	return view('detail_product',[
    		'brands'=>$brands,
    		'product_data'=>$product_data
    	]);
    }
}
