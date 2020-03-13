<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function employee()
    {
        return $this->hasOne('App\Employee');
    }

    public function monthFactures()
    {
        return $this->hasMany('App\MonthFacture');
    }

    public function drivingLicense()
    {
        return $this->hasOne('App\DrivingLicense');
    }

    public function races()
    {
        return $this->hasMany('App\Race');
    }

    public function auto()
    {
        return $this->hasOne('App\Auto');
    }
}
