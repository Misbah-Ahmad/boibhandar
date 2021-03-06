<?php

namespace App;

use App\Cart;
use App\User;
use App\Model;
use App\Author;
use App\Review;
use App\Keyword;
use App\Category;
use App\Discount;
use App\Publisher;

use App\BookDetail;
use Exception;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use Searchable;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array = [
            'id' => $array['id'],
            'keywords' => implode(' ', $this->keywords->map(function ($key) {
                return $key->name;
            })->toArray()),
        ];

/*
         $array['categories'] = $this->categories->map(function($cat){
            return $cat->name;
        })->toArray();

        if(count($array['categories']) > 0)
        {
            $array['categories'] = implode(' ', $array['categories']);
        }

        $array['authors'] = $this->authors->map(function($auth){
            return $auth->name;
        })->toArray();

        $array['translators'] = $this->translators->map(function($t){
            return $t->name;
        })->toArray();
        $array['editors'] = $this->editors->map(function($e){
            return $e->name;
        })->toArray();



        $array['authors'] = implode(' ', $array['authors']);

        $array['translators'] = implode(' ', $array['translators']);

        $array['editors'] = implode(' ', $array['editors']);
 */
        return $array;

    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'book_keyword', 'book_id', 'keyword_id');

    }


    /* Always eager load author */
    //protected $with = ['authors', 'translators', 'editors'];
 
    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_book', 'book_id', 'author_id');
    }

    public function translators()
    {
        return $this->belongsToMany(Author::class, 'book_translator', 'book_id', 'translator_id');
    }

    public function editors()
    {
        return $this->belongsToMany(Author::class, 'book_editor', 'book_id', 'editor_id');
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
        return $this->image_link == null ? env( 'DEFAULT_BOOK_THUMB', '') : str_replace('books', 'thumbs', $this->image_link);
    }

    public function getImageAttribute()
    {
        return $this->image_link == null ? env('DEFAULT_BOOK_IMAGE', '') : $this->image_link;
    }

    // public function getMinPriceAttribute()
    // {
    //     return $this->bookDetails()->min('price');
    // }

    // public function getMaxPriceAttribute()
    // {
    //     return $this->bookDetails()->max('price');
    // }    



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
            //$this->author->discount == null ? 0 : $this->author->discount->percent,
            $this->publisher->discount == null ? 0 : $this->publisher->discount->percent,
        ]);

        return $this->price - ($this->price * ($discountPercent / 100.0));

    }

    public function getDiscountPercentAttribute()
    {
        if($this->hasDiscount == false) 
        {
            return 0;
        }

        $discount = Discount::where('type', 'global')->activeAndNotExpired()->first();

        return intval(max([
            $discount == null ? 0 : $discount->percent,
            $this->discount == null ? 0 : $this->discount->percent,
            //$this->author->discount == null ? 0 : $this->author->discount->percent,
            $this->publisher->discount == null ? 0 : $this->publisher->discount->percent,
        ]));

    }

    public function getHasDiscountAttribute()
    {

        return (Discount::where('type', 'global')->activeAndNotExpired()->count() > 0
            || $this->discount != null
            //|| $this->author->hasDiscount
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

    public function getComputedPriceAttribute()
    {
        return $this->hasDiscount ? $this->discountedPrice : $this->price;
    }

    public function anchoredAuthors()
    {
        $authors = [];

        foreach($this->authors as $author)
        {
            array_push($authors, 
                '<a class="product-meta-author" href="' . route('authors.show', $author->id) . '">' . $author->name . '</a>');
        }
        return $authors;
    }
    public function anchoredEditors()
    {
        $editors = [];

        foreach($this->editors as $editor)
        {
            array_push($editors, 
                '<a class="product-meta-author" href="' . route('authors.show', $editor->id) . '">' . $editor->name . '</a>');
        }
        return $editors;
    }
    public function anchoredTranslators()
    {
        $translators = [];

        foreach($this->translators as $translator)
        {
            array_push($translators, 
                '<a class="product-meta-translator" href="' . route('authors.show', $translator->id) . '">' . $translator->name . '</a>');
        }
        return $translators;
    }

    public function authorList()
    {
        $authors = [];

        foreach($this->authors as $author)
        {
            array_push($authors, $author->name);
        }
        return $authors;
    }

    public function editorList()
    {
        $editors = [];

        foreach($this->editors as $editor)
        {
            array_push($editors, $editor->name);
        }
        return $editors;
    }

    public function translatorList()
    {
        $translators = [];

        foreach($this->translators as $translator)
        {
            array_push($translators, $translator->name);
        }
        return $translators;
    }


    public function getStarCount($star_num)
    {
        return $this->reviews()->where('score', $star_num)->count();
    }

    public function getWordsOfTitleAttribute()
    {
        return explode(' ', $this->title);
    }

    public function getShortTitleAttribute()
    {
        $arr = $this->wordsOfTitle;
        return count($arr) < 4 ? implode(' ', $arr) : (implode(' ', array_slice($arr, 0, 3)) . '...');

    }

    public function getShortAuthorAttribute()
    {
        $author = $this->authors()->first();
        if($author == null)
        {
            return '';
        }
        $arr = explode(' ', $author->name);
        return count($arr) < 4 ? implode(' ', $arr) : (implode(' ', array_slice($arr, 0, 3)) . '...');

    }


    public function getHasAuthorAttribute()
    {
        return $this->authors()->count() > 0;
    }
    public function getHasEditorAttribute()
    {
        return $this->editors()->count() > 0;
    }

    public function getHasTranslatorAttribute()
    {
        return $this->translators()->count() > 0;
    }


    public static function saveSingleBook($request)
    {
        try {
            return  Book::create([
                'title' => $request->book_title,
                'en_title' => $request->book_title_en,
                'publisher_id' => intval($request->book_publisher[0]),
                'isbn' => $request->book_isbn ?? 'N/A',
                'edition' => $request->book_edition,
                'pages' => intval($request->book_pages),
                'price' => intval($request->printed_price),
                'buying_price' => intval($request->buying_price),
                'quantity' => intval($request->book_quantity),
                'language' => $request->language_en,
                'language' => $request->language_bn,
                'en_language' => $request->language_en,
                'country' => $request->country_bn,
                'en_country' => $request->country_en,
            ]);

        } catch (Exception $e) {
            logger('Single Book Create Exception');
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return null;
        }

    } 
}
