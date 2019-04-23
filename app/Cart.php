<?php

namespace App;

use App\Book;
use App\User;
use App\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'cart_book', 'cart_id', 'book_id')->as('counter')->withPivot('count');
    }

    public function hasBook(Book $book)
    {
        return $this->books->contains($book);        
    }

}
