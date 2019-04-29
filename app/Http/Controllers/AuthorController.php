<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{

    public function show(Author $author)
    {

        $books = $author->books;

        return back();
    }
    
}
