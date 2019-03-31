<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }


    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function return_requests()
    {
        return $this->belongsToMany(ReturnRequest::class, 'bookdetails_returnrequest');
    }
}
