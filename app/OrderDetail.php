<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function book_detail()
    {
        return $this->belongsTo(BookDetail::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
