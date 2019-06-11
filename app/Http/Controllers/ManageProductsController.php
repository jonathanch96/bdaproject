<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Products;
use App\Model\SubCategories;
use App\Model\Categories;
class ManageProductsController extends Controller
{
	 protected $redirectTo = '/home';
    
    public function __construct()
    {
        $this->middleware('auth');
    }

  	public function showView(){
    
    	$brands = Brand::all();
        $products = Products::orderBy("id","DESC")->take(10)->get();
        $categories = Categories::all();
    	$subCategories = SubCategories::all();
    	return view('manage_products',[
    		
            'brands'=>$brands,
            'products'=>$products,
            'categories'=>$categories,
    		'subCategories'=>$subCategories,
    		
           
    	]);
    }
    public function showViewWithParameter(Request $request){
        $param_brand = false;
        $param_category = false;
        $param_subcategory = false;
        if($request->brand != "0"){
            $param_brand = true;
        }
        if($request->category != "0"){
            $param_category = true;
        }
        if($request->sub_category != "0"){
            $param_subcategory = true;
        }
        $old_data =[
            'brand'=>$request->brand,
            'category'=>$request->category,
            'sub_category'=>$request->sub_category,
        ];

        $brands = Brand::all();
        $products = Products::all();
        $categories = Categories::all();
        $subCategories = SubCategories::all();
        if($param_brand){
            $products = $products->where("brand_id","=",$request->brand);
        }
        if($param_category){
            $products = $products->where("category_id","=",$request->category);
        }
        if($param_subcategory){
            $products = $products->where("sub_category_id","=",$request->sub_category);
        }
        return view('manage_products',[
            
            'brands'=>$brands,
            'products'=>$products,
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'old_data'=>$old_data

            
           
        ]);
    }
    public function deleteProduct($productId){
        Products::find($productId)->delete();
        return redirect(url('')."/manage_products");
    }
}
