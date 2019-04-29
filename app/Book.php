<?php

namespace App;

use App\Cart;
use App\User;
use App\Model;
use App\Author;
use App\Review;
use App\Category;
use App\Discount;
use App\Publisher;
use App\BookDetail;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Book extends Model
{

    /* Always eager load author */
    protected $with = ['author'];
 
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

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'book_id', 'id');
    }


    public function wishListOf()
    {
        return $this->belongsToMany(User::class, 'user_wishlist', 'book_id', 'user_id');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_book', 'book_id', 'cart_id');
    }


    public function discounts()
    {
        return $this->morphMany(Discount::class, 'model');
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



    public function getDiscountAttribute()
    {
        
        return $this->discounts()->activeAndNotExpired()->first();

    }


    public function getDiscountedPriceAttribute()
    {
        if($this->hasDiscount == false) 
        {
            return $this->price;
        }

        $discount = Discount::where('type', 'global')->activeAndNotExpired()->first();

        $discountPercent = max([
            $discount == null ? 0 : $discount->percent,
            $this->discount == null ? 0 : $this->discount->percent,
            $this->author->discount == null ? 0 : $this->author->discount->percent,
            $this->publisher->discount == null ? 0 : $this->publisher->discount->percent,
        ]);

        return $this->price - ($this->price * ($discountPercent / 100.0));

    }

    public function getHasDiscountAttribute()
    {

        return (Discount::where('type', 'global')->activeAndNotExpired()->count() > 0
            || $this->discount != null
            || $this->author->hasDiscount
            || $this->publisher->hasDiscount) ?  true : false;
        
    }

    public function getPageCountAttribute()
    {
        return $this->pages == null ? 'N/A' : $this->pages;
    }

    public function getRelatedBooks()
    {
        $books = $this->categories()->with('books')->get()->flatMap(function($cat){ return $cat->books; });
        if($books->count() < 1)
        {
            $books = $this->author->books;
        }
        return $books->random(min($books->count(), env( 'RELATED_BOOK_NUM')));
    }

}
