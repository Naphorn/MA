<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable=['IP','TempCool','Humidity','TempRoom','VoltCool','CurrentCool','CurrentHot','WindSpeed','Performance','PowerStatus','created_at'];
}
