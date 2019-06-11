<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table = "sub_categories";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
    	'sub_categories_name','category_id'
    ];
    protected $guarded = "id";
    public function category(){
    	return $this->belongsTo('App\Model\Categories');
    }
}
