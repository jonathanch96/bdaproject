<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
    	'category_name'
    ];
    protected $guarded = "id";
    public function subCategories(){
    	// target dl baru id di table ini
    	return $this->hasMany('App\Model\SubCategories','category_id','id')->orderBy("sub_categories_name");
    }
    
}
