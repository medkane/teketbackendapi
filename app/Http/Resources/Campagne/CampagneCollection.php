<?php

namespace App\Http\Resources\Campagne;

use Illuminate\Http\Resources\Json\JsonResource;

class CampagneCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
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
            'nombreParticipants'=> $this->cotisations->count(),
            'montantCollecte'=> $this->cotisations->sum('montant'),           
            'href' =>[
                'link' => route('campagnes.show',$this->id)
            ]
        ];
    }
}
