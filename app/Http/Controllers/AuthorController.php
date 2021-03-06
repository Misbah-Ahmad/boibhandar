<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{


    public function index()
    {
        $authors = Author::orderBy('name', 'asc')->paginate(1000);
    
        return view('authors.index', compact([ 'authors' ]));
    }

    public function show(Author $author)
    {

        $books = $author->books()->with('authors')->get();

        return view('authors.show', compact(['author', 'books']));
    }
    
}
