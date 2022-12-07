<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class spritesResource extends JsonResource
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
            'id' => $this->id,
            'front_default' => $this->front_default,
            'front_female' => $this->front_female,
            'front_shiny' => $this->front_shiny,
            'front_shiny_female' => $this->front_shiny_female,
            'back_default' => $this->back_default,
            'back_female' => $this->back_female,
            'back_shiny' => $this->back_shiny,
            'back_shiny_female' => $this->back_shiny_female,
        ];
    }
}
