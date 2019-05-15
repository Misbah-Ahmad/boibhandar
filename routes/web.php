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

    
    Route::get('/cart', 'CartController@show')->name('carts.show');

    Route::get('/user/orders/{order}', 'OrderController@show')->name('orders.show');

    Route::get('/orders/checkout', 'OrderController@checkout')->name('checkout');

    Route::post('/orders/confirm', 'OrderController@confirm')->name('orders.confirm');

    Route::get('/orders/confirmed', 'OrderController@confirmed')->name('orders.confirmed');

    Route::post('/wishlist/{book}/delete', 'WishlistController@delete')->name('wishlist.delete');

    Route::get('/corporates', 'OrderController@corporateShow')->name('corporates.create');
    Route::post('/corporates/request', 'OrderController@saveQuoteRequest')->name('corporates.store');


    Route::group(['prefix' => '/admin', 'middleware' => ['role:admin']], function () {
        Route::get('/dash', 'AdminController@welcome')->name('admins.welcome');
    });


});

Route::get('/categories', 'CategoryController@index')->name('categories.index');

Route::get('/authors', 'AuthorController@index')->name('authors.index');

Route::get('/publishers', 'PublisherController@index')->name('publishers.index');

Route::get('/books/{book}', 'BookController@show')->name('books.show');

Route::get('/authors/{author}', 'AuthorController@show')->name('authors.show');

Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');

Route::get('/publishers/{publisher}', 'PublisherController@show')->name('publishers.show');



Route::post('/user/cart/add', 'CartController@store');
Route::post('/cart/{book}/delete', 'CartController@delete')->name('carts.delete');