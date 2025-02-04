<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->firstName." ".$this->lastName,
            'nationality'=>$this->nationality,
            'expLevel'=>$this->experienceLevel,
            'numOfSlots'=>$this->slotsNum,
            'wallet'=>new WalletResource($this->walletRelation)
        ];
    }
}
