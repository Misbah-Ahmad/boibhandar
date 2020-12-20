<?php

namespace App\Traits;


use App\Book;
use App\Imports\BooksImport;
use Maatwebsite\Excel\Facades\Excel;


/**
 *  Store Book From Excel File using Laravel-Excel Package
 */
trait StoresBooksFromExcel
{   

    public function getArrayOfBooks($filePath)
    {
        return Excel::toArray(new BooksImport, storage_path($filePath))[0];
    }

    public function processAndStoreBookFile($rows)
    {

        $failed = [];
        //\DB::table('author_book')->delete();
        //\DB::table('book_category')->delete();
        //\DB::table('book_editor')->delete();
        //\DB::table('book_translator')->delete();
        //\DB::table('books')->delete();
        foreach ($rows as  $row)
        {
            
            $book = new Book;

            $book->id = intval($row['id']);
            $book->title = $row['title'];
            $book->publisher_id = intval($row['publisher']);
            $book->isbn = $row['isbn'];
            $book->image_link = env('BOOK_IMAGE_PREFIX') . $row['image_name'] . '.jpg';
            $book->edition = $row['edition'];            
            $book->pages = intval($row['total_pages']);
            $book->price = intval($row['s_price']);
            $book->buying_price = intval($row['b_price']);
            $book->language = $row['language'];
            $book->en_language = $row['en_language'];
            $book->country = $row['country'];
            $book->en_country = $row['en_country'];
            $book->quantity = intval($row['quantity']);


            if($book->save())
            {
                $this->attachAuthorsToBook($book, explode(",", $row['author']));
                $this->attachCategoriesToBook($book,  explode(",", $row['category']));

                if($row['translator'] != null)
                {
                    $this->attachTranslatorsToBook($book, explode(",", $row['translator']));
                }

                if($row['editor'] != null)
                {
                    $this->attachEditorsToBook($book, explode(",", $row['editor']));
                }

            } else {

                array_push($failed, $row);
            }

        }

        return $failed;

    }


    public function attachAuthorsToBook($book, $authors)
    {
        $authors = array_map(function ($author) {

            return intval($author);
        }, $authors);

        $book->authors()->attach($authors);


    }


    public function attachCategoriesToBook($book, $categories)
    {
        $categories = array_map(function ($cat) {

            return intval($cat);
        }, $categories);

        $book->categories()->attach($categories);        

    }


    public function attachTranslatorsToBook($book, $translators)
    {
        $translators = array_map(function ($t) {

            return intval($t);
        }, $translators);

        if(count($translators) > 0)
        {
            $book->translators()->attach($translators);
        }

    }


    public function attachEditorsToBook($book, $editors)
    {
        $editors = array_map(function ($e) {

            return intval($e);
        }, $editors);

        if(count($editors) > 0)
        {
            $book->editors()->attach($editors);
        }

    }

}
