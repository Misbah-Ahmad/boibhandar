<?php

namespace App;

use App\User;
use App\Model;
use App\OrderDetail;
use App\Transaction;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
