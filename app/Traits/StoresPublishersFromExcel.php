<?php

namespace App\Traits;


use App\Publisher;
use App\Imports\PublishersImport;
use Maatwebsite\Excel\Facades\Excel;


/**
 *  Store Book From Excel File using Laravel-Excel Package
 */
trait StoresPublishersFromExcel
{   

    public function getArrayOfPublishers($filePath)
    {
        return Excel::toArray(new PublishersImport, storage_path($filePath))[0];
    }

    public function processAndStorePublisherFile($rows)
    {
        \DB::table('publishers')->delete();
        $failed = [];

        foreach ($rows as  $row)
        {
            
            $publisher = new Publisher;

            $publisher->id = intval($row['id']);
            $publisher->name = $row['publisher_name'];
            $publisher->location = '';
            $publisher->contact = '';
            $publisher->email = '';
            

            if($publisher->save() == false)
            {
                array_push($failed, $row);
            }   

        }

        return $failed;

    }



}
