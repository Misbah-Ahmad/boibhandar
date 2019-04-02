<?php

namespace App;

use App\User;
use App\Model;

class PromoCode extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_promo_code', 'promo_code_id', 'user_id');
    }
}
