<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Categories;
use App\Model\SubCategories;
class ManageCategoriesController extends Controller
{
     protected $redirectTo = '/home';

  
    
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function showView(){
    	$categories = Categories::all();
    	$brands = Brand::all();
    	
    	return view('manage_categories',[
    		'categories'=>$categories,
    		'brands'=>$brands,
    		
           
    	]);
    }
    public function addNewCategory(Request $request){
    	$this->validate($request,[
    		'category_name'=>'required|min:3'
    	]);
    	Categories::create([
    		'category_name'=>$request->category_name
    	]);
    	return redirect(url('')."/manage_categories");
    }
    public function deleteCategory($categoryId){
    	Categories::find($categoryId)->delete();
    	return redirect(url('')."/manage_categories");
    }
 	public function addNewSubCategory(Request $request,$categoryId){
		$this->validate($request,[
			'sub_category'=>'required|min:3'
		]);
		SubCategories::create([
			'category_id'=>$categoryId,
			'sub_categories_name'=>$request->sub_category
		]);
		return redirect(url('')."/manage_categories");


	}
	public function deleteSubCategory($subCategoryId){
    	SubCategories::find($subCategoryId)->delete();
    	return redirect(url('')."/manage_categories");

    }
     public function editCategory(Request $request,$categoryId){
        $this->validate($request,[
            'category_name'=>'required'
        ]);
        Categories::find($categoryId)->update([
            'category_name'=>$request->category_name
        ]);
        return redirect(url('')."/manage_categories");
        
    }
    public function editSubCategory(Request $request,$subCategoryId){
        $this->validate($request,[
            'sub_categories_name'=>'required'
        ]);
        SubCategories::find($subCategoryId)->update([
            'sub_categories_name'=>$request->sub_categories_name
        ]);
        return redirect(url('')."/manage_categories");
        
    }
}
