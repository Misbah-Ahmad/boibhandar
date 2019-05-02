<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{


    public function index()
    {
        $authors = Author::orderBy('name', 'asc')->paginate(18);
    
        return view('authors.index', compact([ 'authors' ]));
    }

    public function show(Author $author)
    {

        $books = $author->books;

        return back();
    }
    
}
