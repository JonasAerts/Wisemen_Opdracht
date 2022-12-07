<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\http\Resources\V1\versionGroupDetailsResource;

class movesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'move' => $this->move,
            'version_group_details' => versionGroupDetailsResource::collection($this->version_group_details),
        ];
    }
}
