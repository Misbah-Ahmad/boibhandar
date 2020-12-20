<?php

namespace App\Http\Controllers;

use App\Book;
use App\Role;
use App\User;
use App\Order;
use App\Author;
use App\Category;
use App\Publisher;
use App\UploadedFile;
use App\DeliveryVendor;
use Illuminate\Http\Request;
use App\Traits\DataValidator;
use App\Traits\StoresBooksFromExcel;
use Illuminate\Support\Facades\Hash;
use App\Traits\StoresAuthorsFromExcel;
use Illuminate\Support\Facades\Storage;
use App\Traits\StoresCategoriesFromExcel;
use App\Traits\StoresPublishersFromExcel;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateAuthorRequest;
use App\Http\Requests\CreateSingleBookRequest;

class AdminController extends Controller
{
    
    use StoresBooksFromExcel, StoresAuthorsFromExcel, StoresPublishersFromExcel, StoresCategoriesFromExcel;

    public function welcome()
    {
        //$admin = auth()->user();

        
        $users =  [
                'today' => User::today()->count(),
                'total' => User::count(),
            ];

        $orders =  [
                'today' => Order::whereDate('created_at', date('Y-m-d'))->count(),
                'total' => Order::count(),
        ];


            return view('admins.dash', compact([
                                        'users',
                                        'orders'
                                    ]));
    }



    public function users(Request $request)
    {

        $segment = $request->query('_segment', 'total');
    
        switch ($segment) {
            case 'today':
                $users = User::today()->latest()->get();
                break;
            
            default:
                $users = User::latest()->get();
                break;
        }

        return view('admins.users', compact([
            'users',
        ]));


    }

    public function orders(Request $request)
    {
        $segment = $request->query('_segment', 'total');

        switch ($segment) {
            case 'today':
                $orders = Order::today()->latest()->get();
                break;

            default:
                $orders = Order::latest()->get();
                break;
        }

        $deliveryVendors = DeliveryVendor::all();

        return view('admins.orders', compact([
            'orders',
            'deliveryVendors',
        ]));
    }

    public function showOrder(Order $order)
    {

        $total = $order->orderDetails->sum('total_price');
        $gift = $order->is_gift ? $order->gift_wrap_charge : 0;
        $headline = 'Order Details';

        return view('admins.order_details', compact(['order', 'total', 'gift', 'headline']));
    }



    public function changeOrderStatus(Request $request)
    {
        $status_array = ['Cancelled', 'Approved', 'Pending', 'Delivered'];

        $message = 'Ops! Something went wrong.';

        if($request->filled('_id') && $request->filled('_status'))
        {
            $status = trim(ucwords($request->_status));
            $order = $request->_id;
            $order = Order::find($order);

            if($order instanceof Order && in_array($status, $status_array) && $order->status != $status)
            {
                $order->status = $status;
                
                if($order->save())
                {
                    $message = 'Order status was changed to ' . $status . ' successfully!';                    
                }
                

            }

        }

        return back()->with('message', $message);

    }


    public function userProfile(User $user)
    {
        $orders = $user->orders()->latest()->get();
        $roles = Role::all();
        return view('admins.user_profile', compact(['user', 'orders', 'roles']));

    }



    public function attachRole(Request $request, User $user)
    {

        $loggedInUser = auth()->user();

        session()->flash('tab', 'operations');

        if ($loggedInUser->hasRole('super-admin') == false) {
            return back()->with('message', 'Unauthorized');
        }

        $adminPassword = $loggedInUser->password;
        $typedPassword = $request->password;


        if (Hash::check($typedPassword, $adminPassword) == false) {
            return back()->with('message', 'Password mismatch!');
        }

        $roleId = $request->role_id;

        $role = Role::find($roleId);

        if ($user->hasRole($role->name)) {

            return back()->with('message', 'Already assigned!');
        }


        $user->attachRole($role);

        return back()->with('message', 'Assigned New Role.');
    }




