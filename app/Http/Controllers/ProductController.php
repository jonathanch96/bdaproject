<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Products;
use App\Model\SubCategories;

class ProductController extends Controller
{
    public function showView($brand_name){
    	$brand_data = Brand::where('brand_name','=',$brand_name)->first();
        $products = Products::all();
    	$brands = Brand::all();
    	if(is_null($brand_data)){
    		return redirect(url('')."/home");
    	}
    	return view('products',[
    		'brand_data'=>$brand_data,
    		'brands'=>$brands,
            'products'=>$products
    	]);
    }
    public function redirect(){
    	return redirect(url('')."/home");

    }
    public function showAll($brand_name,$sub_categories_name){
        $sub_category_data = SubCategories::where('sub_categories_name','=',$sub_categories_name)->first();
        $brand_data = Brand::where('brand_name','=',$brand_name)->first();
        if(is_null($brand_data)){
            return redirect(url('')."/home");
        }
         if(is_null($sub_category_data)){
            return redirect(url('')."/home");
        }
        $products = Products::where('brand_id','=',$brand_data->id)->where('sub_category_id','=',$sub_category_data->id)->get();

        $brands = Brand::all();
        
        return view('all_products',[
            'brand_data'=>$brand_data,
            'brands'=>$brands,
            'products'=>$products,
            'sub_category_data'=>$sub_category_data
        ]);
    }
}
