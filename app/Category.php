<?php

namespace App;

use App\Book;
use App\Model;
use App\Author;

class Category extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_category');
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category');
    }
}
