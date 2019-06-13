<?php

namespace App\Traits;


use App\Author;
use App\Imports\AuthorsImport;
use Maatwebsite\Excel\Facades\Excel;


/**
 *  Store Book From Excel File using Laravel-Excel Package
 */
trait StoresAuthorsFromExcel
{   

    public function getArrayOfAuthors($filePath)
    {
        return Excel::toArray(new AuthorsImport, storage_path($filePath))[0];
    }

    public function processAndStoreAuthorFile($rows)
    {

        $failed = [];
        \DB::table('authors')->delete();
        foreach ($rows as  $row)
        {
            
            $author = new Author;

            $author->id = intval($row['id']);
            $author->name = $row['writer_name'];
            $author->tag_line = '';
            $author->short_bio = '';
            $author->image_link = $row['image_name'];

            if($author->save() == false)
            {
                array_push($failed, $row);
            }   

        }

        return $failed;

    }



}
