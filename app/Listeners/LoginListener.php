<?php

namespace App\Listeners;

use App\Cart;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        $cart = $user->cart;
        
        if($cart == null)
        {
            $cart = $user->cart()->save(new Cart);
        }

        $books = $cart->books->pluck('id')->toArray();

        if (count($books) < 1) {
            $books = json_decode(Cookie::get(env('GUEST_CART_COOKIE')));

            if ($books == null || !is_array($books) || count($books) < 1) {
                $books = [];
            }

            if (count($books) > 0) {
                $cart->books()->attach($books);
            }
        }

        Cookie::queue(Cookie::make(env('AUTH_CART_COOKIE'), json_encode($books), intval(env('CART_COOKIE_AGE')), '/'));        
    
    
    }
}
