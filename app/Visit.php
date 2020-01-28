<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //
    protected $table = 'visits';

    
    public function products(){
    	return $this->hasMany('App\Product');
    }
}
