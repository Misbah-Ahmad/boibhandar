<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    
    public function store(Request $request)
    {
        $user = auth()->user();

        $book = Book::find($request->book);
        if($book instanceof Book && $user->hasBookInWishlist($book))
        {
            $user->wishlist()->save($book);

            return response()->json(['success' => true], 200);
        }

        return response()->json(['success' => false, 'message' => 'Something went wrong!'], 200);


    }

}
