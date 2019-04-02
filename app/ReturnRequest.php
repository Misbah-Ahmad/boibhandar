<?php

namespace App;

use App\Model;
use App\OrderDetail;

class ReturnRequest extends Model
{

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

}
