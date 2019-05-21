<?php

namespace App;

use App\Book;
use App\Model;
use App\Category;
use App\Discount;
use App\Publisher;

class Author extends Model
{

//    protected $with = ['discounts'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'author_book', 'book_id', 'author_id');
    }

    public function translatedBooks()
    {
        return $this->belongsToMany(Book::class, 'book_translator', 'book_id', 'translator_id');
    }

    public function editedBooks()
    {
        return $this->belongsToMany(Book::class, 'book_editor', 'book_id', 'editor_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'author_category');
    }

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class, 'author_publisher');
    }
   
    public function discounts()
    {
        return $this->morphMany(Discount::class, 'model');
    }

    public function getDiscountAttribute()
    {
        return $this->discounts()->activeAndNotExpired()->first();
    }

    public function getImageAttribute()
    {

        return $this->image_link == null ? env('DEFAULT_AUTHOR_IMAGE') : $this->image_link;

    }

}
