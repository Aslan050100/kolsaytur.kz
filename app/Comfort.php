<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comfort extends Model
{
    //
    protected $table = 'comforts';

    public function products(){
    	return $this->belongsToMany('App\Comfort','pro_com','com_id','pro_id');
    }
    public function getImageUrlAttribute(): string
    {
        $image_url = $this->image;
        if ( strpos($image_url, 'http') === 0) {
            return $image_url;
        }
        return "https://sirius.onmonday.kz/assets/images/".$image_url;
    }
}
