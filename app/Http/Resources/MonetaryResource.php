<?php

namespace App\Http\Resources;

use App\Models\RevenueGroupTarget;
use Illuminate\Http\Resources\Json\JsonResource;

class MonetaryResource extends JsonResource
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
            'nested_target_details' => RevenueGroupTargetResource::collection($this->whenLoaded('revenueGroupTargets')),
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
        ];
    }
}
