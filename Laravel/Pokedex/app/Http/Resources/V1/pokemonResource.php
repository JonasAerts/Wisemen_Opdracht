<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\http\Resources\V1\typesResource;
use App\http\Resources\V1\spritesResource;
use App\http\Resources\V1\movesResource;
use App\http\Resources\V1\statsResource;
use App\http\Resources\V1\abilitiesResource;

class pokemonResource extends JsonResource
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
            'name' => $this->name,
            #'sprites' => array($this->sprites['front_default']),
            'sprites' => spritesResource::make($this->sprites),
            'types' => typesResource::collection($this->types),
            'heigth' => $this->height,
            'weight' => $this->weight,
            'moves' => movesResource::collection($this->moves),
            'order' => $this->order,
            'species' =>$this->species,
            'stats' => statsResource::collection($this->stats),
            'abilities' => abilitiesResource::collection($this->abilities),
            'form' =>$this->form,
        ];
    }
}
