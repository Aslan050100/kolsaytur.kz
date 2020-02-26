<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MainRoom as MainRoomResource;

class MainProduct extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'popular' => $this->popular,
            'description' => $this->description,
            'map' => $this->map,
            'rating' => $this->rating,
            'visit' => $this->visit,
            'image' => $this->image,
            'rooms'=>MainRoomResource::collection($this->rooms),
            'max_price'=>$this->rooms->max('price'),
            'min_price'=>$this->rooms->min('price'),
        ];
    }
}
