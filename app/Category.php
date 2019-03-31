<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
