<?php

namespace App\models;

use App\models\Cotisation;
use Illuminate\Database\Eloquent\Model;

class Campagne extends Model
{
    protected $fillable = [
        'titre', 'type',
        'shortDescription',
        'longDescription',
        'dateDebut',
        'dateFin'
    ];

    public function cotisations()
    {
        return $this->hasMany(Cotisation::class);
    }
}
