<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'name' => $this->name,
            'brand' => $this->brand,
            'status' => $this->status,
            'stock' => $this->stock,
            'manufacturer_information_url' => $this->manufacturer_information_url,
            'description'=> $this->description,
            'price' => $this->price,
            'image' => new ImageResource($this->image)
        ];
    }
}
