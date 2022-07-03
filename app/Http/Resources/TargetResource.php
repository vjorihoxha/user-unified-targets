<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TargetResource extends JsonResource
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
            'amount' => $this->amount,
            'target_date' => $this->target_date,
            'description' => $this->description,
            'user' => new UserResource($this->whenLoaded('user')),
            'targets' => [
                'type' => new TargetTypeResource($this->whenLoaded('targetType')),
                'details' => $this->when($this->targetType->type === 'monetary', function (){
                    return MonetaryResource::collection($this->whenLoaded('monetaries'));
                }, function () {
                    return NumericResource::collection($this->whenLoaded('numerics'));
                }),
            ],
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
        ];
    }
}
