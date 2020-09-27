<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home')->name('home');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['verified', 'auth']], function () {

    Route::get('/dash', 'HomeController@index')->name('dash');
    
    Route::post('/user/wishlist', 'WishlistController@store')->name('wishlist.store');

    Route::post('/user/profile/update', 'UserController@update')->name('user.profile.update');

    Route::post('user/profile/changePassword', 'UserController@changePassword')->name('user.profile.changePassword');



    Route::post('/cart/{book}/delete', 'CartController@delete')->name('carts.delete');

    Route::post('/cart/delete', 'CartController@deleteAll')->name('carts.delete_all');

    Route::get('/user/orders/{order}', 'OrderController@show')->name('orders.show');

    Route::get('/orders/checkout', 'OrderController@checkout')->name('checkout');

    Route::post('/orders/confirm', 'OrderController@confirm')->name('orders.confirm');

    Route::get('/orders/confirmed', 'OrderController@confirmed')->name('orders.confirmed');

    Route::post('/wishlist/{book}/delete', 'WishlistController@delete')->name('wishlist.delete');

    Route::get('/corporates', 'OrderController@corporateShow')->name('corporates.create');
    Route::post('/corporates/request', 'OrderController@saveQuoteRequest')->name('corporates.store');

    Route::post('/reviews', 'ReviewController@store')->name('reviews.store');

    Route::group(['prefix' => '/admin', 'middleware' => ['role:admin']], function () {
        Route::get('/dash', 'AdminController@welcome')->name('admins.welcome');
        
        Route::get('/dash/users', 'AdminController@users')->name('admins.users');
        Route::get('/dash/users/{user}', 'AdminController@userProfile')->name('admins.user_profile');        
        Route::get('/dash/orders', 'AdminController@orders')->name('admins.orders');
        Route::get('/dash/orders/{order}', 'AdminController@showOrder')->name('admins.orders.show');

        Route::post('/dash/orders/change_status', 'AdminController@changeOrderStatus')->name('admins.orders.change_status');



        Route::group(['middleware' => ['role:super-admin']], function () {

            Route::post('/users/{user}/attachrole', 'AdminController@attachRole')->name('admins.attach.role');
            Route::post('/users/{user}/detachrole', 'AdminController@detachRole')->name('admins.detach.role');


            Route::get('/uploads', 'AdminController@uploads')->name('uploads.create');
            Route::post('/uploads/book', 'AdminController@saveBookFile')->name('uploads.book');
            Route::post('/uploads/{upload}/process', 'AdminController@processFile')->name('uploads.process');
            Route::post('/uploads/{upload}/delete', 'AdminController@deleteFile')->name('uploads.delete');

            Route::post('/uploads/author', 'AdminController@saveAuthorFile')->name('uploads.author');

            Route::post('/uploads/publisher', 'AdminController@savePublisherFile')->name('uploads.publisher');

            Route::post('/uploads/category', 'AdminController@saveCategoryFile')->name('uploads.category');

        });

    });


});

Route::get('/cart', 'CartController@show')->name('carts.show');

Route::get('/categories', 'CategoryController@index')->name('categories.index');

Route::get('/authors', 'AuthorController@index')->name('authors.index');

Route::get('/publishers', 'PublisherController@index')->name('publishers.index');

Route::get('/books/{book}', 'BookController@show')->name('books.show');

Route::get('/authors/{author}', 'AuthorController@show')->name('authors.show');

Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');

Route::get('/publishers/{publisher}', 'PublisherController@show')->name('publishers.show');



Route::post('/user/cart/add', 'CartController@store');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/privacy-policy', 'HomeController@privacy')->name('privacy');
Route::get('/shopping-guideline', 'HomeController@guideline')->name('guideline');
Route::get('/terms-conditions', 'HomeController@terms')->name('terms');
Route::get( '/return-policy', 'HomeController@returnPolicy')->name( 'return_policy');
Route::post('/contact', 'HomeController@storeContact')->name('contacts.store');