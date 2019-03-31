<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class, 'book_publisher');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function book_details()
    {
        return $this->hasMany(BookDetail::class);
    }
}
