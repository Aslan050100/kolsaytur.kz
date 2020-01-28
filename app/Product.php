<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';


    public function product_types(){
    	return $this->belongsTo('App\Product_type');
    }


    public function cities(){
    	return $this->belongsTo('App\City');
    }

    public function ratings(){
    	return $this->belongsTo('App\Rating');
    }


    public function visits(){
    	return $this->belongsTo('App\Visit');
    }

    public function rooms(){
    	return $this->belongsToMany('App\Room','pro_room','pro_id','room_id');
    }

    public function comforts(){
    	return $this->belongsToMany('App\Comfort','pro_com','pro_id','com_id');
    }
}
