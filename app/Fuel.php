<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    public function cars()
    {
        return $this->belongsToMany('App\Car');
    }
}
