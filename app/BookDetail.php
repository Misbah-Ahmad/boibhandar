<?php

namespace App;

use App\Book;
use App\Model;
use App\OrderDetail;

class BookDetail extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }


    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }


}
