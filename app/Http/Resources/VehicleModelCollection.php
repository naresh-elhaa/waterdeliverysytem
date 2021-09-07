<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class VehicleModelCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'modal_name' => $this->modal_name,
            'seating_capacity' => $this->seating_capacity,
            'length' => $this->length,
            'width' => $this->width,
            'delivery_support' => $this->delivery_support,
            'delivery_price' => $this->delivery_price,
            'maximum_capacity' => $this->maximum_capacity,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
