<?php

namespace App;

use App\Cart;
use App\User;
use App\Model;
use App\Author;
use App\Review;
use App\Category;
use App\Publisher;
use App\BookDetail;


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

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bookDetails()
    {
        return $this->hasMany(BookDetail::class);
    }

    public function wishListOf()
    {
        return $this->belongsToMany(User::class, 'user_wishlist', 'book_id', 'user_id');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_book', 'book_id', 'cart_id');
    }


    public function getStarScoreAttribute()
    {
        return intval(ceil($this->reviews()->avg('score')));        
    }

}
