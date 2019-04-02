<?php

namespace App;

use App\User;
use App\Model;

class Notification extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class,'user_notification')->withTimestamps();
    }
}
