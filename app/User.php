<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function employee()
    {
        return $this->hasOne('App\Employee');
    }

    public function monthInvoices()
    {
        return $this->hasMany('App\MonthInvoice');
    }

    public function drivingLicense()
    {
        return $this->hasOne('App\DrivingLicense');
    }

    public function races()
    {
        return $this->hasMany('App\Race');
    }

    public function car()
    {
        return $this->hasOne('App\Car');
    }
}
