<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::orderBy('name', 'asc')->paginate(12);

        return view('categories.index', compact([ 'categories' ]));
    }


    public function show(Category $category)
    {
        $books = $category->books()->with(['authors', 'translators', 'editors'])->get();

        return view('categories.show',  compact([
            'books', 'category',

        ]));
    }
}
