<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
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
     
        $cats = explode(',', env('HOME_CATS'));
        
        $cats_books = array_map(function($cat){             
            $cat = Category::find(intval($cat));            
            return [
                'category' => $cat,
                'books' => $cat->books()->with(['authors', 'translators', 'editors'])->limit(8)->get()
            ];
        }, $cats);
        
        $showcase_authors = Author::has('books', '>', 15)->limit(6)->get();
        return view('welcome', compact([ 'cats_books', 'showcase_authors']));

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

    public function returnPolicy()
    {
        return view('return_policy');
    }


    public function storeContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha',            
            'name' => ['required', 'string', 'min:3', 'max:30'],
            'phone' => ['required', 'string', 'regex:/^(01)[3-9]{1,1}[0-9]{8,8}$/i'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:15', 'max:100'],
            'subject' => ['required', 'string', 'min:5', 'max:50'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $noti = [
            'type' => 'Contact Us',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'subject' => $request->subject,
        ];

        \Log::channel('slack_quote')->info(json_encode($noti, JSON_PRETTY_PRINT));

        return back()->with('message', 'We\'ve got your message, our customer support team will be in touch with you shortly.');        

    }

}
