<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    public function product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
    public function room(){
        return $this->belongsTo('App\Room','room_id','id');
    }
}
