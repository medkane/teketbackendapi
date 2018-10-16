<?php

namespace App\models;

use App\models\Campagne;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    protected $fillable = [
        'date',
        'identifiant',
        'montant',
        'reference',
        'source',
        'messageSource',
    ];

    public function campagne()
    {
        return $this->belongsTo(Campagne::class);
    }
}
