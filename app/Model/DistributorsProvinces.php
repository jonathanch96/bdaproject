<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DistributorsProvinces extends Model
{
    protected $table = "distributors_provinces";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
    	'province_name'
    ];
    protected $guarded = "id";

    public function cities(){
    	return $this->hasMany('App\Model\DistributorsCities','province_id','id')->orderBy('city_name');
    }
}
