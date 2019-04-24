<?php

namespace App;

use App\Order;
use App\BookDetail;
use App\Model;

class OrderDetail extends Model
{

    protected $with = ['bookDetail'];

    public function bookDetail()
    {
        return $this->belongsTo(BookDetail::class, 'book_detail_id', 'id');
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
