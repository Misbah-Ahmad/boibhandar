<?php

namespace App\Http\Controllers;

use App\Book;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    public function show(Request $request)
    {
        $user = auth()->user();
        $books = $user->cart->books;

        if($books->count() < 1)
        {
            return redirect('/');
        }

        return view('carts.cart', compact(['books']));

    }
    
    public function store(Request $request)
    {

        $book = Book::find($request->c_book);

        if(auth()->check() == false)
        {
            $books = json_decode(Cookie::get(env('GUEST_CART_COOKIE')));


            if($books == null || !is_array($books))
            {
                $books = [];
            }

            if($book instanceof Book)
            {
                array_push($books, $book->id);
            }

            Cookie::queue(Cookie::make(env('GUEST_CART_COOKIE'), json_encode($books), 518400, '/'));

            return response()->json([
                'success' => true,
                'message' => 'Book added to cart',
                'data' => ['count' => count($books)],
            ]);


            
        }


        $user = auth()->user();
        $cart = $user->cart;

        if($cart == null)
        {
            $cart = $user->cart()->save(new Cart);
        }


        
        if($book != null)
        {
            if($cart->hasBook($book) == false)
            {
                $cart->books()->save($book);
                
                $books = $cart->books()->pluck('id');

                Cookie::queue(Cookie::make(env('AUTH_CART_COOKIE'), json_encode($books), intval(env('CART_COOKIE_AGE')), '/'));

                return response()->json([
                        'success' => true,
                        'message' => 'Book added to cart',
                        'data' => ['count' => count($books)],
                        ]);
            
            
            
            } else {
                return response()->json(['success' => false, 'message' => 'Book is in cart already']);
            }


        }

        return response()->json(['success' => false, 'message' => 'Invalid request']);

    }



    public function delete(Request $request, Book $book)
    {

        $cookie_name = auth()->check() ? env('AUTH_CART_COOKIE') : env('GUESTA_CART_COOKIE');

        $cookie = json_decode(Cookie::get($cookie_name));
        $cart = auth()->user()->cart;

        if($cart->hasBook($book))
        {
            if(!is_array($cookie))
            {
                $cookie = [];
            }
            $diff = array_values(array_diff($cookie, [$book->id]));
            Cookie::queue(Cookie::make($cookie_name, json_encode($diff), intval(env('CART_COOKIE_AGE')), '/'));            

            if(auth()->check())
            {
                $cart = auth()->user()->cart;
                $cart->books()->detach($book->id);

            }

            return back()->with('message', 'Book is deleted from cart.');        


        } else {
            return back()->with('message', 'Your do not have this book in your cart.');        

        }



    }
}
