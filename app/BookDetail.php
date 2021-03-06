<?php

namespace App;

use App\Book;
use App\Model;
use App\OrderDetail;

class BookDetail extends Model
{

    protected $with = ['book'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }



}
