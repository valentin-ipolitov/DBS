<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function flue()
    {
        return $this->hasOne('App\Flue');
    }
}
