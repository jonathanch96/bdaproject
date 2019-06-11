<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brands";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
    	'brand_name'
    ];
    protected $guarded = "id";
    public function hasCategories(){
    	return $this->hasMany('App\Model\HasCategories','brand_id','id');
    }

}
