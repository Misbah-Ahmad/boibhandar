<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_publisher');
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_publisher');
    }
}
