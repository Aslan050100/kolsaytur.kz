<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';

    public function room_types(){
    	return $this->belongsTo('App\Room_type','room_type_id','id');
    }


    public function product(){
    	return $this->belongsTo('App\Product','pro_id','id');
    }
}
