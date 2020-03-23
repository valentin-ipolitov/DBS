<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function fuel()
    {
        return $this->hasOne('App\Fuel');
    }
}
