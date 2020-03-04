<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Comfort as ComfortResource;
use App\Http\Resources\Room as RoomResource;
class Product extends JsonResource
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
            'slug' => $this->slug,
            'rating' => $this->rating,
            'visit' => $this->visit,
            'image' => $this->image_url,
            'comforts' => ComfortResource::collection($this->comforts),
            'rooms'=>RoomResource::collection($this->rooms),

        ];
    }
}
