<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class versionGroupDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'move_learn_method' => $this->move_learn_method,
            'version_group' => $this->version_group,
            'level_learned_at' => $this->level_learned_at,
        ];
    }
}
