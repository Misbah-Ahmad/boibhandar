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

        $auth_books = $cart->books()->pluck('id')->toArray();

        $guest_books = json_decode(Cookie::get(env('GUEST_CART_COOKIE')));

        if ($guest_books == null || !is_array($guest_books) || count($guest_books) < 1) {
            $guest_books = [];
        }

        $diff_books = array_values(array_unique(array_diff($guest_books, $auth_books)));

        if (count($diff_books) > 0) {
            $cart->books()->attach($diff_books);
            $auth_books = $cart->books()->pluck('id')->toArray();
        }

        Cookie::queue(Cookie::make(env('AUTH_CART_COOKIE'), json_encode($auth_books), intval(env('CART_COOKIE_AGE')), '/'));

        // Delete from Guest Cart
        Cookie::queue(Cookie::make(env('GUEST_CART_COOKIE'), json_encode([]), intval(env('CART_COOKIE_AGE')), '/'));
    
    }
}
