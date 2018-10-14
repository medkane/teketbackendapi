<?php

namespace App\Http\Resources\Campagne;

use Illuminate\Http\Resources\Json\JsonResource;

class CampagneResource extends JsonResource
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
            'titre' => $this->titre,
            'type' => $this->type,
            'shortDescription' => $this->shortDescription,
            'dateDebut' => $this->dateDebut,
            'dateFin' => $this->dateFin
        ];
    }
}
