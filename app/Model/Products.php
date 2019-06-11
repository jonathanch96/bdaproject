<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
     protected $table = "products";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
    	'product_name','product_model','product_image','brand_id','category_id','sub_category_id','product_description','created_at','updated_at'
    ];
    protected $guarded = "id";
    public function brand(){
    	return $this->hasOne('App\Model\Brand','id','brand_id');
    }
    public function category(){
    	return $this->hasOne('App\Model\Categories','id','category_id');
    }
    public function subCategory(){
    	return $this->hasOne('App\Model\SubCategories','id','sub_category_id');
    }
}
