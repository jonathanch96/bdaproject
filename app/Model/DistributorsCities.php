<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DistributorsCities extends Model
{
    protected $table = "distributors_city";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
    	'city_name','province_id'
    ];
    protected $guarded = "id";

    public function province(){
    	return $this->belongsTo('App\Model\DistributorsProvinces');
    }
}
