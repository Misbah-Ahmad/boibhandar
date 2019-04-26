<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
