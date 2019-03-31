<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_notification');
    }
}
