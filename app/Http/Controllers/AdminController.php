<?php

namespace App\Http\Controllers;

use App\UploadedFile;
use Illuminate\Http\Request;
use App\Traits\StoresBooksFromExcel;
use App\Traits\StoresAuthorsFromExcel;
use App\Traits\StoresPublishersFromExcel;
use App\Traits\StoresCategoriesFromExcel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    
    use StoresBooksFromExcel, StoresAuthorsFromExcel, StoresPublishersFromExcel, StoresCategoriesFromExcel;

    public function welcome()
    {
        //$admin = auth()->user();

        return view('admins.dash');
        // , compact([
        //     'admin',
        // ]));
    }




    public function uploads()
    {
        $bookFiles = UploadedFile::ofBooks()->with('user')->get();
        $publisherFiles = UploadedFile::ofPublishers()->with('user')->get();
        $authorFiles = UploadedFile::ofAuthors()->with('user')->get();
        $categoryFiles = UploadedFile::ofCategories()->with('user')->get();

        return view('admins.uploads', compact(['bookFiles', 'publisherFiles', 'authorFiles', 'categoryFiles']));

    }


    public function saveBookFile(Request $request)
    {

        if (auth()->user()->hasRole('admin') == false || Hash::check($request->password, auth()->user()->password) == false)
        {
            return back()->with( 'book_uploaded', 'Permission denied!');
        }


        if($request->hasFile('book_file'))
        {
            $fileName = $request->file('book_file')->getClientOriginalName();
            
            if(UploadedFile::ofBooks()->where('path', 'uploads/' . $request->file('book_file')->getClientOriginalName())->count() > 0)
            {
                return back()->with('book_uploaded', 'File name already exists');                
            }

            $path = Storage::putFileAs(
                'uploads',
                $request->file('book_file'),
                $fileName
            );

            $upload = UploadedFile::create([
                'data_type' => 'book',
                'user_id' => auth()->user()->id,
                'path' => 'app/' . $path
            ]);

            if($upload instanceof UploadedFile)
            {
                return back()->with('book_uploaded', 'Book File Uploaded!');
            } else {
                return back()->with('book_uploaded', 'Could not upload the file!');                
            }

        } else {
            return back()->with('book_uploaded', 'No file was found!');                            
        }
        
    }

    public function saveAuthorFile(Request $request)
    {

        if (auth()->user()->hasRole('admin') == false || Hash::check($request->password, auth()->user()->password) == false)
        {
            return back()->with( 'author_uploaded', 'Permission denied!');
        }


        if($request->hasFile('author_file'))
        {
            $fileName = $request->file('author_file')->getClientOriginalName();
            
            if(UploadedFile::ofBooks()->where('path', 'uploads/' . $request->file('author_file')->getClientOriginalName())->count() > 0)
            {
                return back()->with('book_uploaded', 'File name already exists');                
            }

            $path = Storage::putFileAs(
                'uploads',
                $request->file('author_file'),
                $fileName
            );

            $upload = UploadedFile::create([
                'data_type' => 'author',
                'user_id' => auth()->user()->id,
                'path' => 'app/' . $path
            ]);

            if($upload instanceof UploadedFile)
            {
                return back()->with('author_uploaded', 'Book File Uploaded!');
            } else {
                return back()->with('author_uploaded', 'Could not upload the file!');                
            }

        } else {
            return back()->with('author_uploaded', 'No file was found!');                            
        }
        
    }

    public function savePublisherFile(Request $request)
    {

        if (auth()->user()->hasRole('admin') == false || Hash::check($request->password, auth()->user()->password) == false)
        {
            return back()->with( 'publisher_uploaded', 'Permission denied!');
        }


        if($request->hasFile('publisher_file'))
        {
            $fileName = $request->file('publisher_file')->getClientOriginalName();
            
            if(UploadedFile::ofBooks()->where('path', 'uploads/' . $request->file('publisher_file')->getClientOriginalName())->count() > 0)
            {
                return back()->with('publisher_uploaded', 'File name already exists');                
            }

            $path = Storage::putFileAs(
                'uploads',
                $request->file('publisher_file'),
                $fileName
            );

            $upload = UploadedFile::create([
                'data_type' => 'publisher',
                'user_id' => auth()->user()->id,
                'path' => 'app/' . $path
            ]);

            if($upload instanceof UploadedFile)
            {
                return back()->with('publisher_uploaded', 'Book File Uploaded!');
            } else {
                return back()->with('publisher_uploaded', 'Could not upload the file!');                
            }

        } else {
            return back()->with('publisher_uploaded', 'No file was found!');                            
        }
        
    }
    public function saveCategoryFile(Request $request)
    {

        if (auth()->user()->hasRole('admin') == false || Hash::check($request->password, auth()->user()->password) == false)
        {
            return back()->with( 'category_uploaded', 'Permission denied!');
        }


        if($request->hasFile('category_file'))
        {
            $fileName = $request->file('category_file')->getClientOriginalName();
            
            if(UploadedFile::ofBooks()->where('path', 'uploads/' . $request->file('category_file')->getClientOriginalName())->count() > 0)
            {
                return back()->with('category_uploaded', 'File name already exists');                
            }

            $path = Storage::putFileAs(
                'uploads',
                $request->file('category_file'),
                $fileName
            );

            $upload = UploadedFile::create([
                'data_type' => 'category',
                'user_id' => auth()->user()->id,
                'path' => 'app/' . $path
            ]);

            if($upload instanceof UploadedFile)
            {
                return back()->with('category_uploaded', 'Book File Uploaded!');
            } else {
                return back()->with('category_uploaded', 'Could not upload the file!');                
            }

        } else {
            return back()->with('category_uploaded', 'No file was found!');                            
        }
        
    }



    public function processFile(UploadedFile $upload)
    {


        if($upload->processd)
        {
            return back();
        }

        $failed = [];

        $data_type = $upload->data_type;

        $msg_key = 'book_processed';

        if($data_type == 'book')
        {
            $rows = $this->getArrayOfBooks($upload->path);
            $failed = $this->processAndStoreBookFile($rows);
            $upload->processed = 1;

        } else if($data_type == 'publisher'){
        
            $rows = $this->getArrayOfPublishers($upload->path);
            $failed = $this->processAndStorePublisherFile($rows);
            $msg_key = 'publisher_processed';
            $upload->processed = 1;

        } else if($data_type == 'author'){

            $rows = $this->getArrayOfAuthors($upload->path);
            $failed = $this->processAndStoreAuthorFile($rows);
            $msg_key = 'author_processed';
            $upload->processed = 1;


        } else if ($data_type == 'category') {
            $rows = $this->getArrayOfCategories($upload->path);
            $failed = $this->processAndStoreCategoryFile($rows);
            $msg_key = 'category_processed';
            $upload->processed = 1;

        }

        if(is_array($failed) && count($failed) > 0)
        {
            $upload->last_failed_data = json_encode($failed);
        }
        $upload->save();
        return back()->with($msg_key, ucwords($data_type) . ' Processed');

    }

    public function deleteFile(UploadedFile $upload)
    {
        unlink(storage_path($upload->path));
        $upload->delete();

        return back();
    }
}
