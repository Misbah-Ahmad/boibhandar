<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
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
        $books = Book::all()->random(50);

        return view('welcome', ['books' => $books]);

    }

    public function about()
    {
        return view('about');
    }
 
    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function guideline()
    {
        return view('guideline');
    }

    public function terms()
    {
        return view('terms');
    }

}
