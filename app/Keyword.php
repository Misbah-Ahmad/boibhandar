<?php

namespace App;

use App\Book;
use App\Model;

class Keyword extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_keyword', 'keyword_id', 'book_id');
    }
}
