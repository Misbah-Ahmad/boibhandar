<?php

namespace App\Traits;

use App\Author;

/**
 * 
 */
trait DataValidator
{
    public static function authorsExist(array $authorIds = [])
    {
        return Author::whereIn('id', $authorIds)->count() == count($authorIds);
    }

    public static function categoriesExist(array $categoryIds = [])
    {
        return Author::whereIn('id', $categoryIds)->count() == count($categoryIds);
    }

    public static function publishersExist(array $publisherIds = [])
    {
        return Author::whereIn('id', $publisherIds)->count() == count($publisherIds);
    }


}

