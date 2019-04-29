<?php

namespace App\Http\Controllers;

use App\Book;
use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function show(Request $request)
    {
        $user = auth()->user();
        $books = $user->cart->books;

        if($books->count() < 1)
        {
            return back();
        }

        return view('carts.cart', compact(['books']));

    }
    
    public function store(Request $request)
    {
        $user = auth()->user();
        $cart = $user->cart;

        if($cart == null)
        {
            $cart = $user->cart()->save(new Cart);
        }

        $book = Book::find($request->c_book);
        
        if($book != null)
        {
            if($cart->hasBook($book) == false)
            {
                $cart->books()->save($book);
                
                $books = $cart->books()->pluck('book_id');
            
                return response()->json([
                        'success' => true,
                        'message' => 'Book added to cart',
                        'data' => json_decode($books),
                        ]);
            
            
            
            } else {
                return response()->json(['success' => false, 'message' => 'Book is in cart already']);
            }


        }

        return response()->json(['success' => false, 'message' => 'Invalid request']);

    }

}
