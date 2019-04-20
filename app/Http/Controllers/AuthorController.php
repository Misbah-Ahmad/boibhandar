<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
   

    public function show(Author $author)
    {
        //return view to show the details of author
        return back();
    }
    
}
