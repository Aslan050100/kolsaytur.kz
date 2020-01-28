<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $table = 'ratings';


    public function products(){
    	return $this->hasMany('App\Product');
    } 
}
