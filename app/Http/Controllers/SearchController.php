<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $filter = ['to', 'the', 'of', 'for'];

    public function search(Request $request)
    {

        $term = strtolower(trim($request->__q));

        \Log::debug($term);

        if (in_array($term, $this->filter) || strlen($term) < 3)
        {
            return $this->getFailedResponse();
        }
    
        $like_query = Book::where('title', 'like', $term . '%')->orWhereHas('authors', function($query) use($term){
            $query->where('name', 'like', $term . '%');
        })->limit(5)->get();
        
        $results = Book::search($term)->take(10)->get()->concat($like_query)->map(function($book){

            return [
                'id' => $book->id,
                'title' => $book->title,
                'image_link' => $book->thumb,
                'authors' => implode(', ', $book->authorList()),
                'price' => intval($book->price),
            ];
        });

        if(count($results) < 1)
        {
            return $this->getFailedResponse();
        }

        return response()->json([
            'success' => true,
            'message' => 'Found ' . count($results) . ' Results!',
            'data' => $results,
        ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getFailedResponse()
    {
        return response()->json(['success' => false, 'message' => 'Not Found!'], 200, [
            ''
        ]);
    }
}
