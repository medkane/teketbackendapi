<?php

namespace App\models;

use App\models\Campagne;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    public function campagne()
    {
        return $this->belongsTo(Campagne::class);
    }
}
