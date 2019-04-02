<?php

namespace App;

use App\Model;
use App\Order;

class Transaction extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
