<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BuildingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       // $this->id=( $this->id != null)? $this->id:0;
        return [
            'id'=>$this->Id,
            'name'=>$this->building_name,
            'empNum'=>$this->building_employees_number,
            'loation'=>$this->building_location,
            'price'=>$this->building_price,
            'level'=>$this->building_level,
            'slots'=>$this->building_slots

        ];
    }
}
