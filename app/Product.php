<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $dates = ['created_at'];


    public function product_types(){
    	return $this->belongsTo('App\Product_type');
    }


    public function cities(){
    	return $this->belongsTo('App\City');
    }


    public function rooms(){
    	return $this->hasMany('App\Room','pro_id','id');
    }

    public function comforts(){
    	return $this->belongsToMany('App\Comfort','pro_com','pro_id','com_id');
    }
}
