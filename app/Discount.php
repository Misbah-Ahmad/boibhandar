<?php

namespace App;

use App\Model;

class Discount extends Model
{
    
    public function model()
    {
        return $this->morphTo();
    }

    public function scopeActiveAndNotExpired($query)
    {
        return $query->where('status', 'active')->where('expires_on', '>=', date('Y-m-d'));
    }



}
