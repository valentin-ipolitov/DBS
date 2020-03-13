<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function facture()
    {
        return $this->hasOne('App\Facture');
    }
}
