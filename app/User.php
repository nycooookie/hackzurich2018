<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    public function bundles()
    {
        return $this->hasMany(Bundle::class);
    }

}
