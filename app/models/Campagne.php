<?php

namespace App\models;

use App\models\Cotisation;
use Illuminate\Database\Eloquent\Model;

class Campagne extends Model
{
    public function cotisations()
    {
        return $this->hasMany(Cotisation::class);
    }
}
