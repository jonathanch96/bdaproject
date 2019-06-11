<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HasCategories extends Model
{
 	protected $table = "brand_has_categories";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
    	'brand_id','category_id'
    ];
    protected $guarded = "id";
    public function brand(){
    	return $this->belongsTo('App\Model\Brand');
    }
    public function category(){
    	return $this->hasOne('App\Model\Categories','id','category_id');
    }
}
