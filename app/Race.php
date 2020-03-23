<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function invoice()
    {
        return $this->hasOne('App\Invoice');
    }
}
