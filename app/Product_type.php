<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    //
    protected $table = 'product_types';

    public function products(){
    	return $this->hasMany('App\Product');
    }
}
