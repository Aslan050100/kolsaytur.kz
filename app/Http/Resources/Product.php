<?php

namespace App\Http\Resources;

use App\ProductImage;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Comfort as ComfortResource;
use App\Http\Resources\Room as RoomResource;
use App\Http\Resources\ProductImage as ProductImageResource;
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
            'product_images' => ProductImageResource::collection($this->product_images),
        ];
    }
}