    public function detachRole(Request $request, User $user)
    {

        $loggedInUser = auth()->user();

        session()->flash('tab', 'operations');

        if ($loggedInUser->hasRole('super-admin') == false) {
            return back()->with('message', 'Unauthorized');
        }

        $adminPassword = $loggedInUser->password;
        $typedPassword = $request->password;


        if (Hash::check($typedPassword, $adminPassword) == false) {
            return back()->with('message', 'Password mismatch!');
        }

        $roleId = $request->role_id;

        $role = Role::find($roleId);

        if ($user->hasRole($role->name) == false) {
            return back()->with('message', 'User does not have this role!');
        }


        $user->detachRole($role);

        return back()->with('message', 'Detached Role.');
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
                return back()->with('author_uploaded', 'File name already exists');                
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
                return back()->with('author_uploaded', 'Author File Uploaded!');
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

    public function creator()
    {
        $authors = Author::orderBy('name', 'asc')->get();
        $publishers = Publisher::orderBy('name', 'asc')->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admins.creators.creator', compact([
            'authors', 'publishers', 'categories'
        ]));
    }

    public function saveAuthor(CreateAuthorRequest $request)
    {
        $user = auth()->user();

        if (Hash::check($request->password, $user->password) == false) {
            return back()->withErrors(['password' => 'Admin password doesn\'t match'])->withInput();
        }

        if (Author::where('name', $request->author_name)->count() > 0) {
            return back()->withErrors(['author_name' => 'Author name already exists'])->withInput();            
        }

        $image = $request->hasFile('author_image') ? $request->file('author_image') : null;

        $author = new Author;

        $author->name = $request->author_name;
        $author->en_name = $request->en_name;
        $author->image_link = 'author-default.jpg'; 

        $author->save();

        if ($image) {
            $path = '/images/author/';
            $file_name = $author->id . '.' . $image->getClientOriginalExtension();

            $result = Storage::disk('public_folder')->putFileAs($path, $image, $file_name);

            if ($result) {
                $author->image_link = $file_name;
                $author->save();
            }
        }

        return back()->with('author_saved', 'Author is saved successfully!');
    }

    public function savePublisher(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:6'],
            'publisher_name' => ['required', 'string', 'min:3',],
            'en_name' => ['nullable', 'string', 'min:4',],
            'location' => ['nullable', 'string', 'min:4',],
            'contact' => ['nullable', 'string', 'min:6',],                        
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = auth()->user();

        if (Hash::check($request->password, $user->password) == false) {
            return back()->withErrors(['password' => 'Admin password doesn\'t match'])->withInput();
        }

        if (Publisher::where('name', $request->author_name)->count() > 0) {
            return back()->withErrors(['author_name' => 'Author name already exists'])->withInput();
        }

        $publihser = new Publisher;

        $publihser->name = $request->publisher_name;
        $publihser->en_name = $request->en_name;
        $publihser->location = $request->location;
        $publihser->contact = $request->contact;
        
        $publihser->save();

        return back()->with('publisher_saved', 'Pulisher is saved successfully!');
    }

    public function saveCategory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:6'],
            'category' => ['required', 'string', 'min:3',],                        
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = auth()->user();

        if (Hash::check($request->password, $user->password) == false) {
            return back()->withErrors(['password' => 'Admin password doesn\'t match'])->withInput();
        }

        if (Category::where('name', $request->category)->count() > 0) {
            return back()->withErrors(['category' => 'Category already exists'])->withInput();
        }

        $category = new Category;

        $category->name = $request->category;        
        $category->save();

        return back()->with('category_saved', 'Category is saved successfully!');
    }

    public function saveBook(CreateSingleBookRequest $request)
    {
        logger('Create Single Book Request');
        logger(json_encode($request->all()));

        $user = auth()->user();

        if (Hash::check($request->password, $user->password) == false) {
            $this->returnWithError('password', 'Admin password doesn\'t match');
        }
        

        /* Check book writers and check if exists in the DB */
        $writers = $request->book_writers;
        if (DataValidator::authorsExist($writers) == false) {
            $this->returnWithError('book_writers', 'Some writer(s) don\'t exist');            
        }


        /* Check book translators and check if exists in the DB */
        $translators = $request->has('book_translators') ? $request->book_translators : [];
        if (count($translators) > 1 && DataValidator::authorsExist($translators) == false) {
            $this->returnWithError('book_translators', 'Some translator(s) don\'t exist');            
        }


        /* Check book editors and check if exists in the DB */
        $editors = $request->has('book_editors') ? $request->book_editors : [];
        if (count($editors) > 1 && DataValidator::authorsExist($editors) == false) {
            $this->returnWithError('book_editors', 'Some editor(s) don\'t exist');            
        }


        /* Check publisher and check if exists in the DB */
        $publihser = $request->book_publisher;
        if (DataValidator::publishersExist($publihser) == false) {
            $this->returnWithError('book_publisher', 'Publisher doesn\'t exist');            
        }


        /* Check book categories and check if exists in the DB */
        $categories = $request->book_categories;
        if (DataValidator::categoriesExist($categories) == false) {
            $this->returnWithError('book_categories', 'Some categories don\'t exist');
        }

        $book = Book::saveSingleBook($request);

        if ($book == null || !($book instanceof Book)) {
            return back()->with('book_saved', 'Could not save the book!')->withInput();
        }

        $this->attachAuthorsToBook($book, $writers);
        $this->attachCategoriesToBook($book, $categories);

        if (count($translators) > 0) {
            $this->attachTranslatorsToBook($book, $translators);
        }

        if (count($editors) > 0) {
            $this->attachEditorsToBook($book, $editors);
        }


        $image = $request->hasFile('book_image') ? $request->file('book_image') : null;
        $thumb = $request->hasFile('book_thumb') ? $request->file('book_thumb') : null;

        if (!$image || !$thumb) {
            return back()->with('book_saved', 'Book is saved BUT Could not save the image and thumb!');            
        }

        $image_dir = '/images/books/';
        $thumb_dir = '/images/thumbs/';
        $file_name = $book->id . '.' . $image->getClientOriginalExtension();

        $full_image_path = $image_dir . $file_name;
        $full_thumb_path = $thumb_dir . $file_name;

        $image_saved = Storage::disk('public_folder')->putFileAs($image_dir, $image, $file_name);
        $thumb_saved = Storage::disk('public_folder')->putFileAs($thumb_dir, $thumb, $file_name);

        if (!$image_saved || !$thumb_saved) {
            if ($image_saved) {
                Storage::disk('public_folder')->delete($full_image_path);
            }
            if ($thumb_saved) {
                Storage::disk('public_folder')->delete($full_thumb_path);
            }

            return back()->with('book_saved', 'Book is saved BUT Could not save the image and thumb!');
        }

        /* Successfully saved image and thumb */
        $book->image_link = $full_image_path;
        $book->thumb_link = $full_thumb_path;
        $book->save();

        return back()->with('book_saved', 'Book is saved successfully!');

    }

    private function returnWithError($key, $message)
    {
        return back()->withErrors([$key => $message])->withInput();
    }

}
