<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'author_category');
    }

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class, 'author_publisher');
    }
   
}
