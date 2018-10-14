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
            'longDescription' => $this->longDescription,
            'dateDebut' => $this->dateDebut,
            'dateFin' => $this->dateFin,
            'nombreParticipants'=> $this->cotisations->count(),
            'montantCollecte'=> $this->cotisations->sum('montant'),           
            'href' =>[
                'cotisations' => route('cotisations.index',$this->id)
            ]
        ];
    }
}
