<?php

namespace App\Http\Controllers;

use App\Book;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rating_score' => ['required', 'string', 'min:1', 'max:5', 'numeric'],
            'rating_title' => ['required', 'string', 'min:5', 'max:20'],
            'rating_body' => ['required', 'string', 'min:10', 'max:180'],
        ]);

        if ($validator->fails()) {

            return back()->withErrors($validator)->withInput();
        }

        $score = intval($request->rating_score);

        if($score < 1){
            $score = 1;
        } else if($score > 5){
            $score = 5;
        }

        $book = intval($request->book);

        if(Book::find($book) == null)
        {

            return back();
        }

        Review::create([
            'score' => $score,
            'title' => $request->rating_title,
            'text' => $request->rating_body,
            'book_id' => $book,
            'user_id' => auth()->user()->id,
        ]);
        
        return back()->with('review_saved', 'Thanks for your valuable review!');

    }
}
