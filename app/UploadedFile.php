<?php

namespace App;

use App\User;
use App\Model;

class UploadedFile extends Model
{
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFileNameAttribute()
    {
        $arr = explode('/', $this->path);
        return $arr[count($arr) - 1];        
    }


    public function scopeOfBooks($query)
    {
        return $query->where('data_type', 'Book');
    }
    public function scopeOfAuthors($query)
    {
        return $query->where('data_type', 'Author');
    }
    public function scopeOfPublishers($query)
    {
        return $query->where('data_type', 'Publisher');
    }
    public function scopeOfCategories($query)
    {
        return $query->where('data_type', 'Category');
    }

}
