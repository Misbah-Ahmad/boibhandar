<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['author_book', 'author_book', 'author_publisher', 'authors', 'book_category', 'book_editor', 'book_translator', 'reviews', 'transactions', 'user_wishlist', 'books', 'publishers', 'categories', 'book_details', 'orders', 'order_details', 'carts', 'cart_book'];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        

        foreach($this->toTruncate as $table){
            DB::table($table)->truncate();
        }

        //$this->call(UsersTableSeeder::class);

/*         
        $this->call(CategoriesTableSeeder::class);
        $this->call(PublishersTableSeeder::class);                
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
 */

        //$this->call(OrdersTableSeeder::class);
        //$this->call(BookDetailsTableSeeder::class);
    }
}
