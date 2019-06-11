<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@showView');
Route::get('home','IndexController@showView');
Route::get('about_us','AboutUsController@showView');
Route::get('distributors','DistributorsController@showView');
Route::get('products','ProductController@redirect');
Route::get('products/{brand_name}','ProductController@showView');
Route::get('products/{brand_name}/{sub_categories_name}','ProductController@showAll');
Route::get('detail_product/{productId}','DetailProductController@showView');

Route::get('manage_brands','ManageBrandsController@showView');
Route::post('manage_brands_add_new','ManageBrandsController@addNewBrand');
Route::get('manage_brands_delete/{brandId}','ManageBrandsController@deleteBrand');
Route::post('manage_brands_add_new_has_category/{brandId}','ManageBrandsController@addNewHasCategory');
Route::get('manage_brands_delete_has_category/{hasCategoryId}','ManageBrandsController@deleteHasCategory');
Route::post('manage_brands_edit_brand/{brandId}','ManageBrandsController@editBrand');


Route::get('manage_categories','ManageCategoriesController@showView');
Route::post('manage_categories_add_new','ManageCategoriesController@addNewCategory');
Route::get('manage_categories_delete/{categoryId}','ManageCategoriesController@deleteCategory');
Route::post('manage_categories_add_new_sub_category/{categoryId}','ManageCategoriesController@addNewSubCategory');
Route::get('manage_brands_delete_sub_category/{subCategoryId}','ManageCategoriesController@deleteSubCategory');
Route::post('manage_categories_edit_category/{categoryId}','ManageCategoriesController@editCategory');
Route::post('manage_categories_edit_sub_category/{subCategoryId}','ManageCategoriesController@editSubCategory');


Route::get('manage_products','ManageProductsController@showView');
Route::post('manage_products','ManageProductsController@showViewWithParameter');
Route::get('manage_products_delete_{productId}','ManageProductsController@deleteProduct');

Route::get("edit_products/{productId}","EditProductController@showView");
Route::post("edit_products/{productId}","EditProductController@editProduct");

Route::get('add_new_product','AddProductController@showView');
Route::post('add_new_product','AddProductController@addProduct');


Route::get('logout',function(){
	Auth::logout();
	return redirect(url('')."/home");
});

//cd c:/xampp/htdocs/Project/bdaproject
Auth::routes();


