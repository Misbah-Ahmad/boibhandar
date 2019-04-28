<?php

namespace App\Http\Controllers;

use App\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    
    public function show(Publisher $publisher)
    {
        $books = $publisher->books;

        return view('publishers.show',  compact([
            'books', 'publisher',

        ]));
    }

}
