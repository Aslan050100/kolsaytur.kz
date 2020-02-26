<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';

    public function room_type(){
    	return $this->belongsTo('App\Room_type','room_type_id','id');
    }


    public function product(){
    	return $this->belongsTo('App\Product','pro_id','id');
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
