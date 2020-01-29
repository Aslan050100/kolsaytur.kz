<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';

    public function room_types(){
    	return $this->belongsTo('App\Room_type');
    }


    public function products(){
    	return $this->belongsToMany('App\Product','pro_room','room_id','pro_id');
    }
}
