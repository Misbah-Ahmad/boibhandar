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

    public function getHasSaleAttribute()
    {
        return false;
    }

    public function getThumbAttribute()
    {
        return $this->thumb_link == null ? env( 'DEFAULT_BOOK_THUMB', '') : $this->thumb_link;
    }

    public function getImageAttribute()
    {
        return $this->image_link == null ? env('DEFAULT_BOOK_IMAGE', '') : $this->image_link;
    }    

    public function getMinPriceAttribute()
    {
        return $this->bookDetails()->min('price');
    }

    public function getMaxPriceAttribute()
    {
        return $this->bookDetails()->max('price');
    }    

}
