<?php

namespace App;

use App\Order;
use App\BookDetail;
use App\Model;

class OrderDetail extends Model
{
    public function bookDetails()
    {
        return $this->belongsTo(BookDetail::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function returnRequests()
    {
        return $this->belongsToMany(ReturnRequest::class);
    }

}
