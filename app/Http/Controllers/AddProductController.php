<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Categories;
use App\Model\SubCategories;
use App\Model\Products;

class AddProductController extends Controller
{
     public function showView(){
     	$categories = Categories::All();
    	$brands = Brand::all();
    	return view('add_new_product',[
    		'brands'=>$brands,
    		'categories'=>$categories
    	]);
    }
    public function addProduct(Request $request){
    	$this->validate($request,[
    		'product_name'=>'required|min:3',
    		'product_model'=>'required|min:3',
    		'product_description'=>'required|min:3',
    		'myImage'=>'required|mimes:jpeg,png,jpg,gif',
    		'brand'=>'required',
    		'category'=>'required',
    		'subcategory'=>'required',
    	]);

    	$date = date('Y-m-d H:i:s');
    	$brand_data = Brand::find($request->brand);
    	$sub_data = SubCategories::find($request->subcategory);
    	$fileName = $brand_data->brand_name."_".$request->product_model.'.png';
    	$request->file("myImage")->storeAs('products',$fileName);
    	Products::create([
    		 'product_name'=>$request->product_name,
    		 'product_model'=>$request->product_model,
    		 'product_image'=>$fileName,
    		 'product_description'=> nl2br($request->product_description),
    		 'brand_id'=>$request->brand,
    		 'category_id'=>$request->category,
    		 'sub_category_id'=>$request->subcategory,
    		 'created_at'=>$date,
    		 'updated_at'=>$date
    	]);
    	return redirect(url('').'/manage_products');

    }
}
