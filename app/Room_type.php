<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_type extends Model
{
    //
    protected $table = 'room_types';

    public function rooms(){
    	return $this->hasMany('App\Room');
    }
}
}
