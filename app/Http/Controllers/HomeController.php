<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\OrderDetail;
use App\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        $section = 'settings';
        $view = $section;

        $query = $request->query('_section', 'settings');    
        
        $sections = ['orders', 'mybooks', 'settings', /*'address',*/ 'wishlist', 'reviews', 'password'];

        
        


        if(!in_array($query, $sections))
        {
            $section = 'settings';
            $view  ='settings';
        } else {
            $section = $view = $query;
        }

        $vars = [];

        switch ($section) {
            case 'orders':
                $vars = $user->orders()->latest()->get();
                break;

            case 'mybooks':
                $vars = $user->orderDetails()->latest()->with('book')->get();
                break;

            case 'wishlist':
                $vars = $user->wishlist;
                break;

            case 'reviews':
                $vars = $user->reviews()->latest()->with('book')->get();
                break;
        }
        return view('users.profile', compact([
            'user', 'section', 'view', 'vars',
        ]));
    
    }


    public function home()
    {
        $books = Book::all();

        return view('welcome', ['books' => $books]);

    }

}
