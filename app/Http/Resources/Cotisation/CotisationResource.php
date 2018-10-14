<?php

namespace App\Http\Resources\Cotisation;

use Illuminate\Http\Resources\Json\JsonResource;

class CotisationResource extends JsonResource
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
            'date' => $this->date,
            'montant' => $this->montant,
            'reference' => $this->reference,
            'source' => $this->source,
            'identifiant' => $this->identifiant,
            'messageSource' => $this->messageSource             
            
        ];
    }
}
