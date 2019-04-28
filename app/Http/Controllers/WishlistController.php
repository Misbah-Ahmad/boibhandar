<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    
    public function store(Request $request)
    {
        $user = auth()->user();



        $book = Book::find($request->w_book);

        if ($book != null) 
        {
            if ($user->hasBookInWishlist($book) == false) 
            {
                    
                $user->wishlist()->save($book);
                
                return response()->json([
                    'success' => true,
                    'message' => 'Book added to wishlist',
                ]);

            } else {
            
                return response()->json(['success' => false, 'message' => 'Book is in wishlist already']);
            
            }

        }

        return response()->json(['success' => false, 'message' => 'Invalid request']);


    }

}
