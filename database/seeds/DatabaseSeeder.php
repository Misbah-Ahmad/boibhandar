<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['authors', 'books', 'publishers', 'categories', 'book_details'];


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
        $this->call(CategoriesTableSeeder::class);
        $this->call(PublishersTableSeeder::class);                
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        //$this->call(BookDetailsTableSeeder::class);
    }
}
