<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Categories;
use App\Model\HasCategories;

class ManageBrandsController extends Controller
{
     protected $redirectTo = '/home';

    
    
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function showView(){
    
    	$brands = Brand::all();
    	$categories = Categories::all();
    	
    	return view('manage_brands',[
    		
    		'brands'=>$brands,
    		'categories'=>$categories,
           
    	]);
    }
    public function addNewBrand(Request $request){
    	$this->validate($request,[
    		'brand_name'=>'required|min:3'
    	]);
    	Brand::create([
    		'brand_name'=>$request->brand_name
    	]);
    	return redirect(url('')."/manage_brands");
    }
    public function deleteBrand($brandId){
    	Brand::find($brandId)->delete();
    	return redirect(url('')."/manage_brands");

    }
    public function addNewHasCategory(Request $request,$brandId){
    	$this->validate($request,[
    		'has_category'=>'required'
    	]);
    	HasCategories::create([
    		'brand_id'=>$brandId,
    		'category_id'=>$request->has_category
    	]);
    	return redirect(url('')."/manage_brands");


    }
  	public function deleteHasCategory($hasCategoryId){
    	HasCategories::find($hasCategoryId)->delete();
    	return redirect(url('')."/manage_brands");

    }
    public function editBrand(Request $request,$brandId){
        $this->validate($request,[
            'brand_name'=>'required'
        ]);
        Brand::find($brandId)->update([
            'brand_name'=>$request->brand_name
        ]);
        return redirect(url('')."/manage_brands");
        
    }
}
