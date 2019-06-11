<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Products;
use App\Model\SubCategories;
use App\Model\Categories;
class EditProductController extends Controller
{
    public function showView($productId){
    	$product_data = Products::find($productId);
    	$brands = Brand::all();
		$categories = Categories::All();
    	return view('edit_products',[
    		
    		'brands'=>$brands,
            'product_data'=>$product_data,
            'categories'=>$categories
    	]);
    }
    public function editProduct($productId,Request $request){
    	$this->validate($request,[
    		'product_name'=>'required|min:3',
    		'product_model'=>'required|min:3',
    		'product_description'=>'required|min:3',
    		'myImage'=>'nullable|mimes:jpeg,png,jpg,gif',
    		'brand'=>'required',
    		'category'=>'required',
    		'subcategory'=>'required',
    	]);
    	$date = date('Y-m-d H:i:s');
    	$brand_data = Brand::find($request->brand);
    	$sub_data = SubCategories::find($request->subcategory);

    	if(empty($request->myImage)){
    		Products::find($productId)->update([
    		 'product_name'=>$request->product_name,
    		 'product_model'=>$request->product_model,
    		 'product_description'=> nl2br($request->product_description),
    		 'brand_id'=>$request->brand,
    		 'category_id'=>$request->category,
    		 'sub_category_id'=>$request->subcategory,
    		 'updated_at'=>$date
    		]);

		}else{
			$fileName = $brand_data->brand_name."_".$request->product_model.'.png';
    		$request->file("myImage")->storeAs('products',$fileName);
    		Products::find($productId)->update([
    		 'product_name'=>$request->product_name,
    		 'product_model'=>$request->product_model,
    		 'product_image'=>$fileName,
    		 'product_description'=> nl2br($request->product_description),
    		 'brand_id'=>$request->brand,
    		 'category_id'=>$request->category,
    		 'sub_category_id'=>$request->subcategory,
    		 'updated_at'=>$date
    		]);
		}
		return redirect(url('').'/manage_products');
    }
}
