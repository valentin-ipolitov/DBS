<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flue extends Model
{
    public function autos()
    {
        return $this->belongsToMany('App\Auto');
    }
}
