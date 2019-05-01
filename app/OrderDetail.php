<?php

namespace App;

use App\Order;
use App\BookDetail;
use App\Model;
use App\Book;

class OrderDetail extends Model
{


    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
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
