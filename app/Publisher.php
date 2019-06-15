<?php

namespace App;

use App\Book;
use App\Model;
use App\Author;
use App\Discount;

class Publisher extends Model
{
//    protected $with = ['discounts'];

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_publisher');
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function discounts()
    {
        return $this->morphMany(Discount::class, 'model');
    }

    public function getDiscountAttribute()
    {
        return $this->discounts()->activeAndNotExpired()->first();
    }
 
    public function getHasDiscountAttribute()
    {
        return $this->discount != null;        
    }

}
