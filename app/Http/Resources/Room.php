<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RoomType as RoomTypeResource;
class Room extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'price'=>$this->price,
            'quantity'=>$this->quantity,
            'children'=>$this->children,
            'animal'=>$this->animal,
            'smoke'=>$this->smoke,
            'image'=>$this->image_url,
            'room_type'=>new RoomTypeResource($this->room_type),
        ];
    }
}
