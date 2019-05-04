<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    

    public function show(Book $book)
    {
        
        $related_books = $book->getRelatedBooks();
        $reviews = $book->reviews;

        return view('books.show', compact([
            'book', 'related_books', 'reviews',
        ]));

    }
}
