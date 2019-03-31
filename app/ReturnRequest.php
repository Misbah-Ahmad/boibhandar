<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnRequest extends Model
{
    public function book_details()
    {
        return $this->belongsToMany(BookDetail::class, 'bookdetails_returnrequest');
    }
}
