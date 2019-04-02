<?php

namespace App;

use App\Book;
use App\Model;
use App\Author;

class Publisher extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_publisher');
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
