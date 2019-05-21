<?php

namespace App\Traits;


use App\Category;
use App\Imports\CategoriesImport;
use Maatwebsite\Excel\Facades\Excel;


/**
 *  Store Book From Excel File using Laravel-Excel Package
 */
trait StoresCategoriesFromExcel
{   

    public function getArrayOfCategories($filePath)
    {
        return Excel::toArray(new CategoriesImport, storage_path($filePath))[0];
    }

    public function processAndStoreCategoryFile($rows)
    {

        $failed = [];

        foreach ($rows as  $row)
        {
            
            $category = new Category;

            $category->id = intval($row['id']);
            $category->name = $row['category_name'];
        
            if($category->save() == false)
            {
                array_push($failed, $row);
            }   

        }

        return $failed;

    }



}
