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


    public function delete(Request $request, Book $book)
    {

        $user = auth()->user();

        if($user->wishlist->contains($book))
        {
            $user->wishlist()->detach($book);

            return back()->with('message', 'The book is removed from your wishlist.');
        }

        return back()->with('message', 'Your wishlist does not have this book.');

    }

}
